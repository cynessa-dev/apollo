<?php

require_once '/var/www/html/config/interfaces/playable.php';

class MusicPlayer implements Playable {

    public function play($track, $account_type): array {
        return [
            "status" => "playing",
            "track" => $track,
            "account_type" => $account_type
        ];
    }

    public function pause(): array {
        return [
            "status"=> "paused"
        ];
    }
}

?>