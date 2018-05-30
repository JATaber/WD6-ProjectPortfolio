<?php
/**
 * Created by PhpStorm.
 * User: jamestaber
 * Date: 2/25/18
 * Time: 1:45 PM
 */

class youtube extends AppController{
    public function __construct($parent){

        $this->menu= ["Home"=>"/welcome","Demo"=>"/welcome/demo2", "Form"=>"/welcome/form", "Login"=>"/login", "About"=>"/about/showList", "API"=>"/api/showApi", "API Search"=>"/youtube/showYouTube"];
        $this->parent = $parent;
    }

    public function showYouTube(){
        $this->getView("header", array("pagename"=>"api"));
        $this->getView("navigation", $this->menu);

        //echo "<br><br><br><br>";
        $data = $this->parent->getModel("youtubeModel")->youTube();
        $this->getView("youTube", $data);

        $this->getView("footer");
    }
}