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
<<<<<<< HEAD
    validate: function (e) {
      console.log("ok")
      e.preventDefault()
      const axios = require('axios')


      /*axios({ method: 'POST', url: url, data: body, headers: headers })
          .then(response => console.log(response))*/
      axios.post("http://localhost:3000/api/user")
      .then(u => console.log(u))
      .catch(err => console.log(err))
=======
    validate: function () {
      console.log("test");
      this.axios
          .get("http://localhost:3000/api/user", )
          .then((response) => {
            console.log(response)
            if (response.data.user) {
              console.log(response.data.user);
              console.log("biteee")
            } else {
              console.log("Not in this fucking fuck database aka db in french base de donnee")
            }
          })
          .catch((err) => {
            console.log(err);
          });
>>>>>>> 09a089c45b333cc61ed08244a0e5253cd23ab882
    }
  }
};
</script>

<style>
</style>