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
        <div class="modal modal-infos">
            <div class="label-container label-title-container">
                <div class="icon" style="background-image: url(/assets/img/infos.svg);"></div>
                <p class="label-higher" style="color: var(--on-surface-1);">Informations</p>
            </div>
            <div class="card">
                <div class="label-container">
                    <div class="icon" style="background-image: url(/assets/img/location.svg);"></div>
                    <p class="label" style="color: var(--on-surface-1);"><?= $location ?></p>
                </div>
                <div class="card-image"></div>
                <div class="text-container">
                    <p class="body-text scrollbar">
                        With the assistance of Aldric Ironforge, the master blacksmith renowned for his unparalleled craftsmanship, and Sylvia Suncrest, the revered herbalist and healer of the region, Kairus embarked on a journey to uncover the truth behind the village's devastation. He is facing Gareth to negociate with him.
                    </p>
                </div>
            </div>
        </div>
        <div class="modal modal-help">
            <div class="label-container label-title-container">
                <div class="icon" style="background-image: url(/assets/img/help.svg);"></div>
                <p class="label-higher" style="color: var(--on-surface-1);">Help</p>
            </div>
            <div class="cards">
                <div class="card">
                    <div class="label-container" onclick="helpCase(1)">
                        <div class="icon" style="background-image: url(/assets/img/location.svg);"></div>
                        <p class="label" style="color: var(--on-surface-1);">Dilemmas</p>
                        <div class="icon arrow-icon" style="background-image: url(/assets/img/arrow.svg);"></div>
                    </div>
                    <div class="help-case help-case-1">
                        <div class="card-image"></div>
                        <div class="text-container">
                            <p class="body-text scrollbar">
                                You will face time limited dilemmas to convince your interlocutor. If you fail to respond or make a wrong choice, the Anger Meter will increase and it will potentially lead you to death once it hits his maximum.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="label-container" onclick="helpCase(2)">
                        <div class="icon" style="background-image: url(/assets/img/location.svg);"></div>
                        <p class="label" style="color: var(--on-surface-1);">Choices</p>
                        <div class="icon arrow-icon" style="background-image: url(/assets/img/arrow.svg);"></div>
                    </div>
                    <div class="help-case help-case-2">
                        <div class="card-image"></div>
                        <div class="text-container">
                            <p class="body-text scrollbar">
                                During dialogues, you will have to make choices which are decisive to the story. Take care, bad choices can lead you to death.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="label-container" onclick="helpCase(3)">
                        <div class="icon" style="background-image: url(/assets/img/location.svg);"></div>
                        <p class="label" style="color: var(--on-surface-1);">QTE</p>
                        <div class="icon arrow-icon" style="background-image: url(/assets/img/arrow.svg);"></div>
                    </div>
                    <div class="help-case help-case-3">
                        <div class="card-image"></div>
                        <div class="text-container">
                            <p class="body-text scrollbar" style="overflow-y: auto;">
                                At some point in the game, you will face Quick Time Event (QTE) which means that you will have to press a button in a short time, otherwise, you will be disadvantaged and it can lead you to death.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-left modal-endings">
            <div class="labels-container">
                <div class="label-container">
                    <div class="icon" style="background-image: url(/assets/img/endings.svg);"></div>
                    <p class="label-higher" style="color: var(--on-surface-1);">Endings</p>
                </div>
                <div class="label-container">
                    <p class="label-higher" style="color: var(--on-surface-1);">1/10</p>
                </div>
            </div>

            <div class="endings scrollbar-width-none">
                <div class="ending">
                    <div class="ending-title">
                        <p class="label" style="color: var(--on-surface-1)">The Butcher</p>
                    </div>
                    <div class="ending-text">
                        <p class="body-text">You are dead, killed by the butcher.</p>
                    </div>
                </div>
                <div class="ending">
                    <div class="ending-title">
                        <p class="label" style="color: var(--on-surface-1)">???</p>
                    </div>
                    <div class="ending-text">
                        <p class="body-text">You lost ???.</p>
                    </div>
                </div>
                <div class="ending">
                    <div class="ending-title">
                        <p class="label" style="color: var(--on-surface-1)">???</p>
                    </div>
                    <div class="ending-text">
                        <p class="body-text">You are lost.</p>
                    </div>
                </div>
                <div class="ending">
                    <div class="ending-title">
                        <p class="label" style="color: var(--on-surface-1)">???</p>
                    </div>
                    <div class="ending-text">
                        <p class="body-text">You are dead, killed by ???.</p>
                    </div>
                </div>
                <div class="ending">
                    <div class="ending-title">
                        <p class="label" style="color: var(--on-surface-1)">???</p>
                    </div>
                    <div class="ending-text">
                        <p class="body-text">You are dead, killed by ???.</p>
                    </div>
                </div>
                <div class="ending">
                    <div class="ending-title">
                        <p class="label" style="color: var(--on-surface-1)">???</p>
                    </div>
                    <div class="ending-text">
                        <p class="body-text">You are dead, killed by ???.</p>
                    </div>
                </div>
                <div class="ending">
                    <div class="ending-title">
                        <p class="label" style="color: var(--on-surface-1)">???</p>
                    </div>
                    <div class="ending-text">
                        <p class="body-text">You are dead, killed by ???.</p>
                    </div>
                </div>
                <div class="ending">
                    <div class="ending-title">
                        <p class="label" style="color: var(--on-surface-1)">???</p>
                    </div>
                    <div class="ending-text">
                        <p class="body-text">You are dead, killed by ???.</p>
                    </div>
                </div>
                <div class="ending">
                    <div class="ending-title">
                        <p class="label" style="color: var(--on-surface-1)">???</p>
                    </div>
                    <div class="ending-text">
                        <p class="body-text">You are dead, killed by ???.</p>
                    </div>
                </div>
                <div class="ending">
                    <div class="ending-title">
                        <p class="label" style="color: var(--on-surface-1)">???</p>
                    </div>
                    <div class="ending-text">
                        <p class="body-text">You are lost ???.</p>
                    </div>
                </div>
            </div>
        </div>
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