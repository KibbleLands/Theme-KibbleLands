<?php
    /*
        Nom : scripts.ctp
        Description : Toutes les ressources JavaScript ajoutées à ce fichier seront implémentées en dernières (override des autres ressources) et seront propres au thème.
        Utilisation : <?= $this->Html->script('nom_du_fichier.js') ?>
    */
?>

<?= $this->Html->script('main.js') ?>
<?= $this->Html->script('clipboard.min.js') ?>
<?php if (isset($theme_config['theme-particles']) && $theme_config['theme-particles'] != "disabled") { ?>
<?= $this->Html->script('particles.min.js') ?>
<?php } ?>
<script>
    $( document ).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
        <?php if (isset($theme_config['theme-particles']) && $theme_config['theme-particles'] != "disabled") { ?>
            particlesJS.load('page-root', 'theme/<?= $this->theme; ?>/json/<?= $theme_config['theme-particles']; ?>.json', function() {
                console.log('particles.js config loaded :3');
            });
        <?php } ?>
    });
</script>

