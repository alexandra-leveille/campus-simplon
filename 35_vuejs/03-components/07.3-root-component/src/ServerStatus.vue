<template>
    <!--  un <template> ne peut contenir qu'un seul enfant direct (root node) -->
    <div class="status-component">
        <h1>Serveur status: <span class="status">{{status}}</span></h1>
        <button class="btn" @click="changeStatus">change</button>
    </div>
</template>

<script>
export default {
    data() {
        return {
            status: 'critical'
        }
    },
    methods: {
        // syntaxe ES6 rendue possible par la compilation via babel
        changeStatus() {
            let newStatus = this.status === "critical" ? "normal" : "critical";
            this.status = newStatus;
        }
    }
}
</script>

<style>

h1,
h2 {
    font-weight: normal;
    font-size: 1rem;
}

.status-component {
    display: flex;
    border-bottom: 1px solid silver;
    padding: 20px;
    height: 20px;
}
.status {
    font-weight: bold;
}
.btn {
    margin-left: 20px;
}
</style>
