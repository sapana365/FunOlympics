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
    <link rel="stylesheet" href="Style.css">
</head>
<body id="page-top">

    <?php include('SUser/topheader2.php');?>

    <a class="menu-toggle rounded" href="#">
        <i class="fa fa-bars"></i>
    </a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a class="js-scroll-trigger" href="#page-top">Fun Olympics</a>
            </li>
            <li class="sidebar-nav-item">
               
                <a class="js-scroll-trigger" href="index.php" onclick="openPage()">Home</a>

            </li>
            <li class="sidebar-nav-item">

                <a class="js-scroll-trigger" href="FreeVideo.php" onclick="openPage()">Watch</a>

                
            </li>
            <li class="sidebar-nav-item">
                
                <a class="js-scroll-trigger" href="result.php" onclick="openPage()">Result</a>

            </li>
            <li class="sidebar-nav-item">
                <a class="js-scroll-trigger" href="news.php" onclick="openPage()">News</a>
            </li>
            <li class="sidebar-nav-item">
            
                <a class="js-scroll-trigger" href="about-us.php" onclick="openPage()">About</a>
                
            </li>
            <li class="sidebar-nav-item">
            
            <a class="js-scroll-trigger" href="contact.php" onclick="openPage()">Contact us</a>
            
        </li>
            <li class="sidebar-nav-item">
               
               <a class="js-scroll-trigger" href="admin/login.php" onclick="openPage()">Login</a>

              
               <a class="js-scroll-trigger" href="signup.php" onclick="openPage()">Register</a>

            </li>
        </ul>
    </nav>
   
      
 

    <!-- Header -->
    <header class="masthead d-flex">
        <div class="container text-center my-auto">
            <h1 class="mb-1">Mancity Vs Haaland</h1>
            
            
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="BlackWidow/BlackWidow.html" onclick="openPage()">Watch Highlights
                Now</a>
        </div>
        <div class="overlay"></div>
    </header>


    
    <!-- upcoming movies section end -->


    <!-- top rated movies section start -->
    <section id="TopRatedMovies">
        <div class="Container">
            <h2> Sports</h2>
            <div class="row Movies">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="row">
                        <div class="col-6"><a href=""><img
                            src="SUser/Imagess/volley.jpg"></a></div>
                
                            <div class="col-6"><a href="football.php" onclick="openPage()"><img
                                src="SUser/Imagess/football.jpg"></a></div>
                               
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="row">
                        <div class="col-6"><a href=""><img
                            src="SUser/Imagess/cricket.jpg"></a></div>
                            <div class="col-6"><a href=""><img
                                src="SUser/Imagess/cycle.jpg"></a></div>
                             
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="row">
                        <div class="col-6"><a href=""><img
                            src="SUser/Imagess/basket.jpg"></a></div>
                            <div class="col-6"><a href=""><img
                                src="SUser/Imagess/box.jpg"></a></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="row">
                        <div class="col-6"><a href=""><img
                            src="SUser/Imagess/swim.jpg"></a></div>
                            <div class="col-6"><a href=""><img
                                src="SUser/Imagess/Archery.jpg"></a></div>
                    </div>
                </div>
               <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="row">
                        <div class="col-6"><a href=""><img
                            src="SUser/Imagess/minton.jpg"></a></div>
                            <div class="col-6"><a href=""><img
                                src="SUser/Imagess/mara.jpg"></a></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="row">
                        <div class="col-6"><a href=""><img
                            src="SUser/Imagess/polo.jpg"></a></div>
                            <div class="col-6"><a href=""><img
                                src="SUser/Imagess/diving.jpg"></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
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