<template lang="html">
  <div class="server-details">
      {{defaultText}}
  </div>
</template>

<script>
export default {
    data() {
        return {
            defaultText: "Server details are currently not updated"
        }
    }
}
</script>

<style scoped>
/* noter l'utilisation de l'attribut "scoped" de Vue()*/
div {
    color: blue;
}
.server-details {
    max-width: 50%;
    padding: 20px 40px;
    flex: 1;
}
</style>
