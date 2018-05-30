<?php
/**
 * Created by PhpStorm.
 * User: jamestaber
 * Date: 2/12/18
 * Time: 4:54 PM
 */


class profile extends AppController{

    public function __construct()
    {
        $this->menu= ["Home"=>"/welcome","Demo"=>"/welcome/demo2", "Form"=>"/welcome/form", "Login"=>"/login", "About"=>"/about/showList", "API"=>"/api/showApi", "API Search"=>"/youtube/showYouTube"];
        if(@$_SESSION["loggedin"] && $_SESSION["loggedin"]==1){

            //header("Location:/profile");

        }else{
            header("Location:/welcome");
        }

    }

    public function index(){

        $this->getView("header", array("pagename"=>"profile"));
        $this->getView("navigation", $this->menu);



        $this->getView("profile", array("pagename"=>"profile"));
        //echo "<br><br><br>This is a protected area";
        $this->getView("footer");
    }

    public function update(){
        if($_FILES["img"]["name"]!=""){

            $imageFileType = pathinfo("asset/".$_FILES["img"]["name"], PATHINFO_EXTENSION);

            if(file_exists("asset/".$_FILES["img"]["name"])){
                echo "Sorry, file exists";
            }else{

                if($imageFileType != "jpg" && $imageFileType != "png"){

                    echo "Sorry, this file type is not allowed";
                }else{

                    if(move_uploaded_file($_FILES["img"]["temp_name"], "assets/".$_FILES["img"]["name"])){

                        echo "File Uploaded";
                    }else{
                        echo "error uploaded";
                    }
                }
            }
        }
        header("Location:/profile?msg=File Uploaded");
    }
}