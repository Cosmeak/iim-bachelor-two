<template>
  <div class="bg-gray-700 text-white items-center text-3xl font-bold h-20 flex justify-center">
    <h1>Connexion à un compte</h1>
  </div>
  <div class="flex justify-center mt-64 w-screen">
    <form @submit.prevent="validate">
      <div class="flex flex-col justify-center">
        <input class="p-4 w-96 border-slate-700 border-2 rounded-t-xl" v-model="email" placeholder="email" />
        <input class="p-4 w-96 border-slate-700 border-2 rounded-b-xl" v-model="password" type="password" placeholder="password" />
      </div>
      <div class="mt-8 h-12 rounded-xl bg-gray-700 flex justify-center text-white">
        <!--<buttonconnection @buttonClick="validate()" />-->
        <input
            type="submit"
            value="Submit"
        >
      </div>
    </form>
  </div>
</template>

<script>
export default {
  name: "register",
  components: {  },
  data: () => ({
    email : [],
    password: [],
  }),
  methods: {
    validate: function () {
      const axios = require('axios')
      const url = "http://localhost:3000/api/login"
      const headers = {
        'Accept': 'application/json',
        'Content-Type': 'application/json'
      }
      const body = {
        email: this.email, 
        password: this.password
      }
      axios({ method: 'POST', mode: 'cors', url: url, data: body, headers: headers })
        .then(this.$router.push("/home"))
        .then(response => this.$router.push({ name: 'Home', params: { user_token: JSON.stringify(response.data.token), user_id: JSON.stringify(response.data.data._id) }}))
    },
  },
};

</script>