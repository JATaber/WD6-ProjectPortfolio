<body class="off-canvas-nav-left" style="padding-top:70px;">
<div class="container">
    <div class="jumbotron">
        <div class="row card">
            <div class="col-md-12 col-xs-12">
                <img src="/assets/images/46.jpg" alt="profile img" class="img-thumbnail picture hidden-xs-down"><br>

                <form action="/profile/update" method="post" enctype="multipart/form-data">
                    <label class="btn btn-primary" style="width: 110px;">Browse
                    <input name="img" type="file" style="display: none;">
                    </label>
                    <input type="submit" value="Update" class="btn btn-primary" style="width: 110px;">
                </form>

                <div class="card-header">
                    <!--<h1><? echo $_SESSION["name"]; ?></h1>
                    <h4>Web Developer</h4>
                    <span><? echo $_SESSION["bio"]; ?></span> -->
                    <h1>John/Jane Doe</h1>
                    <h4>Web Developer</h4>
                    <span>This is about me. This is about me. This is about me. THis is about me. This is about me.</span>
                </div>
            </div>
        </div>
    </div>
</div>