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
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="portfolio.php">Portfolio</a>
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
        <h4 id="title" class="p-5 text-center display-4 bg-info"><b style="border-bottom: 7px solid white">My Portfolio</b></h4>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4 p-4 mb-4">
            <img class="card-img-top" src="/storage/briz_project_images/genserv_website.png" alt="Genserv Website Image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">Genserv Website</h4>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">Learn more...</button>
                </div>
            </div>

            <div class="col-sm-4 p-4 mb-4">
            <img class="card-img-top" src="/storage/briz_project_images/genserv_system.png" alt="Genserv System Image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">Genserv System</h4>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2">Learn more...</button>
                </div>
            </div>

            <div class="col-sm-4 p-4 mb-4">
            <img class="card-img-top" src="/storage/briz_project_images/kevblog.png" alt="Kevblog Image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">Kevblog</h4>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal3">Learn more...</button>
                </div>
            </div>
        </div>
    </div>

    <!-- The Modal 1 -->
    <div class="modal fade" id="myModal1">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">    
            <!-- Modal body -->
            <div class="modal-body">
                <!--START OF CAROUSEL-->
                    <div id="demo" class="carousel slide" data-ride="carousel" data-interval="3000">
                        <ul class="carousel-indicators">
                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                            <li data-target="#demo" data-slide-to="1"></li>
                            <li data-target="#demo" data-slide-to="2"></li>
                            <li data-target="#demo" data-slide-to="3"></li>
                            <li data-target="#demo" data-slide-to="4"></li>
                            <li data-target="#demo" data-slide-to="5"></li>
                        </ul>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="/storage/briz_project_images/genserv_website_home.png" alt="Genserv Website Image" width="100%">
                            </div>
                            <div class="carousel-item">
                                <img src="/storage/briz_project_images/genserv_website_partners.png" alt="Genserv Website Image" width="100%">  
                            </div>
                            <div class="carousel-item">
                                <img src="/storage/briz_project_images/genserv_website_downloads.png" alt="Genserv Website Image" width="100%"> 
                            </div>
                            <div class="carousel-item">
                                <img src="/storage/briz_project_images/genserv_website_products.png" alt="Genserv Website Image" width="100%"> 
                            </div>
                            <div class="carousel-item">
                                <img src="/storage/briz_project_images/genserv_website_projects.png" alt="Genserv Website Image" width="100%"> 
                            </div>
                            <div class="carousel-item">
                                <img src="/storage/briz_project_images/genserv_website_contact.png" alt="Genserv Website Image" width="100%"> 
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon bg-dark p-4"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon bg-dark p-4"></span>
                        </a>
                    </div>
                <!--END OF CAROUSEL-->
                <div class="card p-4 mt-2">
                    <h4 class="card-title text-primary">Genserv Website</h4>
                    <p class="card-text lead">This is the website of Genserv International Inc, written in PHP using Bootstrap 4</p>
                    <a href="http://genserv-ph.com/" target="_blank" class="btn btn-primary">View Site</a>
                </div>
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            
        </div>
        </div>
    </div>

    <!-- The Modal 2 -->
    <div class="modal fade" id="myModal2">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">    
            <!-- Modal body -->
            <div class="modal-body">
                <!--START OF CAROUSEL-->
                    <div id="demo1" class="carousel slide" data-ride="carousel" data-interval="3000">
                        <ul class="carousel-indicators">
                            <li data-target="#demo1" data-slide-to="0" class="active"></li>
                            <li data-target="#demo1" data-slide-to="1"></li>
                            <li data-target="#demo1" data-slide-to="2"></li>
                            <li data-target="#demo1" data-slide-to="3"></li>
                            <li data-target="#demo1" data-slide-to="4"></li>
                        </ul>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="/storage/briz_project_images/genserv_system_setting.png" alt="Genserv System Image" width="100%">
                            </div>
                            <div class="carousel-item">
                                <img src="/storage/briz_project_images/genserv_system_leave.png" alt="Genserv System Image" width="100%">  
                            </div>
                            <div class="carousel-item">
                                <img src="/storage/briz_project_images/genserv_system_cards.png" alt="Genserv System Image" width="100%"> 
                            </div>
                            <div class="carousel-item">
                                <img src="/storage/briz_project_images/genserv_system_ceiling.png" alt="Genserv System Image" width="100%"> 
                            </div>
                            <div class="carousel-item">
                                <img src="/storage/briz_project_images/genserv_system_employees.png" alt="Genserv System Image" width="100%"> 
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#demo1" data-slide="prev">
                            <span class="carousel-control-prev-icon bg-dark p-4"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo1" data-slide="next">
                            <span class="carousel-control-next-icon bg-dark p-4"></span>
                        </a>
                    </div>
                <!--END OF CAROUSEL-->
                <div class="card p-4 mt-2">
                    <h4 class="card-title text-primary">Genserv System</h4>
                    <p class="card-text lead">This is the system of Genserv International Inc, written in PHP, JavaScript, JQuery, AJAX and using own CSS.</p>
                </div>
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            
        </div>
        </div>
    </div>

    <!-- The Modal 3 -->
    <div class="modal fade" id="myModal3">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">    
            <!-- Modal body -->
            <div class="modal-body">
                <!--START OF CAROUSEL-->
                    <div id="demo2" class="carousel slide" data-ride="carousel" data-interval="3000">
                        <ul class="carousel-indicators">
                            <li data-target="#demo2" data-slide-to="0" class="active"></li>
                            <li data-target="#demo2" data-slide-to="1"></li>
                            <li data-target="#demo2" data-slide-to="2"></li>
                            <li data-target="#demo2" data-slide-to="3"></li>
                            <li data-target="#demo2" data-slide-to="4"></li>
                        </ul>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="/storage/briz_project_images/kevblog_home.png" alt="Kevblog System Image" width="100%">
                            </div>
                            <div class="carousel-item">
                                <img src="/storage/briz_project_images/kevblog_register.png" alt="Kevblog System Image" width="100%">  
                            </div>
                            <div class="carousel-item">
                                <img src="/storage/briz_project_images/kevblog_create.png" alt="Kevblog System Image" width="100%"> 
                            </div>
                            <div class="carousel-item">
                                <img src="/storage/briz_project_images/kevblog_blogs.png" alt="Kevblog System Image" width="100%"> 
                            </div>
                            <div class="carousel-item">
                                <img src="/storage/briz_project_images/kevblog_dashboard.png" alt="Kevblog System Image" width="100%"> 
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#demo2" data-slide="prev">
                            <span class="carousel-control-prev-icon bg-dark p-4"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo2" data-slide="next">
                            <span class="carousel-control-next-icon bg-dark p-4"></span>
                        </a>
                    </div>
                <!--END OF CAROUSEL-->
                <div class="card p-4 mt-2">
                    <h4 class="card-title text-primary">Kevblog</h4>
                    <p class="card-text lead">This is a blog site using PHP Framework which is Laravel.
                        The user needs to sign-up first before making a blog.
                    </p>
                </div>
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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
