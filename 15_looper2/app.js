var app = (function app() {
  "use strict";
  var doWhile;

  window.onload = function start() {
      log("ready to rock");

      doWhile();

  };

  doWhile = function doWhile() {
    var quest, res, resUser;

    quest = "JS ça roxxx ?";
    res = "oui";

    // do {
      resUser = window.prompt(quest);
      log(typeof resUser)
    // } while (resUser !== res);

    window.alert("oookay c'est bon voilà ton dessert !!!");

  };

}());
