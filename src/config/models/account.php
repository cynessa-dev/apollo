<?php

abstract class Account {

    protected $username;
    protected $plan;

    public function __construct($username, $plan) {
        $this->username = $username;
        $this->plan = $plan;
    }

    public function getUsername(): string {
        return $this->username;
    }

    public function getPlan(): string {
        return $this->plan;
    }
}

?>