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
        <form action="action.php" method="post">
            <p>Votre nom : <input type="text" name="nom"/></p>
            <p>Votre prénom : <input type="text" name="prenom"/></p>
            <p>Votre email : <input type="email" name="email"/></p>
            <p>Votre Telephone = <input type="tel" name="tel"/></p>
            <p>Votre entreprise : <input type="text" name="entreprise"/></p>
            <p><input type="submit" value="OK"></p>
        </form>
    </body>
</html>