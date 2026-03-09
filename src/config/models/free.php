<?php

require_once 'account.php';

class Free extends Account {

    private $ads = true;

    public function __construct($username) {
        parent::__construct($username, 'Free');
    }

    public function hasAds(): bool {
        return $this->ads;
    }
}

?>