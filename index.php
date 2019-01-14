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
        #briz-nav{
            display: none;
        }
        .card-img-overlay{
            padding-top: 20%
        }
        @media only screen and (max-width: 800px) {
            #briz-nav {
                display: block;                 
            }
            #welcome-text{
                font-size: 24px;
            }
        }
    </style>
    <script>
        $(document).ready(function(){
            $(window).scroll(function(){
                if ($(document).scrollTop() > 40) {
                    $("#briz-nav").fadeIn(300);
                    //$("nav").css("background-color", "black");
                    $("#briz-nav").css("display", "block");
                } 
                else {
                    $("#briz-nav").fadeOut(300);
                }
            });
        });
    </script>
</head>
<body>
    <!--START OF NAVIGATION-->
    <nav id="briz-nav" class="navbar navbar-expand-md bg-white navbar-light sticky-top">
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
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
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
    <div class='card img-fluid'>
        <img class="card-img-top " src="storage/briz_images/brizkand1.png" alt="brizkand image1">
        <div class="card-img-overlay">
            <p id="welcome-text" class="card-text text-center display-4"><i>Hello I'm <b class="text-white">Kevin Holgado</b>.</i></p>
            <p id="welcome-text" class="card-text text-center display-4"><i>I'm a <span style="border-bottom: 4px ridge red;">jr. web developer</span>.</i></p>
            <p class="text-center"><a href="portfolio.php" class="btn btn-primary btn-lg">View my work</a></p>
        </div>    
    </div>

    <!--<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <h4 class="text-center text-info card">Something about my self.</h4>
        </div>
        <div class="col-sm-4">
            <p class="card">Sample 1</p>
        </div>
        <div class="col-sm-4">
            <p class="card">Sample 1</p>
        </div>
        <div class="col-sm-4">
            <p class="card">Sample 1</p>
        </div>
    </div>-->

    <div class="container-fluid p-5">
        <?php
            include_once("footer.php");
        ?>
    </div>
</body>
</html>
