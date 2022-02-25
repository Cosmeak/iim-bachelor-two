import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import './style.css'
import { io } from "socket.io-client";

const socket = io("http://localhost:3000", {
    path: "/api"
})

socket.on("connect", () => {
    console.log(socket.id); 
});

createApp(App).use(router).mount('#app')