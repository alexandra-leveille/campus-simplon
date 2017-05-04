var app = (function app() {
    "use strict";

    var cakes = [];
    
    window.onload = function start() {
        var gateau1 = new Cake({
            flavor: "chocolate",
            price: 5
        });

        log(gateau1);
        log(gateau1.miam());
    };

}());
