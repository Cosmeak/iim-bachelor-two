<template>
  <div class="bg-gray-700 text-white items-center text-3xl font-bold h-20 flex justify-center">
    <h1>Créer un compte</h1>
  </div>
  <div class="flex justify-center mt-64 w-screen">
    <form>
      <div class="flex flex-col justify-center">
        <input class="p-4 w-96 border-slate-700 border-2 rounded-t-xl" v-model="email" placeholder="email" />
        <input class="p-4 w-96 border-slate-700 border-2 rounded-b-xl" v-model="password" placeholder="password" />
      </div>
      <div class="mt-8 h-12 rounded-xl bg-gray-700 flex justify-center text-white">
        <input type="submit" value="register">
      </div>
    </form>
  </div>
</template>

<script>
export default {
  name: "register",
  data: () => ({
    email : [],
    password: []
  }),
  methods: {
  }
};
</script>

<style>
</style>