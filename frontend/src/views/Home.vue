<template>
  <div class="h-screen">
    <div class="bg-gray-700 text-white items-center text-3xl font-bold h-20 flex justify-around">
      <p class="text-sm">Nom du mec</p>
      <h1>Discussion général</h1>
      <p class="text-sm">button</p>
    </div>
    <div class="flex justify-center w-5/6 h-4/5">
      <div class="w-full ml-32">
        <article  v-for='message in messages' :key="message" class="bg-gray-300 mr-32 rounded-xl w-1/3"> <!-- block for the messages -->
          <p id='app' class="p-4">{{name}}{{message.message}}</p>
          <p v-text="$route.params.user_id"></p>
        </article>
      </div>
    </div>
    <div class="flex justify-center">
      <textarea ref="sendMessage" v-model="hismessage" placeholder="ajoutez plusieurs lignes" class="p-4 w-4/6 border-slate-700 border-2 rounded-xl"></textarea>
      <button class="bg-gray-700 w-32 text-white rounded-xl" @click="validate()">Send</button>
    </div>
  </div>
</template>

<script>
export default {
  name: "Home",
    el: '#app',
  data () {
    return {
      messages: null,
      name: null
    }
  },
  mounted () {
    const axios = require('axios')
    const token = this.$route.params.user_token
    
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
      .then(response => this.messages = response.data.data)
  },
  methods: {
    validate: function(){
      const axios = require('axios')
      const token = this.$route.params.user_token
      const url = "http://localhost:3000/api/message"
      const headers = {
        'Authorization': "Bearer " + token,
        'Accept': 'application/json',
        'Content-Type': 'application/json'
      }
      console.log(token)
      const body = {
        userId: this.$route.params.user_id, 
        message: this.$refs.sendMessage.value
      }
      axios({ method: 'POST', mode: 'cors', url: url, data: body, headers: headers })
        .then(response => console.log(response))
    }
  }
};

</script>

<style scoped>

</style>