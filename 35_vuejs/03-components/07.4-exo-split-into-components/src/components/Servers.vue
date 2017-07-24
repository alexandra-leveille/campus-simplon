<template lang="html">
    <ul class="servers">
        <app-server v-for="(server, key) in servers" :key="key"></app-server>
    </ul>
</template>

<script>
import Server from "./Server.vue";

export default {
    data() {
        return {
            title: "Server",
            servers: [1, 2, 3, 4, 5]
        }
    },
    components: {
        "app-server": Server
    }
}
</script>

<style scoped>
/* noter l'utilisation de l'attribut "scoped" de Vue()*/
.servers {
    padding-top: 20px;
    padding-bottom: 20px;
    list-style: none;
    max-width: 50%;
    flex: 1;
}

</style>
