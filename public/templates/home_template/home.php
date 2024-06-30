<?php

// require_once __DIR__ . '/../../assets/datas/database.php';

// $ref_table = 'users';
// $fetchdata = $database->getReference($ref_table)->getSnapshot();

$username = "Bluegnarl";
$loggedin = false;

require_once __DIR__ . '/../../assets/actions/cookies.php';
require_once __DIR__ . '/../../assets/actions/navigation.php';

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/styles/style.css">
    <link rel="stylesheet" href="/templates/home_template/home.css">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicon.png">

    <title>Azureblade</title>
</head>

<body>
    <div class="parallax-container">
        <div class="parallax" style="background: url(../../assets/img/background.png) no-repeat center/cover;" draggable="false"></div>
    </div>
    <div class="title-container">
        <img src="/assets/img/logo-main-menu.svg">
        <h1>AZUREBLADE</h1>
    </div>
    <div class="modals-container">
        <div class="modal-background" onclick="closeOverlay()"></div>

        <?php
            require_once __DIR__ . '/../../assets/partials/modal_help.php';
            require_once __DIR__ . '/../../assets/partials/modal_endings.php';
            require_once __DIR__ . '/../../assets/partials/modal_newgame.php';
            require_once __DIR__ . '/../../assets/partials/modal_login.php';
            require_once __DIR__ . '/../../assets/partials/modal_signup.php';
        ?>
    </div>
    <nav>
        <?php if($i || $w) : ?>
        <a class="main-menu" href="/?page=game">Continuer</a>
        <div></div>
        <a class="main-menu" onclick="modal('newgame')">Recommencer</a>
        <?php endif ?>
        <?php if(!$i && !$w) : ?>
            <a class="main-menu" onclick="modal('newgame')">Commencer</a>
        <?php endif ?>
        <div></div>
        <a class="main-menu" onclick="modal('endings')">Épilogues</a>
        <div></div>
        <a class="main-menu" onclick="modal('help')">Aide</a>
    </nav>
    <?php if ($loggedin) : ?>
    <div class="buttons-container">
        <div class="buttons button-padding">
            <div class="icon" style="background-image: url(/assets/img/account.svg);"></div>
            <p class="label"><?= $username ?></p>
        </div>
        <div class="button-container main-menu-button">
            <div class="buttons buttons-clickable-exceptions button-clickable-padding">
                <div class="icon" style="background-image: url(/assets/img/account-crossed.svg);"></div>
                <p class="label">Se déconnecter</p>
            </div>
        </div>
    </div>
    <?php endif;
    if (!$loggedin) : ?>
    <div class="buttons-container">
        <div class="button-container main-menu-button">
            <div class="buttons buttons-clickable-exceptions button-clickable-padding" onclick="modal('login')">
                <div class="icon" style="background-image: url(/assets/img/login.svg);"></div>
                <p class="label">Se connecter</p>
            </div>
        </div>
        <div class="button-container main-menu-button">
            <div class="buttons buttons-clickable-exceptions button-clickable-padding" onclick="modal('signup')">
                <div class="icon" style="background-image: url(/assets/img/signup.svg);"></div>
                <p class="label">S'inscrire</p>
            </div>
        </div>
    </div>
    <?php endif ?>
</body>
<script src="/assets/js/index.js"></script>
<script src="/templates/home_template/home.js"></script>

</html>