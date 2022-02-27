<template>
  <div class="h-screen">
    <div class="bg-gray-700 text-white items-center text-3xl font-bold h-20 flex justify-around">
      <p class="text-sm">Nom du mec</p>
      <h1>Discussion général</h1>
      <p class="text-sm">button</p>
    </div>
    <div class="flex justify-center w-5/6 h-4/5">
      <div class="w-full ml-32">
        <article class="bg-gray-300 rounded-xl w-1/3"> <!-- block for the messages -->
          <p id='app' class="p-4">{{name}}{{message}}</p>
        </article>
      </div>
    </div>
    <div class="flex justify-center">
      <textarea v-model="hismessage" placeholder="ajoutez plusieurs lignes" class="p-4 w-4/6 border-slate-700 border-2 rounded-xl"></textarea>
      <button class="bg-gray-700 w-32 text-white rounded-xl" @buttonClick="validate()">Send</button>
    </div>
  </div>
</template>

<script>
export default {
  name: "Home",
    el: '#app',
  data () {
    return {
      message: null,
      name: null
    }
  },
  mounted () {
    const axios = require('axios')
    
    const token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VySWQiOiI2MjEzYTk0YzlmODc0YmJmYTRlZjU2MTciLCJpYXQiOjE2NDU3NzQzNDAsImV4cCI6MTY0NTc5NTk0MH0.E2eGtO1uXpP3TLElzCPlL1W6wjD0yyyqaPgNL33oR30'
    const url = 'http://localhost:3000/api/message'
    const body = {
      userId: '6213a94c9f874bbfa4ef5617'
    }
    const headers = {
      "Authorization": "Bearer " + token,
      'Accept': 'application/json',
      'Content-Type': 'application/json'
    }
    
    axios({ method: 'GET', mode: 'cors', url: url, data: body, headers: headers })
      .then(response => console.log(response))
  },
  methods: {
    validate: function(){
      const axios = require('axios')
      const token = ""
      const url = "http://localhost:3000/api/message"
      const headers = {
        'Authorization': "Bearer " + token,
        'Accept': 'application/json',
        'Content-Type': 'application/json'
      }
      const body = {
        userId: "", 
        message: this.message
      }
      axios({ method: 'POST', mode: 'cors', url: url, data: body, headers: headers })
        .then(response => console.log(response))
        .then(this.$router.push("/home"))
    }
  }
};

</script>

<style scoped>

</style>