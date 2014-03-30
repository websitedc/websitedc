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
            echo "<li> <a href='" . $page . "'>" . translate($name) . "</a></li>";
        }
        ?>
        <li><a href="legal.php"><?php echo translate('LEGAL');?></a></li>
    </ul>
    <span id="footer_copyright">
        © Website Design & Conception 2014
    </span>
</div>