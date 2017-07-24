/* jshint esversion: 6 */

import Vue from 'vue';
import App from './App.vue';

// création d'un "Service" global, cad distribuable dans toute l'application
export const eventBus = new Vue({
    methods: {
        changeAge(age) {
            this.$emit("ageEdited", age);
        }
    }
});
// attention, le service doit être chargé avant l'instance root

new Vue({
  el: '#app',
  render: h => h(App)
});

// WARNING: passer des états entre les components peut devenir compliqué au fur et à mesure que l'application gagne en complexité. VueJS propose un outils pour simplifier le process : VueX ... à voir dans la suite du cours
