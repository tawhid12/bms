<script setup>
import { ref } from "vue";
import { io } from "socket.io-client";

// URL for the Socket server
const props = defineProps({
    url: {
        type: String,
        default: import.meta.env.VITE_SOCKET_API_URL,
    },
    userId: {
        type: [Number, null],
        required: true,
    },
    exitUrl: {
    type: String,
    required: true
  }
});

console.log(import.meta.env.VITE_SOCKET_API_URL);
// Create socket instance
const socket = io(import.meta.env.VITE_SOCKET_API_URL || 'http://localhost:4000', {
  transports: ["websocket"],
});


// List of all chats
const chats = ref([]);

// Active chat (with messages)
const activeChat = ref({
    roomId: null,
    guest: { name: "", email: "", phone: "" },
    user: props.userId,
    messages: [],
});

function formatTimeAgo(dateString) {
    const now = new Date();
    const pastDate = new Date(dateString);
    const diffInSeconds = Math.floor(
        (now.getTime() - pastDate.getTime()) / 1000
    ); // difference in seconds

    const minutes = 60;
    const hours = 60 * minutes;
    const days = 24 * hours;
    const months = 30 * days; // Approximation
    const years = 12 * months; // Approximation

    if (diffInSeconds < minutes) {
        const seconds = diffInSeconds;
        if (seconds <= 1) return "Just now";
        return `${seconds} seconds ago`;
    } else if (diffInSeconds < hours) {
        const minutesAgo = Math.floor(diffInSeconds / minutes);
        return `${minutesAgo} minute${minutesAgo === 1 ? "" : "s"} ago`;
    } else if (diffInSeconds < days) {
        const hoursAgo = Math.floor(diffInSeconds / hours);
        return `${hoursAgo} hour${hoursAgo === 1 ? "" : "s"} ago`;
    } else if (diffInSeconds < months) {
        const daysAgo = Math.floor(diffInSeconds / days);
        return `${daysAgo} day${daysAgo === 1 ? "" : "s"} ago`;
    } else if (diffInSeconds < years) {
        const monthsAgo = Math.floor(diffInSeconds / months);
        return `${monthsAgo} month${monthsAgo === 1 ? "" : "s"} ago`;
    } else {
        const yearsAgo = Math.floor(diffInSeconds / years);
        return `${yearsAgo} year${yearsAgo === 1 ? "" : "s"} ago`;
    }
}
// New message input
const newMessage = ref("");

// Load chat list from the server
const loadChatList = () => {
    socket.emit("admin_connect");
};

// Handle chat selection and fetch messages for the selected chat
const selectChat = (chat) => {
    socket.emit("getMessages", { roomId: chat.roomId });
    activeChat.value = {
        roomId: chat.roomId,
        guest: {
            name: chat.guest.name,
            email: chat.guest.email,
            phone: chat.guest.phone,
        },
        messages: [],
    };
};

// Send message to the active chat room
const sendMessage = () => {
    if (newMessage.value.trim()) {
        console.log('active Now:',activeChat.value);
        socket.emit("sendMessage", {
            content: newMessage.value,
            roomId: activeChat.value.roomId,
            userId: activeChat.value.user ,
            sender: "Admin",
        });

        // Add the sent message to the chat UI (optimistic UI update)
        // activeChat.value.messages.push({
        //     id: Date.now(),
        //     content: newMessage.value,
        //     roomId: activeChat.value.roomId,
        //     userId: props.userId,
        //     time: new Date().toLocaleTimeString(),
        //     sender: "admin",
        // });

        // Clear the message input field
        newMessage.value = "";
    }
};

// Listen for the chat list from the server
socket.on("adminChatList", async (chatList) => {
    chats.value = await chatList.map((chat) => {
        activeChat.value.messages.push(chat.latestMessage);
        return {
            roomId: chat.roomId,
            guest: {
                name: chat.guest.name,
                email: chat.guest.email,
                phone: chat.guest.phone,
            },
            user: activeChat.value.user,
            latestMessage: chat?.latestMessage.content
        }
    });

    // console.log("chatList", chatList);
});
// socket.on("sendMessage", async (sendMessage) => {
//     console.log(sendMessage);
// });

socket.on("roomJoined", async (message) => {
    console.log("roomJoined", message);
});


// socket.emit("messages", activeChat.value?.roomId);
// socket.on("getMessages", async(message) => {
//     console.log("messages:", message);
// activeChat.value.messages = message
// });

socket.on("messages", async (message) => {
    // activeChat.value.messages = message;
    console.log("messages:", message);
    //  activeChat.value.messages = [...activeChat.value.messages, ...message];
     activeChat.value = {
        ...activeChat.value,
        messages: [...(activeChat.value.messages || []), ...message],
    };
    // activeChat.value = {
    //     roomId: message.roomId,
    //     guest: {
    //         name: message.guest.name,
    //         email: message.guest.email,
    //         phone: message.guest.phone,
    //     },
    //     messages: message,
    // }
    console.log("messages:", message, activeChat?.value);
});

// Load the chat list when the component is mounted
loadChatList();
</script>

<template>
    <div>
        <div class="container-fluid p-3">
            <div class="row g-3">
                <!-- Chat List -->
                <div class="col-md-4" style="height: 90vh;">
                    <div class="h-100 p-3 bg-white rounded shadow overflow-auto">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h2 class="mb-3 h4 fw-bold">Chats</h2>
                           <a :href="exitUrl" class="btn btn-danger">Exit</a>
                        </div>
                        <ul class="list-unstyled">
                            <li
                                v-for="chat in chats"
                                :key="chat.roomId"
                                @click="selectChat(chat)"
                                class="p-3 bg-light rounded cursor-pointer hover:bg-secondary text-dark"
                            >
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex flex-column">
                                        <span class="fw-semibold">{{
                                            chat.guest.name
                                        }}</span>
                                        <span class="text-muted">{{
                                            chat.guest.email
                                        }}</span>
                                        <span class="small text-muted">{{
                                            chat.latestMessage
                                        }}</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Single Chatbox -->
                <div class="col-md-8" style="height: 90vh;">
                    <div class="d-flex flex-column h-100 bg-white rounded shadow">
                        <!-- Chat Header -->
                        <div class="p-3 border-bottom">
                            <h2 class="h5 fw-bold mb-0">
                                Chat with
                                {{
                                    activeChat?.guest?.name ||
                                    activeChat?.guest?.email ||
                                    "..."
                                }}
                            </h2>
                        </div>
                        <!-- Chat Messages -->
                        <div class="p-3 flex-grow-1 overflow-auto">
                            <ul class="list-unstyled">
                                <li
                                    v-for="(message, index) in activeChat?.messages || []"
                                    :key="index"
                                    class="mb-2 p-2 rounded small"
                                    :class="message.sender === 'Guest'
                                        ? 'bg-primary text-white text-end ms-auto w-75'
                                        : 'bg-light text-dark text-start me-auto w-75'"
                                >
                                    <div>
                                        <span class="fw-semibold">{{ message.sender }}</span>
                                    </div>
                                    <p class="mb-1">{{ message.content }}</p>
                                    <small class="text-muted">
                                        {{ formatTimeAgo(message.time) }}
                                    </small>
                                </li>
                            </ul>
                        </div>
                        <!-- Chat Input -->
                        <div class="p-3 border-top d-flex">
                            <input
                                v-model="newMessage"
                                type="text"
                                placeholder="Type a message..."
                                class="form-control me-2"
                            />
                            <button
                                @click="sendMessage"
                                class="btn btn-primary"
                            >
                                Send
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

