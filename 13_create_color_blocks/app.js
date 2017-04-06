/*global window, log, select, selectAll, byId, document*/
// app est une IIFE : Immediatly Invoqued Function Expression
var app = (function app() {
    "use strict";
    var creerBlocks, dom, observer, gererSelectionBlock, mettreBlocksActifsAjour;

    dom = {};

    // étape 2 => créer un sous-programme permettant
    // la sélection/désélection au clicks des blocks :
    // la bordure du block change de couleur (actif/inactif)
    // au changement de l'input de couleur, les blocks selectionnés sont affectés

    window.onload = function start() {
        dom.btn = byId("create_blocks");
        dom.color = byId("color_blocks");
        dom.count = byId("nb_blocks");
        dom.blocks = byId("blocks");
        observer();
    };

    mettreBlocksActifsAjour = function mettreBlocksActifsAjour(actives) {
        var i;
        for (i = 0; i < actives.length; i += 1) {
            actives[i].style.background = dom.color.value;
        }
    };


    gererSelectionBlock = function gererSelectionBlock() {
        this.classList.toggle("is-active");
    };

    creerBlocks = function creerBlocks() {
        var i, limit, block;
        limit = Number(dom.count.value);
        for (i = 0; limit >= 1 && i < limit; i += 1) {
            // on créé une div
            block = document.createElement("div");
            // on lui applique la class block pour la lier au CSS
            block.classList.add("block");
            // on applique dynamiquement une couleur de fond
            block.style.background = dom.color.value;
            // on écoute les clicks surt chaque block créé
            block.onclick = gererSelectionBlock;
            // on insère le nouveau block dans son conteneur
            dom.blocks.appendChild(block);
        }
    };

    observer = function observer() {

        dom.btn.onclick = function choisir() {
            // les blocks cliqués ont la classe active...
            var actives = dom.blocks.querySelectorAll(".block.is-active");
            // on utilise cette info pour choisir l'action suivante
            if (!actives.length) {
                // si la longueur de blocks actifs est strictement égal à 0
                creerBlocks();
            } else {
                mettreBlocksActifsAjour(actives);
            }
        };
    };

}());
