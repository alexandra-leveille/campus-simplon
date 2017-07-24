<template lang="html">
    <header>
        <h1 class="title">{{title}}</h1>
    </header>
</template>

<script>
export default {
    data() {
        return {
            title: "Server Status"
        }
    }
}
</script>

<style scoped>
/* noter l'utilisation de l'attribut "scoped" de Vue()*/
header {
    padding: 20px 40px;
    border-bottom: 1px solid silver;
}

.title {
    font-size: 2rem;
}
</style>
