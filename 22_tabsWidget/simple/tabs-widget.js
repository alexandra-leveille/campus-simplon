/*global byId, select, selectAll, log*/
var TabsWidget = (function initTabsWidget() {
    "use strict";

    var dom = {},
        gereClicks,
        observer;

    window.onload = function start() {
        dom.tabs = Array.prototype.slice.call(selectAll(".tab"));
        dom.contents = selectAll(".content");
        observer();
    };

    gereClicks = function gereClicks(evt) {
        // log(evt);
        var indexCible,
            previousTab,
            previousContent;
        // on récupère l'index (le numéro de case) de la tab cliquée
        indexCible = dom.tabs.indexOf(this);
        // on selectionne la tab ET le content déjà actifs
        previousTab = select(".tab.is-active");

        if (previousTab === this) {
            return;

        } else {
            previousContent = select(".content.is-active");
            previousTab.classList.remove("is-active");
            previousContent.classList.remove("is-active");
            // on ajoute la classe active à la tab cliquée
            this.classList.add("is-active");
            // on récupère le content ayant le même index que la tab cliquée
            dom.contents[indexCible].classList.add("is-active");
        }

    };

    observer = function observer() {
        // on parcourt toutes les tabs du widget
        // le second param (this) définit la valeur de this dans le forEach
        dom.tabs.forEach(function parse(tab) {
            // on écoute les clicks sur chaque tab
            tab.onclick = gereClicks;

        }, this);
    };

}());
