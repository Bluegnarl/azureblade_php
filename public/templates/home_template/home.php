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
            require_once __DIR__ . '/../../assets/partials/modal_infos.php';
            require_once __DIR__ . '/../../assets/partials/modal_help.php';
            require_once __DIR__ . '/../../assets/partials/modal_endings.php';
            require_once __DIR__ . '/../../assets/partials/modal_newgame.php';
        ?>
    </div>
    <nav>
        <a class="main-menu" href="/?page=game">Continue</a>
        <div></div>
        <a class="main-menu" onclick="modal('newgame')">New Game</a>
        <div></div>
        <a class="main-menu" onclick="modal('endings')">Endings</a>
        <div></div>
        <a class="main-menu" onclick="modal('help')">Help</a>
    </nav>
    <div class="buttons-container">
        <div class="buttons button-padding">
            <div class="icon" style="background-image: url(/assets/img/account.svg);"></div>
            <p class="label">Bluegnarl</p>
        </div>
        <div class="button-container main-menu-button">
            <div class="buttons buttons-clickable-exceptions button-clickable-padding">
                <div class="icon" style="background-image: url(/assets/img/account-crossed.svg);"></div>
                <p class="label">Disconnect</p>
            </div>
        </div>
    </div>
</body>
<script src="/assets/js/index.js"></script>
<script src="/templates/home_template/home.js"></script>

</html>