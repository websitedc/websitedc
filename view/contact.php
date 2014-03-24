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
    ?>
Bonjour, <?php echo htmlspecialchars($_POST['nom']); ?>.
Tu as <?php echo (int) $_POST['age']; ?> ans.
</body>
</html>