<template lang="html">
    <div class="component">
        <h3>Edit the User Details here</h3>
        <p>User age: {{ userAge }}</p>
        <button @click="editAge">edit age</button>
        <!--  au click sur le boutton, userAge est mis à jour dans ce component -->
        <!--  pour passer cette nouvelle valeur au component frère {UserDetail}, il faut obligatoirement passer par le component parent {User}-->
    </div>
</template>

<script>

import {eventBus} from "../main";

export default {
    props: ["userAge"],
    methods: {
        editAge() {
            this.userAge = 37;

            // pour communiquer vers le parent
            // méthode 1 => custom event
            // this.$emit("ageEdited", this.userAge);
            // problème : avec des components nestés, il faudra faire remonter l'event d'autant de niveaux que nécessaire ... peu pratique donc


            // méthode 2 => bus events (Services like)
            // eventBus.$emit("ageEdited", this.userAge);
            // C'est déjà beaucoup mieux

            // méthode 3 => délocaliser la logique dans le eventBus
            eventBus.changeAge(this.userAge);
            // c'est au top !
        }
    }
}
</script>

<style lang="css">
</style>
