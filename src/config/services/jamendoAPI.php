<?php

class JamendoAPI {

    private $client_id;

    public function __construct() {
        $this->client_id = $_ENV['JAMENDO_CLIENT_ID'];
    }

    public function searchTracks($query) {
        $url = 'https://api.jamendo.com/v3.0/tracks/?client_id='
                . $this->client_id .
                '&format=json&limit=10&namesearch=' .
                urlencode($query);
        
        $response = file_get_contents($url);

        return json_decode($response, true);
    }
}

?>