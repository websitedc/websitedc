<?php

/**
 * Description of mainControler
 *
 * @author laurent
 */
include_once 'model/translator.php';
include_once 'model/common/validators.php';

global $action, $translator;

$translator = new translator();
$validator = new validators();
session_start();

function change_language() {
    global $translator, $validator;

    if ($validator->lang_validator($_GET['lang'])) {
        if (array_key_exists($_GET['lang'], $translator->get_possible_lang())) {
            $translator->change_language($_GET['lang']);
        }
    }
}

function translate($key) {
    global $translator;
    echo $translator->translate($key);
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    
}

if ($_SERVER['REQUEST_METHOD'] == "GET") {
    if (isset($_GET['lang'])) {
        change_language();
    }
}
