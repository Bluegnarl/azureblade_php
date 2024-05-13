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
    <div class="parallax_container">
        <div class="parallax" style="background: url(../../assets/img/background.png) no-repeat center/cover;" draggable="false"></div>
    </div>
    <div class="title-container">
        <img src="/assets/img/logo-main-menu.svg">
        <h1>AZUREBLADE</h1>
    </div>
    <div class="modals-container">
        <div class="modal-background" onclick="closeOverlay()"></div>
        <div class="modal modal-help">
            <div class="labels-container">
                <div class="label-container">
                    <div class="icon" style="background-image: url(/assets/img/help.svg);"></div>
                    <p class="label-higher" style="color: var(--on-surface-1);">Help</p>
                </div>
                <div class="icon-container" style="cursor: pointer;" onclick="closeOverlay()">
                    <div class="icon" style="background-image: url(/assets/img/close.svg);"></div>
                </div>
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
            <div class="labels-container" style="justify-content: space-between; width: 100%;">
                <div class="labels-container">
                    <div class="label-container">
                            <div class="icon" style="background-image: url(/assets/img/endings.svg);"></div>
                            <p class="label-higher" style="color: var(--on-surface-1);">Endings</p>
                    </div>
                    <div class="label-container endings-counter">
                        <p class="label-higher" style="color: var(--on-surface-1);">1/10</p>
                    </div>
                </div>
                <div class="icon-container" style="cursor: pointer;" onclick="closeOverlay()">
                    <div class="icon" style="background-image: url(/assets/img/close.svg);"></div>
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
    <nav>
        <a class="main-menu" href="/?page=game">Continue</a>
        <div></div>
        <a class="main-menu" href="/?page=game">New Game</a>
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
            <div class="buttons buttons-clickable button-clickable-padding">
                <div class="icon" style="background-image: url(/assets/img/account-crossed.svg);"></div>
                <p class="label">Disconnect</p>
            </div>
        </div>
    </div>
</body>
<script src="/assets/js/index.js"></script>
<script src="/templates/home_template/home.js"></script>

</html>