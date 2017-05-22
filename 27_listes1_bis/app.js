(function list() {
    "use strict";
    var btn,
        lis,
        inp,
        handler,
        createItem,
        deleteItem,
        btndel,
        moveItem;

    window.onload = function() {
        log("ready !");
        btn = byId("btn");
        inp = byId("inp");
        save = byId("save");
        lis = byId("list");
        btndel = byId("btndel");
        btn.onclick = handler;
        btndel.onclick = deleteItem;
        btndel.onclick = postToServer;
    };

    handler = function handler() {
        if (inp.value.length === 0) {
            alert("Champ vide");
        } else {
            createItem(inp.value);
        }

    };

    createItem = function createItem(param) {
        var checkbox, iconUp, iconDown, li;
        li = document.createElement("li");
        li.classList.add("item");
        li.textContent = param;
        lis.appendChild(li);
        checkbox = document.createElement("input");
        checkbox.type = "checkbox";
        li.appendChild(checkbox);
        iconUp = document.createElement("i");
        iconUp.classList.add("fa", "fa-caret-up", "haut");
        iconUp.onclick = moveItem;
        li.appendChild(iconUp);
        iconDown = document.createElement("i");
        iconDown.onclick = moveItem;
        iconDown.classList.add("fa", "fa-caret-down", "bas");
        li.appendChild(iconDown);

    };

    deleteItem = function deleteItem() {
        var i,
            check = document.querySelectorAll("input:checked");

        if (check.length === 0) {
            alert("cocher case");
        } else {
            for (i = 0; i < check.length; i += 1) {
                check[i].parentElement.remove();
                log(check[i]);
            }
        }
    };

    moveItem = function moveItem(evt) {
        var bro,
            li;

        li = this.parentElement;

        if (this.classList.contains("haut")) {
            bro = li.previousElementSibling;
            if (bro) {
                lis.insertBefore(li, bro);
            }
        } else {
            bro = li.nextElementSibling;
            if (bro){
                bro = li.nextElementSibling;
            }
            lis.insertBefore(li, bro);

        }
        log("bro =>");
        log(bro);

    };

    postToServer = function postToServer() {

    };


}());
