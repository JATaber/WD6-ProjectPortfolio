<body class="off-canvas-nav-left" style="padding-top:70px;">

<div class="container">
    <div class="jumbotron">
        <form action="/auth/signup" method="post" novalidate>
            <h1 class="mb-3">Sign Up</h1>
            <div class="form-group">
                <label for="email">Email address</label>
                <input name="email" type="email" class="form-control" id="email" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <small id="passwordHelp" class="form-text text-muted">Please enter letters</small>
                <input name="password" type="password" class="form-control" id="password" placeholder="Password">
            </div>

            <input type="submit" class="btn btn-primary" value="Submit"/>
        </form>
    </div>
</div>