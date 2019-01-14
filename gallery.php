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
                        <a class="nav-link" href="portfolio.php">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="gallery.php">Gallery</a>
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
        <h4 id="title" class="p-5 text-center display-4 bg-info"><b style="border-bottom: 7px solid white">Gallery</b></h4>
    </div>       
    <div class='container-fluid'>
        <div class="row">

            <div class="col-sm-3 p-4 mb-4">
                <div class="card">
                    <img class="card-img-top" src="/storage/briz_gallery_images/graduate.png" alt="Briz Graduate Image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">A bachelor</h4>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">Read more...</button>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 p-4 mb-4">
                <div class="card">
                    <img class="card-img-top" src="/storage/briz_gallery_images/family.png" alt="Briz Family Image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">My Family</h4>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2">Read more...</button>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 p-4 mb-4">
                <div class="card">
                    <img class="card-img-top" src="/storage/briz_gallery_images/true_friends.png" alt="Briz Friends Image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">True Friends</h4>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal3">Read more...</button>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 p-4 mb-4">
                <div class="card">
                    <img class="card-img-top" src="/storage/briz_gallery_images/love.png" alt="Briz Friends Image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">True Love</h4>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal4">Read more...</button>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 p-4 mb-4">
                <div class="card">
                    <img class="card-img-top" src="/storage/briz_gallery_images/beyourself.png" alt="Briz BYS Image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">Be Yourself</h4>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal5">Read more...</button>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 p-4 mb-4">
                <div class="card">
                    <img class="card-img-top" src="/storage/briz_gallery_images/guitar.png" alt="Briz Guitar Image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">I'm a Music Lover</h4>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal6">Read more...</button>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 p-4 mb-4">
                <div class="card">
                    <img class="card-img-top" src="/storage/briz_gallery_images/archery.png" alt="Briz Archery Image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">Archery</h4>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal7">Read more...</button>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 p-4 mb-4">
                <div class="card">
                    <img class="card-img-top" src="/storage/briz_gallery_images/rizal_park.png" alt="Briz Rizal Image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">Hero</h4>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal8">Read more...</button>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- The Modal 1 -->
    <div class="modal fade" id="myModal1">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        
            <!-- Modal Header -->
            <div class="modal-header">
            <h4 class="modal-title text-primary">A Bachelor</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
                <div class="card">
                    <img class="card-img-top" src="/storage/briz_gallery_images/graduate.png" alt="Briz Bachelor Image" style="width:100%">  
                    <div class="card-body">
                        <p class="card-text lead">
                            As i received the bachelor degree i thought this is the ending of my journey,
                            but i was wrong. This is just the start of everything. 
                            I don't know if i'm ready but i know that i'm strong, and the first thing i will do is
                            throw away that store-bought map and begin to draw my own.
                        </p>
                    </div>
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
        
            <!-- Modal Header -->
            <div class="modal-header">
            <h4 class="modal-title text-primary">A Family</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
                <div class="card">
                    <img class="card-img-top" src="/storage/briz_gallery_images/family.png" alt="Briz Family Image" style="width:100%">  
                    <div class="card-body">
                        <p class="card-text lead">
                            Learn to enjoy every minute of your life. Be happy now. 
                            Don't wait for something outside of yourself to make you happy in the future. 
                            Think how really precious is the time you have to spend with your family or love ones. 
                            Every minute should be enjoyed and savored.
                        </p>
                    </div>
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
        
            <!-- Modal Header -->
            <div class="modal-header">
            <h4 class="modal-title text-primary">True Friends</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
                <div class="card">
                    <img class="card-img-top" src="/storage/briz_gallery_images/true_friends.png" alt="Briz Friends Image" style="width:100%">  
                    <div class="card-body">
                        <p class="card-text lead">
                        A best friend is like a four leaf clover, hard to find, lucky to have. 
                        Friends come and go, like the waves of the ocean, but the true ones 
                        stay like an octopus on your face. 
                        As your best friend I'll always pick you up when you fall, 
                        after I finish laughing.
                        </p>
                    </div>
                </div>
           
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            
        </div>
        </div>
    </div>

    <!-- The Modal 4 -->
    <div class="modal fade" id="myModal4">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        
            <!-- Modal Header -->
            <div class="modal-header">
            <h4 class="modal-title text-primary">True Love</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
                <div class="card">
                    <img class="card-img-top" src="/storage/briz_gallery_images/love.png" alt="Briz Love Image" style="width:100%">  
                    <div class="card-body">
                        <p class="card-text lead">
                        The best love is the kind that awakens the soul; 
                        that makes us reach for more, 
                        that plants the fire in our hearts and brings peace to our minds. 
                        </p>
                    </div>
                </div>
           
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            
        </div>
        </div>
    </div>

    <!-- The Modal 5 -->
    <div class="modal fade" id="myModal5">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        
            <!-- Modal Header -->
            <div class="modal-header">
            <h4 class="modal-title text-primary">Be Yourself</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
                <div class="card">
                    <img class="card-img-top" src="/storage/briz_gallery_images/beyourself.png" alt="Briz BYS Image" style="width:100%">  
                    <div class="card-body">
                        <p class="card-text lead">
                        Be who you are and say what you feel, 
                        because those who mind don’t matter, 
                        and those who matter don’t mind.
                        Always be a first rate version of yourself and not a second rate version of someone else.
                        You were born an original. Don't die a copy.
                        Always be yourself, express yourself, have faith in yourself, do not go out and look for a successful personality and duplicate it.     
                        Say what you feel. It's not being rude, it's called being real.
                        </p>
                    </div>
                </div>
           
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            
        </div>
        </div>
    </div>

    <!-- The Modal 6 -->
    <div class="modal fade" id="myModal6">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        
            <!-- Modal Header -->
            <div class="modal-header">
            <h4 class="modal-title text-primary">I'm a Music Lover</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
                <div class="card">
                    <img class="card-img-top" src="/storage/briz_gallery_images/guitar.png" alt="Briz Music Lover Image" style="width:100%">  
                    <div class="card-body">
                        <p class="card-text lead">
                        Guitar players are a different breed of human. 
                        They love nothing more passionately than strumming those strings as 
                        if they were made of the most exquisite silk. 
                        The guitar player is part of an entire sub-culture of cool 
                        and once one picks up a guitar, chances are they’ll never put it down; 
                        it’s more addicting and pleasing than the strongest of opiates.
                        </p>
                    </div>
                </div>
           
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            
        </div>
        </div>
    </div>

    <!-- The Modal 7 -->
    <div class="modal fade" id="myModal7">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        
            <!-- Modal Header -->
            <div class="modal-header">
            <h4 class="modal-title text-primary">Archery</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
                <div class="card">
                    <img class="card-img-top" src="/storage/briz_gallery_images/archery.png" alt="Briz Archery Image" style="width:100%">  
                    <div class="card-body">
                        <p class="card-text lead">
                        Archery is the art, sport, practice or skill of using a bow to shoot arrows. 
                        The word comes from the Latin arcus. Historically, 
                        archery has been used for hunting and combat. In modern times, 
                        it is mainly a competitive sport and recreational activity. 
                        A person who participates in archery is typically called an archer or a bowman, 
                        and a person who is fond of or an expert at archery is sometimes called a 
                        toxophilite.
                        </p>
                    </div>
                </div>
           
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            
        </div>
        </div>
    </div>

    <!-- The Modal 8 -->
    <div class="modal fade" id="myModal8">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        
            <!-- Modal Header -->
            <div class="modal-header">
            <h4 class="modal-title text-primary">Hero</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
                <div class="card">
                    <img class="card-img-top" src="/storage/briz_gallery_images/rizal_park.png" alt="Briz Hero Image" style="width:100%">  
                    <div class="card-body">
                        <p class="card-text lead">
                        To have no heroes is to have no aspiration, to live on the momentum of 
                        the past, to be thrown back upon routine, sensuality, and the narrow self. 
                        Show me a hero and I will write you a tragedy. 
                        A hero is an ordinary individual who finds the strength to persevere and endure 
                        in spite of overwhelming obstacles.
                        </p>
                    </div>
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
