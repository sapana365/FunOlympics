<?php
include('includes/config.php');

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FunOlympics | Contact us</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link rel="stylesheet" href="contactstyle.css">

  </head>

  <body>
  <?php include('topheader2.php');?>
 

    <!-- Navigation -->
    
    <a class="menu-toggle rounded" href="#">
        <i class="fa fa-bars"></i>
    </a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a class="js-scroll-trigger" href="#page-top">Fun Olympics</a>
            </li>
            <li class="sidebar-nav-item">
               
                <a class="js-scroll-trigger" href="Uindex.php" onclick="openPage()">Home</a>

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

        </ul>
    </nav>
    <!-- Page Content -->
    <div class="container">

<?php 
$pagetype='contactus';
$query=mysqli_query($con,"select PageTitle,Description from tblpages where PageName='$pagetype'");
while($row=mysqli_fetch_array($query))
{

?>
      <h1 class="mt-4 mb-3"><?php echo htmlentities($row['PageTitle'])?>
  
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="Uindex.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Contact</li>
      </ol>

      <!-- Intro Content -->
      <div class="row">

        <div class="col-lg-12">

          <p><?php echo $row['Description'];?></p>
        </div>
      </div>
      <!-- /.row -->
<?php } ?>
    
    </div>
    <!-- /.container -->

    <!-- Footer --><div>






    </div>
 <?php include('phpfile/footer.php');?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="main.js"></script>

  </body>

</html>