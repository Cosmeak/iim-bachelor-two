<template>
  <div class="bg-gray-700 text-white items-center text-3xl font-bold h-20 flex justify-center">
    <h1>Créer un compte</h1>
  </div>
  <div class="flex justify-center mt-64 w-screen">
    <form>
      <div class="flex flex-col justify-center">
        <input class="p-4 w-96 border-slate-700 rounded-t-xl border-2" name="username" v-model="username" placeholder="username">
        <input class="p-4 w-96 border-slate-700 border-2" name="email" v-model="email" placeholder="email" type="email">
        <input class="p-4 w-96 border-slate-700 border-2 rounded-b-xl" type="password" name="password" v-model="password" placeholder="password">
      </div>
      <div class="mt-8 h-12 rounded-xl bg-gray-700 flex justify-center text-white">
        <input type="submit" value="register" @buttonClick="validate()">
      </div>
    </form>
  </div>
</template>

<script>
export default {
  name: "register",
  data: () => ({
    username : [],
    email : [],
    password: []
  }),
  methods: {
    validate() {
      this.axios
          .post("")
          .then((response) => {
            console.log(response)
            this.$router.push("/connection")
          })
          .catch((err) => {
            console.log(err);
          });
    },
  }
};
</script>

<style>
</style>