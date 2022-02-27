import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import './style.css'

import axios from "axios";
import VueAxios from 'vue-axios'


createApp(App).use(router, axios, VueAxios).mount('#app')
