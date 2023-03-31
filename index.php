<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

define("TG_TOKEN", "6280488506:AAFtVTmxR-S021zN2gopg1iHyxHK290TU9g");
define("TG_USER_ID", "732610083");

$textMessage = "Привет";
$textMessage = urlencode($textMessage);

$urlQuery = "https://api.telegram.org/bot" . TG_TOKEN . "/sendMessage?chat_id=" . TG_USER_ID . "&text=" . $textMessage;

$result = file_get_contents($urlQuery);
