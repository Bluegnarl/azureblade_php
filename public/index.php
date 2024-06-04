<?php

require_once __DIR__ . "/controllers/home_controller.php";
require_once __DIR__ . "/controllers/game_controller.php";
require_once __DIR__ . "/assets/actions/guest.php";
require_once __DIR__ . "/controllers/error_controller.php";

$page = $_GET['page'] ?? null;

switch ($page) {
    case 'home':
        home();
    break;
    case 'game':
        game();
    break;
    case 'guest':
        guest();
        break;
    case null:
            home();
        break;
    default:
            error();
        break;
}