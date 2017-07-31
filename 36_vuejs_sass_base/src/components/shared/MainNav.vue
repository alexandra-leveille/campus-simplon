<template lang="html">
  <nav>
      <ul>
          <router-link :to="{ name: 'home', params: {} }">
              home
          </router-link>
          <router-link :to="{ name: 'about', params: {} }">
              about
          </router-link>
      </ul>
  </nav>
</template>

<script>
export default {
}
</script>

<style lang="scss">
nav {
    background: white;
    color: $blue;
}
nav a {
    color: $text !important;
}
</style>
