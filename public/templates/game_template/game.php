<?php

$location = 'Dark Wood Forest';

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/styles/style.css">
    <link rel="stylesheet" href="/templates/game_template/game.css">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicon.png">
    
    <title>Azureblade - <?= $location ?></title>
</head>
<body>
    <div class="parallax_container">
        <div class="parallax" style="background: url(../../assets/img/background-2.png) no-repeat center/cover;" draggable="false"></div>
    </div>
    <a href="/" class="buttons buttons-inversed buttons-clickable buttons-clickable-inversed main-menu-button">
        <div style="background-image: url(/assets/img/home.svg);"></div>
        <p class="label">Main Menu</p>
    </a>
    <div class="buttons saving-button">
        <div style="background-image: url(/assets/img/saving.svg); color: red;"></div>
        <p class="label" style="color: var(--on-surface-1);">Saving...</p>
    </div>
    <div class="button-test">
        <div>
            <p class="label">Bluegnarl</p>
        </div>
    </div>
</body>
<script src="/assets/js/index.js"></script>
<script src="/templates/game_template/game.js"></script>
</html>