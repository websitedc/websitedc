<?php

/**
 * Description of mainControler
 *
 * @author laurent
 */
include_once 'model/translator.php';

global $action, $translator;

$translator = new translator();
session_start();

function change_language() {
    global $translator;
    if (array_key_exists($_GET['lang'], $translator->get_possible_lang())) {
        $_SESSION['lang'] = $_GET['lang'];
        $translator->change_language($_SESSION['lang']);
    }
}

function translate($key) {
    global $translator;
    echo $translator->translate($key);
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_SESSION['page'])) {
        
    }
}

if ($_SERVER['REQUEST_METHOD'] == "GET") {
    if (isset($_GET['lang'])) {
        change_language();
    }
}
