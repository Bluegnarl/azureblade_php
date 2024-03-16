<?php

$prod = false;
$dir = $prod ? '/var/task/user/api' : '.';

require_once "$dir/src/controllers/home_controller.php";
require_once "$dir/src/controllers/error_controller.php";

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