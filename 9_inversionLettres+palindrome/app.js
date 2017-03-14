/*global window, log, secToMillisec, byId, select, selectAll */
var invertLetters = (function invertLetters() {
    "use strict";
    // attendre le load
    // récupéere le champs input
    // écouter les clicks sur le bouton
    // déclarer un handler
    // dans le handler, déclarer une var tmp = ""
    // récupérer la valeur de input
    // fabriquer un tableau de lettres avec cette valeur
    // pour cela ... utiliser split (mdn)
    // parcourir le tableau à l'envers
    // récupérer chaque lettre et la concaténer avec tmp
    // retourner tmp
    // afficher le mot inversé dans la div#resultat
    var btn, input, resultat, inverser;

    window.onload = function start() {
        input = byId("input");
        btn = byId("submit");
        resultat = byId("resultat");

        btn.onclick = function () {
            var res = inverser(input.value);
            resultat.innerHTML = res;
        };
    };

    inverser = function inverser(text) {
        var i, arr, tmp = "";
        // on sépare la chaîne en tableau de caractères
        arr =  text.split("");
        // on parcourt le tableau de lettres à l'envers
        for (i = arr.length - 1; i >= 0; i -= 1) {
            tmp += text[i]; // on concatène chaque lettre
        }
        return tmp;
    };






}());
