<template lang="html">
    <li class="server">
        servers
    </li>
</template>

<script>
export default {
    data() {
        return {
            title: "Server"
        }
    }
}
</script>

<style scoped>
/* noter l'utilisation de l'attribut "scoped" de Vue()*/
.server {
    border: 1px solid silver;
    border-collapse: collapse;
    padding: 20px 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: flex-start;
    color: inherit;
    transition: background .5s linear, color .2s linear;
}

.server:hover {
    cursor: pointer;
    background: silver;
    color: white;
}

.server:first-of-type {
    border-top-right-radius: .3rem;
    border-top-left-radius: .3rem;
}

.server:last-of-type {
    border-bottom-right-radius: .3rem;
    border-bottom-left-radius: .3rem;
}
</style>
