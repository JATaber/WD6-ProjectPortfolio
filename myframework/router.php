<?php
/**
 * Created by PhpStorm.
 * User: jamestaber
 * Date: 2/4/18
 * Time: 11:25 AM
 */

include 'bin/app.php';

class Router
{

    public function __construct($urlPathParts, $config)
    {
        $this->App = new App($config);

        switch ($urlPathParts[0]) {

            case "home":
                $this->App->startApp($urlPathParts);
                break;

            case "api":
                $this->App->startApp($urlPathParts);
                break;

            default:
                $this->App->startApp($urlPathParts);
                break;
        }
    }
}

?>