<?php

require_once '/var/www/html/config/backend/musicPlayer.php';

$player = new MusicPlayer();

$action = $_GET['action'] ?? null;
$track = $_GET['track'] ?? null;

if ($action === 'play') {
    echo json_encode($player->play($track));
}

if ($action === 'pause') {
    echo json_encode($player->pause());
}

?>