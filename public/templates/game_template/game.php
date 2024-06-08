<?php

$story = json_decode(file_get_contents(__DIR__ . '/../../assets/datas/story.json'), true);

$w = $_COOKIE['way'];
$i = $_COOKIE['scene'];
if (isset($_COOKIE['endings'])) {
    $cookie_endings = json_decode($_COOKIE['endings']) ?? null;
}

$destination = $_GET['destination'] ?? null;
$anger = $_GET['anger'] ?? null;

if (isset($destination)) {
    setcookie("way", $destination, time() + 360000);
    setcookie("scene", 0, time() + 360000);
    header('Location: /?page=game');
}

$next = $_GET['next'] ?? null;

if ($next) {
    if ($_COOKIE['scene'] < count($story[$w]) - 1) $_COOKIE['scene'] += 1;
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
        <div class="parallax" style="background: url(../../assets/img/<?= $story[$w][$i]['background'] ?>) no-repeat center/cover;" draggable="false"></div>
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
            <p class="label">Accueil</p>
        </a>
    </div>
    <main>
        <?php if ($story[$w][$i]['type'] == "ending") : ?>
                <div style="display: flex; flex-direction: column; align-items: center; gap: 16px; padding: 24px">
                    <div class="character-text body-text" style="width: 100%; background: var(--primary-transparent); border-radius: 8px">
                        <div class="icon" style="background-image: url(/assets/img/story.svg);"></div>
                        <?= $story[$w][$i]['text'] ?>
                    </div>
                    <a class="ending-claim-button label buttons-clickable buttons-clickable-w-border" href="/?ending=<?= $story[$w][$i]['ending'] ?>">Fin numéro <?= $story[$w][$i]['ending'] ?></a>
                </div>
        <?php endif ?>
        <?php if ($story[$w][$i]['type'] == "dialogue" || $story[$w][$i]['type'] == "dilemmas" || $story[$w][$i]['type'] == "qte") { ?>
            <div class="character-image character-image-desktop">
                <img class="character-left" src="/assets/img/<?= $story[$w][$i]['left'] ?>.png" alt="">
            </div>

            <?php if ($story[$w][$i]['type'] != "qte") {
                require_once __DIR__ . '/../../assets/partials/dialogue.php';
            } else {
                require_once __DIR__ . '/../../assets/partials/qte.php';
            } ?>

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
                    <a href="/?page=game&destination=<?= $choice['destination'] ?>" class="label-container buttons-clickable buttons-clickable-w-border">
                        <p class="label"><?= $choice['title'] ?></p>
                    </a>
                    <div class="text body-text"><?= $choice['text'] ?></div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
<?php } ?>
<input type="hidden" data-dialogue-length="<?php if($story[$w][$i]['type'] != "qte" && $story[$w][$i]['type'] != "ending") {echo count($story[$w][$i]['content']);}; ?>">
</body>
<script src="/assets/js/index.js"></script>
<script src="/templates/game_template/game.js"></script>

</html>