<?php 
session_start();
include('includes/config.php');
//Genrating CSRF Token


?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FunOlympics | News Details</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

  </head>

  <body>
  <?php include('topheader.php');?>
  <?php include('phpfile/header.php');?>
 

    <!-- Navigation -->
   

    <!-- Page Content -->
    <div class="container">


     
      <div class="row" style="margin-top: 4%">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <!-- Blog Post -->
<?php
$pid=intval($_GET['nid']);
 $query=mysqli_query($con,"select tblvideo.videotitle as videotitle,tblvideo.postvideo,tblsport.SportName as sport,tblsport.Id as cid,tblsubcategory.Subcategory as subcategory,tblvideo.videodescription as videodetails,tblvideo.PostingDate as postingdate,tblvideo.PostUrl as url from tblvideo left join tblsport on tblsport.Id=tblvideo.SportId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblsport.SubCategoryId where tblvideo.id='$pid'");
while ($row=mysqli_fetch_array($query)) {
?>

          <div class="card mb-4">
      
            <div class="card-body">
              <h2 class="card-title"><?php echo htmlentities($row['videotitle']);?></h2>
              <p><b>Category : </b> <a href="sports.php?catid=<?php echo htmlentities($row['cid'])?>"><?php echo htmlentities($row['sport']);?></a> |
                <b>Sub Category : </b><?php echo htmlentities($row['subcategory']);?> <b> Posted on </b><?php echo htmlentities($row['postingdate']);?></p>
                <hr />

 <img class="img-fluid rounded" src="admin/postvideo/<?php echo htmlentities($row['postvideo']);?>" alt="<?php echo htmlentities($row['postvideo']);?>">
  
              <p class="card-text"><?php 
$pt=$row['videodetails'];
              echo  (substr($pt,0));?></p>
             
            </div>
            <div class="card-footer text-muted">
             
           
            </div>
          </div>
<?php } ?>
       

      

     

        </div>

        <!-- Sidebar Widgets Column -->
      <?php include('includes/sidebar.php');?>
      </div>
      <!-- /.row -->
<!---Comment Section --->

 
      <?php include('includes/footer.php');?>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="main.js"></script>

  </body>

</html>
