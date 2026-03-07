<?php

require_once "../interfaces/playable.php";

class MusicPlayer implements Playable {

    public function play($track): void {
        echo "Playing: " . $track;
    }

    public function pause(): void {
        echo "Music paused";
    }
}

?>