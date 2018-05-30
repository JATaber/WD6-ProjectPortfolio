<?php
/**
 * Created by PhpStorm.
 * User: jamestaber
 * Date: 2/5/18
 * Time: 9:43 PM
 */
$arr = get_defined_vars();

//print_r($arr);

$url = $_SERVER['REQUEST_URI'];

//var_dump($url);
?>

<!-- Static navbar -->
<nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navItems" aria-controls="navItems" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?
            echo '<a class="navbar-brand" href="'.$arr["data"]["Home"].'">My Project</a>';
            ?>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navItems">
            <ul class="navbar-nav mr-auto">
                <?
                foreach($arr["data"] as $key=>$value){
                    $active = ' ';

                    if($url == $value || $url == '/welcome/formRecv'){
                        $active = 'active';
                    }

                    //echo $key.' '.$value;
                    echo '<li class="nav-item '.$key.' '.$active.'"><a class="nav-link" href="'.$value.'">'.$key.'</a></li>';

                }
                ?>
            </ul>
            <span style="color:red"><?=@$_REQUEST["msg"]?$_REQUEST["msg"]:'';?></span>
            <?if(@$_SESSION["loggedin"] && @$_SESSION["loggedin"]==1){?>
            <form class="form-inline text-white">
                <p><a href="/profile">Profile </a> |
                <a href="/auth/logout"> Logout</a></p>
            </form>
            <?}else{?>
                <form class="form-inline" role="search" method="post" action="/auth/login">
                    <div class="form-group">
                        <input type="text" class="form-control" name="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="password" placeholder="Password">
                    </div>

                    <button type="submit" class="btn btn-primary">Sign In</button>
                    <a href="/login/signup"><button type="button" class="btn btn-outline-secondary">Sign Up</button> </a>

                </form>
            <?}?>
            <!--
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
            </ul>
            -->
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>