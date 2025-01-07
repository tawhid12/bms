<script setup>
import { ref } from "vue";
import { io } from "socket.io-client";

const props = defineProps({
    url: {
        type: String,
         default: import.meta.env.VITE_SOCKET_API_URL,
    },
    userId: {
        type: Number,
    },
});

// Create socket instance
const socket = io(import.meta.env.VITE_SOCKET_API_URL || 'http://localhost:4000', {
  transports: ["websocket"],
});

const newMessage = ref("");

socket.emit("joinRoom", activeChat.value?.roomId);

const sendMessage = () => {
    if (newMessage.value.trim()) {
        socket.emit("sendMessage", {
            content: newMessage.value,
            roomId: activeChat.value.roomId,
            userId: props.userId ?? 2,
            sender: "admin",
        });
console.log("activeChat.value", activeChat.value);
        activeChat.value.messages.push({
            id: Date.now(),
            content: newMessage.value,
            roomId: activeChat.value.roomId,
            userId: props.userId,
            time: new Date().toLocaleTimeString([], {
                hour: "2-digit",
                minute: "2-digit",
            }),
            sender: "admin",
        });

        newMessage.value = "";
    }
};

socket.on("messages", async (message) => {
    activeChat.value.messages = message;
    console.log("messages:", message, activeChat?.value);
});
</script>

<template>
    <!-- Single Chatbox -->
    <div class="d-flex flex-column h-100 col bg-white rounded shadow">
        <!-- Chat Header -->
        <div class="p-3 border-bottom">
            <h2 class="h5 fw-bold">
                Chat with
                {{
                    activeChat?.guest?.name || activeChat?.guest?.email || "..."
                }}
            </h2>
        </div>

        <!-- Chat Messages -->
        <div class="flex-grow-1 p-3 overflow-auto" style="max-height: 60vh;">
            <div
                v-for="message in activeChat?.messages || []"
                :key="message.id"
                class="d-flex flex-column mb-3"
            >
                <div
                    class="rounded p-2"
                    :class="
                        message.sender === 'Guest'
                            ? 'align-self-end bg-primary text-white'
                            : 'align-self-start bg-light text-dark'
                    "
                >
                    {{ message.content }}
                </div>
                <small
                    class="text-muted"
                    :class="
                        message.sender === 'Guest'
                            ? 'align-self-end'
                            : 'align-self-start'
                    "
                >
                    {{ formatTimeAgo(message.time) }}
                </small>
            </div>
        </div>

        <!-- Chat Input -->
        <div class="d-flex align-items-center p-3 border-top">
            <input
                v-model="newMessage"
                type="text"
                class="form-control me-3"
                placeholder="Type a message..."
            />
            <button @click="sendMessage" class="btn btn-primary">
                Send
            </button>
        </div>
    </div>
</template>

<style>
/* Custom style for smooth overflow scrolling */
.overflow-auto {
    overflow-y: auto;
}
</style>
