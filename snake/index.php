<?php

$ua = strtolower($_SERVER['HTTP_USER_AGENT']);
if(stripos($ua,'android') !== false) { // && stripos($ua,'mobile') !== false) {
    header("Location: snake-mobile.html");
}else{
    header("Location: snake.html");
}