<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<div id="footer_container_main">
    <ul class="ul_footer">
        <?php
        $pages = $translator->get_vtree();
        foreach ($pages->vtree["navigation"] as $name => $page) {
            echo "<li> <a href='" . $page . "'>" . $name . "</a></li>";
        }
        ?>
    </ul>
    <span id="footer_copyright">
        © Website Design & Conception 2014
    </span>
    <span id="footer_copyright"><a href="legal.php"><?php translate('LEGAL');?></a></span>
</div>