<?php
    /*
        Nom : styles.ctp
        Description : Toutes les ressources CSS ajoutées à ce fichier seront implémentées en dernières (override des autres ressources) et seront propres au thème.
        Utilisation : <?= $this->Html->css('nom_du_fichier.css') ?>
    */
?>

<?php if(isset($theme_config['theme-scrollbar-disable']) && $theme_config['theme-scrollbar-disable']) { ?>
<style>
<?php /* Firefox */ ?>
:root { scrollbar-width: none; }
<?php /* Chromium based browsers (Chrome / Brave / Vivaldi) */ ?>
::-webkit-scrollbar { display: none; }
</style>
<?php } else { ?>
<style>
<?php /* Firefox */ ?>
:root { scrollbar-color: #2b46ed #333333; }
<?php /* Chromium based browsers (Chrome / Brave / Vivaldi) */ ?>
::-webkit-scrollbar {
  width: 1em;
}
::-webkit-scrollbar-thumb {
    background-color: #2b46ed;
}
::-webkit-scrollbar-track { 
    background-color: #333333;
}
</style>
<?php } ?>


<?= $this->Html->css('styles.css') // Stylesheet principale gérée en SCSS ?>