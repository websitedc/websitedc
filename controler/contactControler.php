<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


if ($_SERVER['REQUEST_METHOD'] == "POST") {

    /* Déclaration de l'adresse de destination. */
    $TO = "fclaeys.project@gmail.com";

    /* On filtre les serveurs qui rencontrent des bogues. */
    if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $TO)) {
        $passage_ligne = "\r\n";
    } else {
        $passage_ligne = "\n";
    }
    
    $passage_ligne_html = "<br \>";

    /* Déclaration des messages au format texte et au format HTML. */
    $message_txt = $_POST['comments'];
    $message_html = "<html><head></head><body>" . $_POST['comments'] . "<br /></body></html>";

    /* Création de la boundary */
    $boundary = "-----=" . md5(rand());

    /* Création de la boundary */
    $subject = $_POST['subject'];

    /* Création du header de l'e-mail. */
    
    $header = "From: " . $_POST['firstname'] . " " . $_POST['lastname'] . " " . "<" . $_POST['email'] . ">" . $passage_ligne;
    $header.= "Reply-to: " . $_POST['firstname'] . " " . $_POST['lastname'] . " " . "<" . $_POST['email'] . ">" . $passage_ligne;
    $header.= "MIME-Version: 1.0" . $passage_ligne;
    $header.= "Content-Type: multipart/alternative;" . $passage_ligne . " boundary=\"$boundary\"" . $passage_ligne;
    

    /* Création du message. */
    $message = $passage_ligne . "--" . $boundary . $passage_ligne;

    /* Ajout du message au format texte. */
    $message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"" . $passage_ligne;
    $message.= "Content-Transfer-Encoding: 8bit" . $passage_ligne;
    $message.= $passage_ligne . "Nom : " . $_POST['firstname'] . $passage_ligne;
    $message.= $passage_ligne . "Prénom : " . $_POST['lastname'] . $passage_ligne;
    $message.= $passage_ligne . "Email : " . $_POST['email'] . $passage_ligne;
    $message.= $passage_ligne . "Téléphone : " . $_POST['phone'] . $passage_ligne;
    $message.= $passage_ligne . "Entreprise : " . $_POST['entreprise'] . $passage_ligne;
    $message.= $passage_ligne . "Demande : " . $passage_ligne . $message_txt . $passage_ligne;

    $message.= $passage_ligne . "--" . $boundary . $passage_ligne;

    /* Ajout du message au format HTML */
    $message.= "Content-Type: text/html; charset=\"ISO-8859-1\"" . $passage_ligne;
    $message.= "Content-Transfer-Encoding: 8bit" . $passage_ligne;
    $message.= $passage_ligne . "Nom : " . $_POST['firstname'] . $passage_ligne;
    $message.= $passage_ligne . "Prénom : " . $_POST['lastname'] . $passage_ligne;
    $message.= $passage_ligne . "Email : " . $_POST['email'] . $passage_ligne;
    $message.= $passage_ligne . "Téléphone : " . $_POST['phone'] . $passage_ligne;
    $message.= $passage_ligne . "Entreprise : " . $_POST['entreprise'] . $passage_ligne;
    $message.= $passage_ligne . "Demande : " . $passage_ligne . $message_html . $passage_ligne;

    $message.= $passage_ligne . "--" . $boundary . "--" . $passage_ligne;
    $message.= $passage_ligne . "--" . $boundary . "--" . $passage_ligne;

    mail($TO, $subject, $message, $header);

    /* Header("Location: /validation.php"); */


}
?>