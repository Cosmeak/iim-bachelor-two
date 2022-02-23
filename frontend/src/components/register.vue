<template>
  <div id="app">
    <form @submit.prevent="login">
      <div>
        <label>username</label>
        <input name="username" v-model="username" placeholder="username">
      </div>
      <div>
        <label>email</label>
        <input name="email" v-model="email" placeholder="email" type="email">
      </div>
      <div>
        <label>first name</label>
        <input name="firstName" v-model="firstName" placeholder="first name">
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