import * as Vue from "vue"
import App from './App.vue'
import './style.css'
<<<<<<< HEAD
import axios from 'axios'
import VueAxios from 'vue-axios'

axios.defaults = Object.assign(axios.defaults, {
  withCredentials: true,
  baseUrl: 'http://localhost:3000/api'
})

const app = Vue.createApp(App).mount('#app')

app.use(VueAxios, axios)
=======
import router from "@/router"

createApp(App).use(router).mount('#app')
>>>>>>> b6050905d7e2f26ab7bf9be03a69b00474c07ff6
