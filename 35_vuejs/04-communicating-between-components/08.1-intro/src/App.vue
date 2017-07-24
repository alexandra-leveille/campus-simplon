<template>
  <div id="app">
      <app-user></app-user>
  </div>
</template>

<script>
import AppUser from "./components/User.vue";

export default {
    components: {
        // cette syntaxe ES6 fonctionne, Vue() transforme cette référence et la rend compatible avec l'api DOM (<app-user>)
        AppUser
    }
 }

</script>

<style>
    .f-row {
        display: flex;
    }
    div.component {
        border: 1px solid;
        padding: 30px;
        flex: 1;
    }
</style>
