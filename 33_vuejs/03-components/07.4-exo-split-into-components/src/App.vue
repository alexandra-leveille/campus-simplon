<template>
<div id="app">
    <app-header></app-header>
    <div class="main">
        <app-servers></app-servers>
        <app-server-details></app-server-details>
    </div>
    <app-footer></app-footer>
</div>
</template>

<script>

import Header from "./components/Header.vue";
import Servers from "./components/Servers.vue";
import ServerDetails from "./components/ServerDetails.vue";
import Footer from "./components/Footer.vue";

export default {
    name: 'app',
    data() {
        return {
            msg: 'Welcome to Your Vue.js App'
        }
    },
    components: {
        "app-header": Header,
        "app-servers": Servers,
        "app-server-details": ServerDetails,
        "app-footer": Footer,
    }
}
</script>

<style>
/* par défaut, les styles placés dans un <style> sont appliqués globalement (comportement normal de CSS). Utiliser l'attribut "scoped" pour appliquer un comportement similaire aux webcomponents et specifiquement à la technologie du shadow-dom */
* {
    box-sizing: border-box;
    margin: 0;
}

body {
    font-size: 16px;
    font-family: arial;
}
div {
    color: red;
}
</style>
<style scoped>

.main {
    display: flex;
}
</style>
