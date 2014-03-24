<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $TO = "fclaeys.project@gmail.com";

    $h = "From: " . $_POST['email'];
    
    $subject = "Demande de contact";

    $message = "";

    foreach ($_POST as $key => $value) {
        $message .= "$key : $value\n";
    }

    mail($TO, $subject, $message, $h);

    /*Header("Location: /validation.php");*/
    
    var_dump($_POST);
}
?>