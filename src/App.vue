<template>
<div class="min-h-full w-full">
    <Header />
    <main class="max-w-7xl mx-auto">
        <div class="w-full mx-auto py-6 sm:px-6 lg:px-8">
            <div class="w-full px-4 py-6 sm:px-0">
                <UserIndex />   
            </div>
        </div>
    </main>
</div>
    
</template>

<script>
import Header from "./components/Header.vue"
import UserIndex from "./views/objects/Index.vue"

export default {
    name: "App",
    components: {
        Header,
        UserIndex
    },
};
</script>
