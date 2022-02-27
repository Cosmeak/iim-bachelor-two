import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import './style.css'
import { io } from "socket.io-client";

const socket = io("http://localhost:3001", {
    path: "/api"
})

socket.on("message", (message) => {
    console.log(message); 
});

import axios from "axios";
import VueAxios from 'vue-axios'


createApp(App).use(router, axios, VueAxios).mount('#app')
