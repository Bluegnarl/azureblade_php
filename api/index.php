<?php 

require_once '../src/controllers/home_controller.php';

$page = $_GET['page'] ?? null;

switch ($page) {
    case 'home':
            home();
        break;
    default:
            home();
        break;
}