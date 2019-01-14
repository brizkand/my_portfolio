<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Kevin Holgado">
    <link rel="shortcut icon" type="image/x-icon" href="storage/briz_logos/briz_icon.png" />
    <title>Welcome to my Website</title>
   
    <!--JQUERY-->
    <script src="brizkand_jquery/jquery-3.3.1.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    
    <!-- BOOTSTRAP JS -->
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <link href="resources/css/app.css" rel="stylesheet">
    <script src="node_modules/bootstrap/scss/bootstrap.css"></script> 
    <style>
        .nav-link{
            font-weight: bold;
            font-size: 18px;
        }
        @media only screen and (max-width: 800px) {
            
            #title{
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
    <!--START OF NAVIGATION-->
    <nav id="briz-nav" class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="/storage/briz_logos/briz_icon.png" alt="brizkand icon" style="width:40px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="portfolio.php">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.php">Gallery</a>
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact Me</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav><!--END OF NAVIGATION-->

    <!--START OF THE CONTENT-->
    <div class="container-fluid">
        <h4 id="title" class="p-5 text-center display-4 bg-info"><b style="border-bottom: 7px solid white">About Myself</b></h4>
    </div>       
    <div class='container-fluid'>
        <div class="row">
            <div class="col-sm-6 mb-4">
                <div class="card p-5">
                    <img class="card-image-top mx-auto d-block" src="storage/briz_images/brizkand3.png" alt="Brizkand_image" style="width:50%">
                    <div class="card-body">
                        <h2 class="card-title text-center text-primary"><b>Who's this guy?</b></h2>
                        <p class="card-text text-center lead">I'm a junior developer from Philippines.</p>
                        <p class="card-text text-center lead">I love to create, developed new things around the web.</p>
                        <p class="card-text text-center lead">I have a strong passion to create best user experience and to surpass their satisfactions.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mb-4">
                <div class="card p-4">
                    <div class="card-body">
                        <h4 class="card-title text-center text-success"><b>My Skills</b></h4>
                        <div class="progress m-4" style="height:30px">
                            <div class="progress-bar bg-info" style="width:20%"><b>HTML</b></div>
                            <div class="progress-bar bg-primary progress-bar-striped progress-bar-animated" style="width:72%">90%</div>
                        </div>
                        <div class="progress m-4" style="height:30px">
                            <div class="progress-bar bg-info" style="width:20%"><b>CSS</b></div>
                            <div class="progress-bar bg-primary progress-bar-striped progress-bar-animated" style="width:64%">80%</div>
                        </div>
                        <div class="progress m-4" style="height:30px">
                            <div class="progress-bar bg-info" style="width:20%"><b>JAVASCRIPT</b></div>
                            <div class="progress-bar bg-primary progress-bar-striped progress-bar-animated" style="width:56%">70%</div>
                        </div>
                        <div class="progress m-4" style="height:30px">
                            <div class="progress-bar bg-info" style="width:20%"><b>JQUERY</b></div>
                            <div class="progress-bar bg-primary progress-bar-striped progress-bar-animated" style="width:48%">60%</div>
                        </div>
                        <div class="progress m-4" style="height:30px">
                            <div class="progress-bar bg-info" style="width:20%"><b>BOOTSRAP 4</b></div>
                            <div class="progress-bar bg-primary progress-bar-striped progress-bar-animated" style="width:56%">70%</div>
                        </div>
                        <div class="progress m-4" style="height:30px">
                            <div class="progress-bar bg-info" style="width:20%"><b>PHP</b></div>
                            <div class="progress-bar bg-primary progress-bar-striped progress-bar-animated" style="width:68%">85%</div>
                        </div>
                        <div class="progress m-4" style="height:30px">
                            <div class="progress-bar bg-info" style="width:20%"><b>MYSQL</b></div>
                            <div class="progress-bar bg-primary progress-bar-striped progress-bar-animated" style="width:64%">80%</div>
                        </div>
                        <div class="progress m-4" style="height:30px">
                            <div class="progress-bar bg-info" style="width:20%"><b>LARAVEL</b></div>
                            <div class="progress-bar bg-primary progress-bar-striped progress-bar-animated" style="width:32%">40%</div>
                        </div>
                        <div class="progress m-4" style="height:30px">
                            <div class="progress-bar bg-info" style="width:20%"><b>Photoshop</b></div>
                            <div class="progress-bar bg-primary progress-bar-striped progress-bar-animated" style="width:72%">90%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid p-5">
        <?php
            include_once("footer.php");
        ?>
    </div>
</body>
</html>
