<?php
    
?>
<div id="header" class="container">
    <a href="index.php" onclick="">
        <img id="logo" src="view/img/logo.png" height="105px" width="365" alt="WebsiteD&C logo" >
    </a>
    <div id="language" class="language">
        <ul>
            <?php
            foreach ($translator->get_possible_lang() as $lang => $value) {
                echo "<li>
                <a href='?lang=$lang'>$lang</a>
                </li>";
            }
            
            ?>
        </ul>
    </div>
</div>
<div><?php
        translate("PAGE_CONTACT");
?></div>

