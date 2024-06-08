<?php

$destination = $_GET['destination'] ?? null;

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

$ending_get = $_GET['ending'] ?? null;

if ($ending_get) {
    if(!in_array($ending_get, $cookie_endings)) {
        $cookie_endings = [...$cookie_endings, $ending_get];
        setcookie("endings", json_encode($cookie_endings), time() + 360000);
    }

    header('Location: /');
}