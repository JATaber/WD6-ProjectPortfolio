<?php
/**
 * Created by PhpStorm.
 * User: jamestaber
 * Date: 2/4/18
 * Time: 11:38 AM
 */

include 'appcontroller.php';

class App{

    public function __construct($config)
    {
        $this->config = $config;
    }

    public function startApp($params){

        $AppController = new AppController($params, $this->config);

    }
}

?>