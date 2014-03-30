<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="ISO-8859-15">
        <meta name="keywords" content="website design, conception, creation de site internet" lang="fr">
        <title><?php translate('HOMEPAGE_TITLE'); ?></title>
        <link href="view/css/common.css" rel="stylesheet" type="text/css" media="all">
        <link href="view/css/homepage.css" rel="stylesheet" type="text/css" media="all">
        <style type="text/css"></style>
    </head>
    <body>
        <?php
        include_once 'view/header.php';
        include_once 'view/navigation.php';
        ?>
        <div align=center>
            <form method=POST action="/controler/contactControler.php" >
                <input type=hidden name=subject value="Demande de contact">
                <table>
                    <tr><td>Votre nom:</td>
                        <td><input type=text name="name" size=30></td></tr>
                    <tr><td>Votre prénom:</td>
                        <td><input type=text name="prenom" size=30></td></tr>
                    <tr><td>Votre email:</td>
                        <td><input type=mail name="email" size=30></td></tr>
                    <tr><td>Votre telephone:</td>
                        <td><input type=number name="tel" size=15></td></tr>
                    <tr><td>Votre entreprise:</td>
                        <td><input type=text name="entreprise" size=30></td></tr>
                    <tr><td colspan=2>Votre demande:<br>
                            <textarea COLS=50 ROWS=6 name=comments></textarea>
                        </td></tr>
                </table>
                <br> <input type=submit value=Envoyer> -
                <input type=reset value=Annuler>
            </form>
        </div> 
        <?php
        include_once 'view/footer.php';
        ?>
    </body>
</html>