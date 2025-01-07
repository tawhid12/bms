<script setup>
</script>

<template>
    <!-- Chat List -->
    <div class="h-100 p-3 bg-white rounded shadow overflow-auto">
        <h2 class="mb-3 h4 fw-bold">Chats</h2>
        <ul class="list-unstyled">
            <li
                v-for="chat in chats"
                :key="chat.roomId"
                @click="selectChat(chat)"
                class="p-3 bg-light rounded cursor-pointer hover-shadow"
                style="cursor: pointer;"
            >
                <div class="d-flex justify-content-between">
                    <div class="d-flex flex-column">
                        <span class="fw-semibold">{{ chat.guest.name }}</span>
                        <span class="text-muted small">{{ chat.guest.email }}</span>
                    </div>
                    <span class="text-muted small">{{ chat.latestMessage }}</span>
                </div>
            </li>
        </ul>
    </div>
</template>

<style>
.hover-shadow:hover {
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.15);
    background-color: #f8f9fa; /* Slight hover effect */
}
</style>
