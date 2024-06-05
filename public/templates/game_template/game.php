<?php

$data = json_decode(file_get_contents(__DIR__ . '/../../assets/datas/data.json'), true);
$story = json_decode(file_get_contents(__DIR__ . '/../../assets/datas/story.json'), true);

$w = $_COOKIE['way'];
$i = $_COOKIE['scene'];

$choice = $_GET['choice'] ?? null;

if ($choice == 1) {
    setcookie("way", $story[$w][$i]['content'][0]['destination'], time() + 360000);
    setcookie("scene", 0, time() + 360000);
    header('Location: /?page=game');
} elseif ($choice == 2) {
    setcookie("way", $story[$w][$i]['content'][1]['destination'], time() + 360000);
    setcookie("scene", 0, time() + 360000);
    header('Location: /?page=game');
}

$next = $_GET['next'] ?? null;

if ($next) {
    if ($_COOKIE['scene'] < count($story[$w])) $_COOKIE['scene'] += 1;
    setcookie('scene', $_COOKIE['scene'], time() + 360000);
    header('Location: /?page=game');
} 

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/styles/style.css">
    <link rel="stylesheet" href="/templates/game_template/game.css">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicon.png">

    <title>Azureblade - <?= $story[$w][$i]['location'] ?></title>
</head>

<body>
    <div class="parallax-container">
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
        <a href="/" class="buttons buttons-inversed buttons-clickable-exceptions button-clickable-padding">
            <div class="icon" style="background-image: url(/assets/img/home.svg);"></div>
            <p class="label">Main Menu</p>
        </a>
    </div>
    <div class="buttons button-container button-padding saving-button">
        <div class="icon" style="background-image: url(/assets/img/saving.svg);"></div>
        <p class="label" style="color: var(--on-surface-1);">Saving...</p>
    </div>
    <main>
        <?php if ($story[$w][$i]['type'] == "dialogue") { ?>
        <div class="character-image character-image-desktop">
            <img class="character-left" src="/assets/img/<?= $story[$w][$i]['left'] ?>.png" alt="">
        </div>
        <div class="dialogue-container">
            <div class="dialogue-content">
                <div class="dialogue">
                    <?php foreach ($story[$w][$i]['content'] as $message) : ?>
                        <div class="message <?= ($message['side'] == "right") ? "message-right" : "message-left" ?>" style="display: none; opacity: 0;">
                            <div class="character-name">
                                <p class="label" style="color: var(--on-surface-1);"><?= $message['character'] ?></p>
                            </div>
                            <div class="character-text body-text"><?= $message['text'] ?></div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
            <div class="controls">
                <div class="secondary-controls">
                    <div onclick="modal('infos')" class="secondary-control buttons-clickable buttons-clickable-w-border">
                        <div class="icon" style="background: url(/assets/img/infos.svg) no-repeat center/cover;"></div>
                    </div>
                    <div onclick="modal('endings')" class="secondary-control buttons-clickable buttons-clickable-w-border">
                        <div class="icon" style="background: url(/assets/img/endings.svg) no-repeat center/cover;"></div>
                    </div>
                    <div onclick="modal('help')" class="secondary-control buttons-clickable buttons-clickable-w-border">
                        <div class="icon" style="background: url(/assets/img/help.svg) no-repeat center/cover;"></div>
                    </div>
                </div>
                <div class="primary-control buttons-clickable buttons-clickable-w-border" onclick="next()">
                    <div class="icon" style="background-image: url(/assets/img/next.svg);"></div>
                    <p class="label">Next</p>
                </div>
            </div>
        </div>
            <div>oui</div>
        <div class="character-image character-image-desktop">
            <img class="character-right" src="/assets/img/<?= $story[$w][$i]['right'] ?>.png" alt="">
        </div>
    </main>
    <div class="character-images-mobile">
        <div class="character-image">
            <img class="character-left" src="/assets/img/<?= $story[$w][$i]['left'] ?>.png">
        </div>
        <div class="character-image">
            <img class="character-right" src="/assets/img/<?= $story[$w][$i]['right'] ?>.png">
        </div>
    </div>
    <?php } elseif ($story[$w][$i]['type'] == "choice") { ?>
        <div style="width: 100%; height: 100%; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 48px">
            <div class="label-container label-container-title">
                <p class="label-higher"><?= $story[$w][$i]['title'] ?></p>
            </div>
            <div class="choices">
            <?php foreach ($story[$w][$i]['content'] as $choice) : ?>
            <div class="choice">
                <a href="/?page=game&choice=1" class="label-container buttons-clickable buttons-clickable-w-border">
                    <p class="label"><?= $choice['title'] ?></p>
                </a>
                <div class="text body-text"><?= $choice['text'] ?></div>
            </div>
            <?php endforeach ?>
        </div>  
        </div>
    <?php } ?>
    <input type="hidden" data-dialogue-length="<?= count($story[$w][$i]['content']); ?>">
</body>
<script src="/assets/js/index.js"></script>
<script src="/templates/game_template/game.js"></script>

</html>