<?php

function guest() {
    if ($_GET['guest'] == "new") {
        setcookie("way", 0, time() + 360000, "/");
        setcookie("scene", 0, time() + 360000, "/");
        if(!isset($_COOKIE['endings'])) {
            setcookie("endings", json_encode([]), time() + 360000, "/");
        }
    }

    header('Location: /?page=game');
}