<?php
/**
 * Created by PhpStorm.
 * User: jamestaber
 * Date: 2/7/18
 * Time: 1:50 AM
 */

class login extends AppController{


    public $menu;

    public function __construct()
    {
        $this->menu= ["Home"=>"/welcome","Demo"=>"/welcome/demo2", "Form"=>"/welcome/form", "Login"=>"/login", "About"=>"/about/showList", "API"=>"/api/showApi", "API Search"=>"/youtube/showYouTube"];
    }

    public function index(){
        $this->getView("header", array("pagename"=>"Project: Login"));
        $this->getView("navigation", $this->menu);
        $this->getView("login");
        $this->getView("footer");
    }

    public function ajaxPars(){

        //var_dump($_REQUEST);

        if(@$_REQUEST["email"] == "mike@aol.com") {
            echo "welcome";
        }else{
            echo "bad login";
        }
    }

    public function signup(){
        $this->getView("header", array("pagename"=>"Project: Login"));
        $this->getView("navigation", $this->menu);
        $this->getView("signup");
        $this->getView("footer");
    }

    public function complete(){
        $this->getView("header", array("pagename"=>"Project: Login"));
        $this->getView("navigation", $this->menu);
        $this->getView("complete");
        $this->getView("footer");
    }


}