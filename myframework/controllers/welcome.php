<?php
/**
 * Created by PhpStorm.
 * User: jamestaber
 * Date: 2/4/18
 * Time: 12:07 PM
 */

class welcome extends AppController{

    public $menu;

    public function __construct($urlPathParts){

        $this->menu= ["Home"=>"/welcome","Demo"=>"/welcome/demo2", "Form"=>"/welcome/form", "Login"=>"/login", "About"=>"/about/showList", "API"=>"/api/showApi", "API Search"=>"/youtube/showYouTube"];

        $url = get_object_vars($urlPathParts);

        //print_r($url["urlPathParts"]);
    }


    public function index(){

        //this loads the header of the application
        $this->getView("header", array("pagename"=>"Project: welcome"));
        $this->getView("navigation", $this->menu);
        $this->getView("welcome");
        $this->getView("footer");
    }


    public function demo2(){
        $this->getView("header", array("pagename"=>"Project: Demo 2"));
        $this->getView("navigation", $this->menu);
        $this->getView("demo2");
        $this->getView("footer");

    }
    //third party index

    public function form(){
        $this->getView("header", array("pagename"=>"Project: Form Demo"));
        $this->getView("navigation", $this->menu);
        $random = substr( md5(rand()), 0, 7);
        $this->getView("form", array("cap"=>$random));
        $this->getView("footer");
    }

    public function formRecv(){
        $this->getView("header", array("pagename"=>"Project: Form Demo"));
        $this->getView("navigation", $this->menu);


        if($_POST["captcha"]==$_SESSION["captcha"]){

            if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){

                echo "<br><br><br>Email invalid";

                echo "<br><a href='/welcome/form'>Click here to go back</a>";

            }else{

                echo "<br><br><br>Email valid";

            }

        }else{

            echo "<br><br><br>Invalid captcha";

            echo "<br><a href='/welcome/form'>Click here to go back</a>";

        }



        //$this->getView("form", $_POST);

        $this->getView("footer");

        //echo "<br><br><br>";
        //var_dump($_POST);
        //var_dump($_SESSION);

    }


}

?>