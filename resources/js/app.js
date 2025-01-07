import './bootstrap';
import { createApp } from "vue";
import Chat from "@/components/chat/index.vue";
const app = createApp({
    components: {
        Chat,
    },
});

app.mount("#app");
