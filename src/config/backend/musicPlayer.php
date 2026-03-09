<?php

require_once '/var/www/html/config/interfaces/playable.php';

class MusicPlayer implements Playable {

    public function play($track): array {
        return [
            "status" => "playing",
            "track" => $track
        ];
    }

    public function pause(): array {
        return [
            "status"=> "paused"
        ];
    }
}

?>