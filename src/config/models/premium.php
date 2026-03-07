<?php

require_once "account.php";

class Premium extends Account {
    
    private $unlimited = true;

    public function __construct($username) {
        parent::__construct($username, "Premium");
    }

    public function hasUnlimited(): bool {
        return $this->unlimited;
    }
}

?>