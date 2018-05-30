<?php
/**
 * Created by PhpStorm.
 * User: jamestaber
 * Date: 2/25/18
 * Time: 9:59 AM
 */

class apiModel{
    public function __construct($parent)
    {
        $this->db = $parent->db;

    }

    public function googleBooks($term=''){

        require_once 'google-api-php-client/src/Google/autoload.php';

        $client = new Google_Client();
        $client->setApplicationName("sslapi");
        $client->setDeveloperKey("AIzaSyB-Ba4JeMvZaKBHKa2Ooo3TFJ17bmCANyY");

        $service = new Google_Service_Books($client);

        $optParams = array("filter"=>"free-ebooks");
        $result = $service->volumes->listVolumes($term,$optParams);

        return $result;
    }


}