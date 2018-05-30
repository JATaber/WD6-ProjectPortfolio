<body>

<div class="container">
    <div>
        <h1>Edit A Fruit</h1>

        <? //var_dump($_REQUEST);?>
        <form action="/about/editAction/?id=<?echo $_REQUEST["id"];?>" method="post">

            <input type="text" name="name" placeholder="<?echo $_REQUEST["name"];?>">

            <input type="submit">
        </form>
    </div>
</div>