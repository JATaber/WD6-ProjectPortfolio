<body class="off-canvas-nav-left" style="padding-top:70px;">

<div class="container">
    <div class="jumbotron">
        <?




        function create_image($cap)

        {
            $arr = get_defined_vars();

            unlink("./assets/image1.png");

            global $image;

            $image = imagecreatetruecolor(200, 50) or die("Cannot Initialize new GD image stream");

            $background_color = imagecolorallocate($image, 255, 255, 255);

            $text_color = imagecolorallocate($image, 0, 255, 255);

            $line_color = imagecolorallocate($image, 64, 64, 64);

            $pixel_color = imagecolorallocate($image, 0, 0, 255);

            imagefilledrectangle($image, 0, 0, 200, 50, $background_color);

            for ($i = 0; $i < 3; $i++) {

                imageline($image, 0, rand() % 50, 200, rand() % 50, $line_color);

            }

            for ($i = 0; $i < 1000; $i++) {

                imagesetpixel($image, rand() % 200, rand() % 50, $pixel_color);

            }

            $text_color = imagecolorallocate($image, 0, 0, 0);

            ImageString($image, 22, 30, 22, $cap, $text_color);

            /*

            Create your session variable that carries the data, you will check against this in your controller.

            Something like $_SESSION[..]=....;
            */
            //echo "<br><br><br>";
            //var_dump($arr);
            //echo $arr["cap"];
            $captcha = $arr["cap"];

            $_SESSION["captcha"] = $captcha;

            //echo $_SESSION["captcha"];

            imagepng($image, "./assets/image1.png");

}

        create_image($data["cap"]);

        echo "<img src='/assets/image1.png'>";

        ?>
        <form action="/welcome/formRecv" method="POST" novalidate>
            <div class="form-group">

                <label for="captcha">Enter Captcha </label>

                <input name="captcha" type="captcha" id="captcha"  placeholder="">

            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input name="email" type="email" class="form-control" id="email" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                <?   if(!empty($_POST)){
                        if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
                            echo "<p class='alert alert-danger' role='alert'><strong>OH NO!</strong> email is invalid!</p>";
                        }else{
                            echo "<p class='alert alert-success' role='alert'><strong>YAY!</strong> email is valid</p>";
                        }
                    }
                ?>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <small id="passwordHelp" class="form-text text-muted">Please enter letters</small>
                <input name="password" type="password" class="form-control" id="password" placeholder="Password">
                <?   if(!empty($_POST)){
                    if(!preg_match("/^[a-zA-Z]*$/", $_POST["password"])){
                        echo "<p class='alert alert-danger' role='alert'><strong>OH NO!</strong> select a different password!</p>";
                    }else{
                        echo "<p class='alert alert-success' role='alert'><strong>YAY!</strong> password is good!!</p>";
                    }
                }
                ?>
            </div>
            <div class="form-group">
                <label for="singleSelect">Example select</label>
                <select class="form-control" id="singleSelect">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="multiSelect">Example multiple select</label>
                <select multiple class="form-control" id="multiSelect">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="textarea">Example textarea</label>
                <textarea class="form-control" id="textarea" rows="3"></textarea>
            </div>
            <fieldset class="form-group">
                <legend>Radio buttons</legend>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                        Option one is this and that&mdash;be sure to include why it's great
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
                        Option two can be something else and selecting it will deselect option one
                    </label>
                </div>
                <div class="form-check disabled">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
                        Option three is disabled
                    </label>
                </div>
            </fieldset>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input">
                    Check me out
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>