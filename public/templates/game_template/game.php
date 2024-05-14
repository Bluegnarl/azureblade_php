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
    <div class="modals-container">
        <div class="modal-background" onclick="closeOverlay()"></div>

        <?php
            require_once __DIR__ . '/../../assets/partials/modal_infos.php';
            require_once __DIR__ . '/../../assets/partials/modal_help.php';
            require_once __DIR__ . '/../../assets/partials/modal_endings.php';
        ?>
    </div>
    <div class="button-container button-container-inversed main-menu-button">
        <a href="/" class="buttons buttons-inversed buttons-clickable button-clickable-padding">
            <div class="icon" style="background-image: url(/assets/img/home.svg);"></div>
            <p class="label">Main Menu</p>
        </a>
    </div>
    <div class="buttons button-container button-padding saving-button">
        <div class="icon" style="background-image: url(/assets/img/saving.svg);"></div>
        <p class="label" style="color: var(--on-surface-1);">Saving...</p>
    </div>
    <main>
        <div class="character-image character-image-desktop">
            <img src="/assets/img/chara1.png" alt="">
        </div>
        <div class="dialogue-container">
            <div class="dialogue-content">
                <div class="dialogue">
                    <div class="message message-left">
                        <div class="character-name">
                            <p class="label" style="color: var(--on-surface-1);">Gareth</p>
                        </div>
                        <div class="character-text body-text">Do you believe in the possibility of redemption for those who have caused so much suffering?</div>
                    </div>
                    <div class="message message-right">
                        <div class="character-name">
                            <p class="label" style="color: var(--on-surface-1);">Kairus</p>
                        </div>
                        <div class="character-text body-text">Do you believe in the possibility of redemption for those who have caused so much suffering?</div>
                    </div>
                    <div class="message message-left">
                        <div class="character-name">
                            <p class="label" style="color: var(--on-surface-1);">Gareth</p>
                        </div>
                        <div class="character-text body-text">Do you believe in the possibility of redemption for those who have caused so much suffering?</div>
                    </div>
                    <div class="message message-right">
                        <div class="character-name">
                            <p class="label" style="color: var(--on-surface-1);">Kairus</p>
                        </div>
                        <div class="character-text body-text">Do you believe in the possibility of redemption for those who have caused so much suffering?</div>
                    </div>
                    <div class="message message-left">
                        <div class="character-name">
                            <p class="label" style="color: var(--on-surface-1);">Gareth</p>
                        </div>
                        <div class="character-text body-text">Do you believe in the possibility of redemption for those who have caused so much suffering?</div>
                    </div>
                    <div class="message message-right">
                        <div class="character-name">
                            <p class="label" style="color: var(--on-surface-1);">Last Gaming</p>
                        </div>
                        <div class="character-text body-text">Do you believe in the possibility of redemption for those who have caused so much suffering?</div>
                    </div>
                </div>
            </div>
            <div class="controls">
                <div class="secondary-controls">
                    <div onclick="modal('infos')" class="secondary-control">
                        <div style="background: url(/assets/img/infos.svg) no-repeat center/cover;"></div>
                    </div>
                    <div onclick="modal('endings')" class="secondary-control">
                        <div style="background: url(/assets/img/endings.svg) no-repeat center/cover;"></div>
                    </div>
                    <div onclick="modal('help')" class="secondary-control">
                        <div style="background: url(/assets/img/help.svg) no-repeat center/cover;"></div>
                    </div>
                </div>
                <div class="primary-control">
                    <div class="icon" style="background-image: url(/assets/img/next.svg);"></div>
                    <p class="label">Next</p>
                </div>
            </div>
        </div>

        <div class="character-image character-image-desktop">
            <img src="/assets/img/chara2.png" alt="">
        </div>
    </main>
    <div class="character-images-mobile">
        <div class="character-image">
            <img src="/assets/img/chara1.png">
        </div>
        <div class="character-image">
            <img src="/assets/img/chara2.png">
        </div>
    </div>
</body>
<script src="/assets/js/index.js"></script>
<script src="/templates/game_template/game.js"></script>

</html>