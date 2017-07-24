<template lang="html">
    <div class="component">
        <h3>You may view the User Details here</h3>
        <p>Many details</p>
        <p>User name: {{ myName }}</p>
        <p>Reversed name: {{ switchName() }}</p>
        <p>User age: {{ userAge }}</p>
        <button @click="resetName">Reset name (custom event)</button>
        <button @click="resetFn">Reset name (parent's callback)</button>
    </div>
</template>

<script>

import {eventBus} from "../main";

export default {
    // props => passer au component enfant des valeurs du component parent =>
    // props: ["myName"],
    // alternative: on peut contraindre les types en input en passant un objet à props
    props: {
        myName: {
            type: String,
            // hint => possibilité de passer plusieurs types
            // "type": [String, Array],
            required: true,
            // default: "Toto"
        },
        userAge: Number,
        resetFn: Function
    },
    methods: {
        switchName() {
            return this.myName.split("").reverse().join("");
        },
        resetName() {
            this.myName = "Guillaume"
            this.$emit("onNameReset", this.myName);
        }
    },
    // lifecycle hook, syntaxe es6
    created() {
        // $on attend en arg l'event et un callback à exécuter
        eventBus.$on("ageEdited", (age) => {
            this.userAge = age;
        });
    }
}
</script>

<style scoped>
div {
    background:
}
</style>
