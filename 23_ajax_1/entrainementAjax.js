function postViaAjax() {
    var xhr;
    xhr = new XMLHttpRequest();
    xhr.open("post", "api.php");

    xhr.send(null);
}

function postViaAjax2() {
    var xhr;
    xhr = new XMLHttpRequest();
    xhr.open("post", "api.php");
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send("?action=decouvrir_ajax");
}

function postViaAjax3() {
    var xhr, form;
    xhr = new XMLHttpRequest();
    form = new FormData();

    form.append("action", "avancer_avec_formdata");
    form.append("niveau", "newbie");

    xhr.open("POST", "api.php", true);

    xhr.onload = function success() {
        log("yata ! success !");
    };

    xhr.onerror = function error() {
        log("meh ! error !");
    };

    xhr.send(form);
}
