/* jshint esversion: 6 */
import Vue from 'vue';
import App from './App.vue';
import Home from "./Home.vue";

// on charge le component Home (nom arbitraire) globalement dans l'app
Vue.component("app-servers", Home);

new Vue({
  el: '#app',
  render: h => h(App)
  // render remplace la propriété {template} d'une instance Vue()
  // c'est la solution la plus flexible
  // par exemple, on évite la limitation de {template} à une string (mono-ligne)
});
