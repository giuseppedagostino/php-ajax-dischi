// importo vue
import Vue from 'vue';
// importo axios
const axios = require('axios').default;

var app = new Vue({
  el: "#app",
  data: {
    discs: [],
  },
  mounted: function() {
    alert("Vue funziona!");
    axios
    // non devo mettere i puntini e lo slash perchè a quanto pare parte da file index_vue.php, che si trova "un livello sopra"
    // inoltre devo chiamare il server perchè è il file dove l'array php viene convertito in uno leggibile da js
    .get("php_partials/server.php")
    // trasformo in arrow function perchè il this cambia contesto
    .then( (response) => {
      console.log(response.data);
      this.discs = response.data;
    });
  }
});