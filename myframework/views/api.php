<body class="off-canvas-nav-left" style="padding-top:70px;">

<div class="container">
    <div class="jumbotron">
        <h1>Api Demo</h1>

        <br><br><br>
        <?
        foreach($data as $item){
            echo $item['volumeInfo']['title'], "<br /> \n";
        }
        ?>
    </div>
</div>