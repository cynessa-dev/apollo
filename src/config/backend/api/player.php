<?php
session_start();

require_once '/var/www/html/config/backend/musicPlayer.php';

$player = new MusicPlayer();

$action = $_GET['action'] ?? null;
$track = $_GET['track'] ?? null;
$account_type = $_SESSION['account_type'] ?? 'free';

if ($action === 'play') {
    echo json_encode($player->play($track, $account_type));
}

if ($action === 'pause') {
    echo json_encode($player->pause());
}

?>