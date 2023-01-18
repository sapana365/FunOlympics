<div class="col-md-4">

<!-- Search Widget -->
<div class="card mb-4">
  <h5 class="card-header">Search</h5>
  <div class="card-body">
         <form name="search" action="search.php" method="post">
    <div class="input-group">
 
<input type="text" name="searchtitle" class="form-control" placeholder="Search for..." required>
      <span class="input-group-btn">
        <button class="btn btn-secondary" type="submit">Go!</button>
      </span>
    </form>
    </div>
  </div>
</div>

<!-- Categories Widget -->
<div class="card my-4">
  <h5 class="card-header">Sports</h5>
  <div class="card-body">
    <div class="row">
      <div class="col-lg-6">
        <ul class="list-unstyled mb-0">
<?php $query=mysqli_query($con,"select Id,SportName from tblsport");
while($row=mysqli_fetch_array($query))
{
?>

          <li>
            <a href="sports.php?catid=<?php echo htmlentities($row['Id'])?>"><?php echo htmlentities($row['SportName']);?></a>
          </li>
<?php } ?>
        </ul>
      </div>

    </div>
  </div>
</div>

<!-- Side Widget -->
<div class="card my-4">
  <h5 class="card-header">Recent Videos</h5>
  <div class="card-body">
            <ul class="mb-0">
<?php
$query=mysqli_query($con,"select tblvideo.id as vid,tblvideo.videotitle as videotitle from tblvideo left join tblsport on tblsport.Id=tblvideo.SportId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblvideo.SubCategoryId limit 8");
while ($row=mysqli_fetch_array($query)) {

?>

<li>
            <a href="video-details.php?nid=<?php echo htmlentities($row['vid'])?>"><?php echo htmlentities($row['videotitle']);?></a>
          </li>
  <?php } ?>
</ul>
  </div>
</div>

</div>
