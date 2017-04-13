var app = (function app() {
    "use strict";
    var dom, doWhile, parcourirDataset, observer;

    window.onload = function start() {
        log("ready to rock");
        dom = {};
        dom.exo1 = byId("do_while");
        dom.exo2_3 = byId("get_data");
    };

    doWhile = function doWhile() {
        var quest, res, resUser;

        quest = "JS ça roxxx ?";
        res = "oui";

        do {
            resUser = window.prompt(quest);

        } while (resUser !== res);

        window.alert("oookay c'est bon voilà ton dessert !!!");

    };


    parcourirDataset = function parcourirDataset() {

      dataset1.forEach(function parse(perso) {
        creerCarte(perso);
      });
    };

    creerCarte = function creerCarte(info) {
      log(info);
    };



    observer = function observer() {
      dom.exo1.onclick = doWhile;
      dom.exo2_3.onclick = parcourirDataset;
    };

}());
