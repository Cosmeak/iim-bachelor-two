import * as Vue from "vue"
import App from './App.vue'
import './style.css'
import axios from 'axios'
import VueAxios from 'vue-axios'

axios.defaults = Object.assign(axios.defaults, {
  withCredentials: true,
  baseUrl: 'http://localhost:3000/api/'
})

const app = Vue.createApp(App).mount('#app')

app.use(VueAxios, axios)