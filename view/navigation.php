<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <?php
    $pages = $translator->get_vtree();
    foreach ($pages->vtree["navigation"] as $name => $page) {
        echo "<button name='" . $name . "' onclick='" . $page . "'>" . $name . "</button>";
    }
    var_dump($pages->vtree);
    ?>
    <button onclick="" 
</html>
