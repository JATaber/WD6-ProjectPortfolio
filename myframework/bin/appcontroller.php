<?php
/**
 * Created by PhpStorm.
 * User: jamestaber
 * Date: 2/4/18
 * Time: 11:42 AM
 */

session_start();

class AppController{

    public function __construct($urlPathParts, $config)
    {

        //db information
        // "mysql:host=".$config["host"].";dbname=".$config["dbname"].";", $config["dbuser"], $config["dbpass"]
        //"mysql:dbname=".$config["dbname"].";", $config["dbuser"],$config["dbpass"]

        $this->db = new PDO("mysql:dbname=".$config["dbname"].";", $config["dbuser"], $config["dbpass"]);
        //might have to move this?


        $this->urlPathParts = $urlPathParts;

        //var_dump($urlPathParts);

        //http://127.0.0.1/welcome
        if($urlPathParts[0]){

            include './controllers/'.$urlPathParts[0].".php";

            $appcon = new $urlPathParts[0]($this);

            //http://127.0.0.1/welcome/contact
            if(isset($urlPathParts[1])){

                $appcon->$urlPathParts[1]();
            }else{

                // if there is a default method insdie this controller (index)
                $methodVariable = array($appcon, 'index');
                if(is_callable($methodVariable, false, $callable_name)){

                    $appcon->index($this);
                }
            }

        } else{

            include './controllers/'.$config["defaultController"].".php";

            $appcon = new $config["defaultController"]($this);

            if(isset($urlPathParts[1])){

                $appcon->$config["defaultController"][1]();
            }else{
                $methodVariable = array($appcon, 'index');
                if(is_callable($methodVariable, false, $callable_name)){

                    $appcon->index($this);
                }
            }
        }
    }

    public function getView($page, $data=array()){

        require_once './views/'.$page.".php";
    }

    public function getModel($page){

        require_once './models/'.$page.".php";
        $model = new $page($this);
        return $model;
    }
}

?>