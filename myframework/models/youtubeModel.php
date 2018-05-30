<?php
/**
 * Created by PhpStorm.
 * User: jamestaber
 * Date: 2/25/18
 * Time: 1:46 PM
 */

class youtubeModel
{
    public function __construct($parent)
    {
        $this->db = $parent->db;

    }

    public function youTube(){

        require_once 'google-api-php-client/src/Google/autoload.php';

        $client = new Google_Client();
        $client->setDeveloperKey("AIzaSyB-Ba4JeMvZaKBHKa2Ooo3TFJ17bmCANyY");

        $youtube = new Google_Service_YouTube($client);
        $optParams = array("q"=>"fullsail", "maxResults"=>25);

        $searchResponse = $youtube->search->listSearch('id,snippet', $optParams);
        return $searchResponse;
    }
}