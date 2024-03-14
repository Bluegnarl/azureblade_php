<?php 

require_once '../src/controllers/home.php';

$page = $_GET['page'] ?? null;

switch ($page) {
    case 'home':
            home();
        break;
    default:
            home();
        break;
}