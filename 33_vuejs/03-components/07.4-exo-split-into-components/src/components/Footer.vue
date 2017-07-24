<template lang="html">
  <footer class="footer">
      <span>{{text}}</span>
  </footer>
</template>

<script>
export default {
    data() {
        return {
            text: "All servers are manage here"
        }
    }
}
</script>

<style scoped>
    .footer {
        padding: 40px 40px 0;
        border-top: 1px silver;
    }
</style>
