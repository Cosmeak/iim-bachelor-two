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
          <p class="p-4">dsf</p>
        </article>
      </div>
    </div>
    <div class="flex justify-center">
      <input class="p-4 w-5/6 border-slate-700 border-2 rounded-xl" name="password" v-model="password" placeholder="Écrivez votre message">
    </div>
  </div>
</template>

<script>
export default {
  name: "Home",
  data() {
    return {
    };
  },
  methods: {
  }
};
</script>

<style scoped>

</style>