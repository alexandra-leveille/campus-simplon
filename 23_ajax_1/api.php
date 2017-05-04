<?php


//echo "@apiphp";

if (isset($_GET["action"])) {
    echo "<pre>";
        print_r($_GET);
    echo "</pre>";
}

if (isset($_POST["action"])) {
    echo "<pre>";
        print_r($_POST);
    echo "</pre>";
}
