<template>
  <div class="bg-gray-700 text-white items-center text-3xl font-bold h-20 flex justify-center">
    <h1>Connexion à un compte</h1>
  </div>
  <div class="flex justify-center mt-64 w-screen">
    <form @submit="validate">
      <div class="flex flex-col justify-center">
        <input class="p-4 w-96 border-slate-700 border-2 rounded-t-xl" v-model="email" placeholder="email" />
        <input class="p-4 w-96 border-slate-700 border-2 rounded-b-xl" v-model="password" placeholder="password" />
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
    password: []
  }),
  methods: {
    validate: function (e) {
      console.log("ok")
      e.preventDefault()
      const axios = require('axios')


      /*axios({ method: 'POST', url: url, data: body, headers: headers })
          .then(response => console.log(response))*/
      axios.post("http://localhost:3000/api/user")
      .then(u => console.log(u))
      .catch(err => console.log(err))
    }
  }
};
</script>

<style>
</style>