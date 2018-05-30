<?php
/**
 * Created by PhpStorm.
 * User: jamestaber
 * Date: 2/12/18
 * Time: 4:54 PM
 */


class auth extends AppController{

    public function __construct($parent)
    {
        $this->parent = $parent;
    }



    //auth/login
    public function login(){

        if ($_REQUEST["username"] && $_REQUEST["password"]) {


            $data = $this->parent->getModel("users")->select("select * from users where email = :email and password = :password", array(":email" => $_REQUEST["username"], ":password" => sha1($_REQUEST["password"])));

            if ($data) {
                $_SESSION["loggedin"] = 1;
                header("location:/welcome");

            } else {
                header("location:/welcome?msg= Bad Login");
            }
        }
    }

    public function signup(){
        //var_dump($_REQUEST);


        if ($_REQUEST["email"] && $_REQUEST["password"]) {

            //$data = $this->parent->getModel("users")->select("select * from users where email = :email", array("email"=>$_REQUEST["email"]));//"'$_REQUEST["email"]'";


            if (!filter_var($_REQUEST["email"], FILTER_VALIDATE_EMAIL)) {

                echo "<br><br><br>Email invalid";

                echo "<br><a href='/login/signup'>Click here to go back</a>";

            } else {

                $this->parent->getModel("users")->add("insert into users (email, password) values(:email, :password)", array(":email"=>$_REQUEST["email"], ":password" => sha1($_REQUEST["password"])));

                header("Location:/login/complete");
            }

        }else{
            echo "<br><br><br>Cannot leave a field blank!";

            echo "<br><a href='/login/signup'>Click here to go back</a>";
        }

    }

        /*

        THIS IS TO LOGIN WITH TEXT FILE!


    $file = "./assets/login.txt";
    $users = file_get_contents($file);
    $users = explode(PHP_EOL, $users);



    foreach($users as $entry){
        $info = explode("|", $entry);
        //var_dump($info);

        $user = $info[0];
        $password = $info[1];
        $name = $info[2];
        $profile = $info[3];




        if($_REQUEST["username"]== $user && $_REQUEST["password"]== $password){

            if($_REQUEST["username"]== $user && $_REQUEST["password"]== $password){

                $_SESSION["loggedin"] =1;
                $_SESSION["name"] = $name;
                $_SESSION["bio"] = $profile;

                echo("<script>console.log('PHP: ".$_REQUEST."');</script>");


                header("Location:/profile");
                break;




            }else{

                header("Location:/welcome?msg=Bad Login");
            }

        }else{

            //echo("<script>console.log('PHP: ".$user."');</script>");
            //echo "<br>";
            //echo("<script>console.log('PHP: ".$_REQUEST["username"]."');</script>");
            header("Location:/welcome?msg=Bad Login");
        }
        */




    public function logout(){
        session_destroy();
        header("Location:/welcome");
    }
}