<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
  { 
header('location:../admin/login.php');
}
else{
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
        <script src="assets/js/modernizr.min.js"></script>

</head>
<body id="page-top">
<?php include('topheader.php');?>

    <a class="menu-toggle rounded" href="#">
        <i class="fa fa-bars"></i>
    </a>
   

    <?php include('phpfile/header.php');?>
   
      
 

    <!-- Header -->
    <header class="masthead d-flex">
        <div class="container text-center my-auto">
            <h1 class="mb-1">Mancity Vs Haaland</h1>
            <h3 class="mb-5">
                <em>Coming Soon</em>
            </h3>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="BlackWidow/BlackWidow.html">Watch Highlights
                Now</a>
        </div>
        <div class="overlay"></div>
    </header>



    <!-- top rated movies section start -->
    <section id="TopRatedMovies">
        <div class="Container">
            <h2> Sports</h2>
            <div class="row Movies">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="row">
                        <div class="col-6"><a href=""><img
                            src="Imagess/volley.jpg"></a></div>
                
                            <div class="col-6"><a href="football.php" onclick="openPage()"><img
                                src="Imagess/football.jpg"></a></div>
                               
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="row">
                        <div class="col-6"><a href=""><img
                            src="Imagess/cricket.jpg"></a></div>
                            <div class="col-6"><a href=""><img
                                src="Imagess/cycle.jpg"></a></div>
                             
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="row">
                        <div class="col-6"><a href=""><img
                            src="Imagess/basket.jpg"></a></div>
                            <div class="col-6"><a href=""><img
                                src="Imagess/box.jpg"></a></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="row">
                        <div class="col-6"><a href=""><img
                            src="Imagess/swim.jpg"></a></div>
                            <div class="col-6"><a href=""><img
                                src="Imagess/Archery.jpg"></a></div>
                    </div>
                </div>
               <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="row">
                        <div class="col-6"><a href=""><img
                            src="Imagess/minton.jpg"></a></div>
                            <div class="col-6"><a href=""><img
                                src="Imagess/mara.jpg"></a></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="row">
                        <div class="col-6"><a href=""><img
                            src="Imagess/polo.jpg"></a></div>
                            <div class="col-6"><a href=""><img
                                src="Imagess/diving.jpg"></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="TopRatedMovies">
        <div class="Container">
            <h2> Channels</h2>
            <div class="row Movies">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="row">
                       <div class="col-6"><a href="skysport.php" onclick="openPage()"><img
                            src="Imagess/skysport.jpg"></a></div>
                
                            <div class="col-6"><a href="tensport.php" onclick="openPage()"><img
                                src="Imagess/ten spo.png"></a></div>
                               
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="row">
                        <div class="col-6"><a href="skysport24.php" onclick="openPage()"><img
                            src="Imagess/24.png"></a></div>
                            <div class="col-6"><a href="digi.php" onclick="openPage()"><img
                                src="Imagess/diggi.jpg"></a></div>
                             
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="row">
                        <div class="col-6"><a href="sportplus.php" onclick="openPage()"><img
                            src="Imagess/plus.png"></a></div>
                            <div class="col-6"><a href="nova.php" onclick="openPage()"><img
                                src="Imagess/novass.png"></a></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="row">
                        <div class="col-6"><a href="fox.php" onclick="openPage()"><img
                            src="Imagess/fox.png"></a></div>
                            <div class="col-6"><a href="bein.php" onclick="openPage()"><img
                            src="Imagess/bein.png"></a></div>
                            
                    </div>
                </div>
              
                
            </div>
        </div>
    </section>
    <!-- top rated movies section end -->


  


 


    <!-- footer section start -->
    <footer id="footer">
        <i class="social-icon fa fa-facebook"></i>
        <i class="social-icon fa fa-twitter"></i>
        <i class="social-icon fa fa-instagram"></i>
        <i class="social-icon fa fa-envelope"></i>
        <i class="social-icon fa fa-pinterest"></i>
        <i class="social-icon fa fa-youtube"></i>
        <p>© Copyright 2022 Olympics</p>
    </footer>
    <!-- footer section end -->




    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="main.js"></script>

  
    
</body>
</html>
<?php } ?>