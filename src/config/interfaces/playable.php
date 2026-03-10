<?php

interface Playable {
    public function play($track, $account_type);
    public function pause();
}

?>