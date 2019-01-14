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
    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            if(isset($_POST['send'])){
                $fn_val = $_POST['fn'];
                $ln_val = $_POST['ln'];
                $email_val = $_POST['email'];
                $title_val = $_POST['title'];
                $message_val = $_POST['message'];

                include_once "PHPMailer_5.2.0/class.phpmailer.php";
                include_once "PHPMailer_5.2.0/class.smtp.php";

                $to = array('holgadokevin@gmail.com');

                $mail = new PHPMailer();

                $mail->IsSMTP();
                $mail->Host = "genserv-ph.com";
                $mail->SMTPAuth = true;
                $mail->Username = "kevin@genserv-ph.com";
                $mail->Password = "password@1";
                $mail->Port = 587;
                $mail->From = "kevin@genserv-ph.com";
                $mail->FromName = "Your Website";
                //$mail->AddAddress ("holgadokevin@gmail.com");
                foreach($to as $to_add){
                    $mail->AddAddress($to_add);// name is optional
                }
                $mail->IsHTML(True);
                $mail->Subject = $title_val;
                $mail->Body = "I'm " . $fn_val . " " . $ln_val . " , and my email address is "
                    . $email_val . " my message are " . $message_val;

                if(!$mail->Send()){
                    //echo "Message could not be sent!";
                    //echo "Mailer Error: " . $mail->ErrorInfo;
                    //exit;
                    ?>
                    <script>
                        $(document).ready(function(){
                            $("#myModal").modal("show");
                        });
                    </script>
                        <!-- The Modal -->
                        <div class="modal fade" id="myModal">
                            <div class="modal-dialog">
                            <div class="modal-content">
                            
                                <!-- Modal Header -->
                                <div class="modal-header">
                                <h4 class="modal-title">Message did not sent!</h4>
                                <button type="button" class="close" data-dismiss="modal">×</button>
                                </div>
                                
                                <!-- Modal body -->
                                <div class="modal-body">
                                Sorry. Please try again later.
                                </div>
                                
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                                
                            </div>
                            </div>
                        </div>
                    <?php
                }
                else{
                    //echo "Mail has been sent successfully!"; 
                    ?> 
                    <script>
                        $(document).ready(function(){
                            $("#myModal2").modal("show");
                        });
                    </script>
                        <!-- The Modal -->
                        <div class="modal fade" id="myModal2">
                            <div class="modal-dialog">
                            <div class="modal-content">
                            
                                <!-- Modal Header -->
                                <div class="modal-header">
                                <h4 class="modal-title">Message Sent!</h4>
                                <button type="button" class="close" data-dismiss="modal">×</button>
                                </div>
                                
                                <!-- Modal body -->
                                <div class="modal-body">
                                Thank you for trusting. You will get message soon and i'll do my best to help you.
                                </div>
                                
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                                
                            </div>
                            </div>
                        </div>  
                <?php
                }
            }
        }
    ?>
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
                        <a class="nav-link " href="about.php">About</a>
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
                        <a class="nav-link active" href="contact.php">Contact Me</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav><!--END OF NAVIGATION-->

    <!--START OF THE CONTENT-->
    <div class="container-fluid">
        <h4 id="title" class="p-5 text-center display-4 bg-info"><b style="border-bottom: 7px solid white">Let Us Connect</b></h4>
    </div>       
    <div class='container-fluid'>
        <div class="row">
            <div class="col-sm-6 mb-4">
                <div class="card p-5">
                    <h2 class="card-title text-center text-primary"><b>I'm happy to help you.</b></h2>
                    <p class="card-text lead text-center">What you say is important!
                        I know i'm not the best but i will always do my best to served you.
                        <br>
                        
                    </p>
                </div>
            </div>
            <div class="col-sm-6 mb-4">
                <div class="card p-5">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <input type="text" class="form-control mb-4" name="fn" placeholder="First Name" required>
                        <input type="text" class="form-control mb-4" name="ln" placeholder="Last Name" required>        
                        <input type="email" class="form-control mb-4" name="email" placeholder="Email Address" required>
                        <input type="text" class="form-control mb-4" name="title" placeholder="Message Title" required>        
                        <textarea class="form-control mb-4" name="message" id="" cols="30" rows="10" placeholder="Enter Your Message Here...." required></textarea>        
                        <input type="submit" class="btn btn-primary" name="send" value="Submit">
                    </form>
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
