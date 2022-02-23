<template>
  <div class="bg-gray-700 text-white text-3xl font-bold h-20 flex justify-center">
    <h1>Créer un compte</h1>
  </div>
  <div class="mt-64">
    <form>
      <div class="flex-col justify-center rounded-xl border-slate-700	border-2">
        <input name="username" v-model="username" placeholder="username">
        <input name="email" v-model="email" placeholder="email" type="email">
        <input name="password" v-model="password" placeholder="password">
      </div>
      <input type="submit" value="register">
    </form>
  </div>
</template>

<script>
export default {
  name: "register",
  data() {
    return {
      username: "",
      email: "",
      password: "",
    };
  },
  methods: {
  }
};
</script>

<style>
</style>