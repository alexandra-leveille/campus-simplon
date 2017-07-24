<template>
    <div>
        <app-server-status v-for="(server, key) in 5" :key="key"></app-server-status>
    </div>
</template>

<script>
    // on charge le component  StatusComp (nom arbitraire) localement à ce component
    import StatusComp from "./ServerStatus.vue";

    export default {
        components: {
            "app-server-status": StatusComp
        }
    }
</script>

<style>
* {
    font-family: arial;
    margin: 0;
}

</style>
