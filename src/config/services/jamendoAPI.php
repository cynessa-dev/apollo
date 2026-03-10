<?php

class JamendoAPI {

    private $client_id;
    private $limit;

    public function __construct() {
        $this->client_id = getenv('JAMENDO_CLIENT_ID');
        $this->limit = 10;
    }

    public function searchTracks($query) {
        $url = 'https://api.jamendo.com/v3.0/tracks/?client_id='
                . $this->client_id .
                '&format=json&limit=' 
                . $this->limit . 
                '&namesearch=' .
                urlencode($query);
        
        $response = file_get_contents($url);

        return json_decode($response, true);
    }

    public function getPopularTracks() {
        $orderType = 'listens_month';

        $url = 'https://api.jamendo.com/v3.0/tracks/?client_id='
                . $this->client_id .
                '&format=json&limit=' 
                . $this->limit . 
                '&order='
                . $orderType;
        
        $response = file_get_contents($url);

        return json_decode($response, true);
    }
}

?>