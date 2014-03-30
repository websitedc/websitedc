<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <ul id="navigation_ul"> 
        <?php
        $pages = $translator->get_vtree();
        foreach ($pages->vtree["navigation"] as $name => $page) {            
            echo "<li><a href='" . $page . "'>" . translate($name) . "</a></li>";
        }
        ?>
    </ul>
</html>
