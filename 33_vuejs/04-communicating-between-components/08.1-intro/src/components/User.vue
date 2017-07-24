<template lang="html">
    <div class="component">
        <h1 class="title">The User Component</h1>
        <p>I'm a SuperUser (therefore I sudo)</p>
        <button
            @click="changeName"
            class="btn">
            Change my name
        </button>
        <hr>
        <div class="f-row">
            <!--  la property :name bind la valeur de l'instance de vue. On l'envoie comme valeur interprétée au component {userDetail} -->
            <!--  onNameReset est un event() custom envoyé depuis le component enfant {userDetail} -->
            <!-- :resetFn est un pointeur vers  resetName() passé en référence à {UserDetail} -->
            <app-user-detail
                :myName="name"
                :resetFn="resetName"
                :userAge="age"
                @onNameReset="name = $event">
            </app-user-detail>

            <app-user-edit
                :userAge="age"
                @ageEdited="age = $event">
            </app-user-edit>
        </div>
    </div>
</template>

<script>
import appUserDetail from "./UserDetail.vue";
import appUserEdit from "./UserEdit.vue";

export default {
    data: () => {
        return {
            name: "Guillaume",
            age: 36
        }
    },
    components: {
        appUserDetail,
        appUserEdit,
    },
    methods: {
        changeName() {
            this.name = "kostra_0ne"
        },
        resetName() {
            this.name = "Guillaume"
        },
    }
}
</script>

<style lang="css">
</style>
