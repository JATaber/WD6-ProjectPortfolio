<?php
/**
 * Created by PhpStorm.
 * User: jamestaber
 * Date: 2/18/18
 * Time: 10:45 AM
 */

class about extends AppController{

    public function __construct($parent){
        $this->menu= ["Home"=>"/welcome","Demo"=>"/welcome/demo2", "Form"=>"/welcome/form", "Login"=>"/login", "About"=>"/about/showList", "API"=>"/api/showApi", "API Search"=>"/youtube/showYouTube"];

        $this->parent = $parent;
        //$this->showList();
    }

    public function showList(){

        $data = $this->parent->getModel("fruits")->select("select * from fruit_table");

        $this->getView("header", array("pagename"=>"about"));
        $this->getView("navigation", $this->menu);
        $this->getView("about", $data);
        $this->getView("footer");

    }

    public function showAddForm(){
        $this->getView("header", array("pagename"=>"about"));
        $this->getView("navigation", $this->menu);
        $this->showList();
        $this->getView("addForm");
        $this->getView("footer");
    }

    public function addAction(){

        $this->parent->getModel("fruits")->add("insert into fruit_table (name) values(:name)", array(":name"=>$_REQUEST["name"]));

        header("Location:/about/showList");
    }

    public function delete(){

        //print_r($_REQUEST);
        $this->parent->getModel("fruits")->delete("DELETE FROM fruit_table WHERE id = :id", array(":id"=>$_REQUEST["id"]));//.$_REQUEST["id"]);

        header("Location:/about/showList");
    }

    public function edit(){
        //print_r($_REQUEST);
        $this->getView("header", array("pagename"=>"about"));
        $this->getView("navigation", $this->menu);
        $this->showList();
        $this->getView("editForm");
        $this->getView("footer");

    }

    public function editAction(){

        //print_r($_REQUEST);
        $this->parent->getModel("fruits")->update("UPDATE fruit_table SET name = :name WHERE id = :id", array(":name"=>$_REQUEST["name"], ":id"=>$_REQUEST["id"]));  //'".$_REQUEST["name"]."' WHERE id=".$_REQUEST["id"]);
        header("Location:/about/showList");
    }
}