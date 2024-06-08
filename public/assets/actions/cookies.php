<?php

if (isset($_COOKIE['way']) && isset($_COOKIE['scene'])) {
    $w = $_COOKIE['way'];
    $i = $_COOKIE['scene'];
}

if (isset($_COOKIE['endings'])) {
    $cookie_endings = json_decode($_COOKIE['endings']) ?? null;
}