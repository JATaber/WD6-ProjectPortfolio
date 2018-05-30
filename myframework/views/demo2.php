<body class="off-canvas-nav-left" style="padding-top:70px;">





<div class="container">

    <!-- Main component for a primary marketing message or call to action -->
    <div class="jumbotron text-center">
        <h1>Modal Example</h1>
        <p>This example is a quick exercise to illustrate how the Modals would work within the site.</p>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary btn-lg text-center" data-toggle="modal" data-target="#myModal">
            Launch demo modal
        </button>

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Demo Modal</h5>
                        <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>-->
                    </div>
                    <div class="modal-body">
                        <p>This is for the contents of the Modal</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="jumbotron">
        <h1 class="text-center">Carousel Example</h1>
        <p class="text-center">This example is a quick exercise to illustrate how the carousel works. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>
        <div id="demoCarousel" class="carousel slide" data-ride="carousel">
            <!-- INdicators for the carousel -->
            <ol class="carousel-indicators">
                <li data-target="#demoCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#demoCarousel" data-slide-to="1"></li>
                <li data-target="#demoCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrappers for the slides -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="https://placeimg.com/640/480/tech/sepia" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://placeimg.com/640/480/arch/sepia" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://placeimg.com/640/480/nature" alt="Third slide">
                </div>
            </div>
            <!-- Left and Right controlls -->
            <a class="carousel-control-prev" href="#demoCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#demoCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="jumbotron text-center">
        <h1>Progress Bar Demos</h1>
        <p>This is some examples of responsive progress bars at various lengths</p>
        <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
        </div><br>
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div><br>
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
        </div><br>
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
        </div><br>
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
        </div><br>
        <p>This is to give an animated progress bar example</p>
        <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
        </div>
    </div>
    <div class="jumbotron text-center">
        <h1>Popover Examples</h1>
        <p>Click the buttons bellow to watch how the popover works. The purpose of this is to demostrate the various directions that the popover do.</p>
        <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
            Popover on top
        </button>

        <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
            Popover on right
        </button>

        <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
            Popover on bottom
        </button>

        <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
            Popover on left
        </button>
    </div>

</div> <!-- /container -->