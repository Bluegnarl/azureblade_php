<?php

require_once __DIR__ . "/controllers/home_controller.php";
require_once __DIR__ . "/controllers/error_controller.php";

$page = $_GET['page'] ?? null;

switch ($page) {
    case 'home':
        home();
    break;
    case null:
            home();
        break;
    default:
            error();
        break;
}