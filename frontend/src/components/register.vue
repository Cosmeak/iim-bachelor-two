<template>
  <div class="bg-blue-500">
    <h1>Créer un compte</h1>
  </div>
  <div id="app">
    <form>
      <input name="username" v-model="username" placeholder="username">
      <input name="email" v-model="email" placeholder="email" type="email">
      <input name="password" v-model="password" placeholder="password">
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
.bg-nav {
  background-color: #374151;
  color: white;
}
form {
  width: 30%;
  display: flex;
  flex-direction: column;
}
</style>