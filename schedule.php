<!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Schedule</title>
    <link rel="stylesheet" href="Result.css">

    </head>
    <body>
    <?php include('phpfile/header.php');?>
    <form action="medal.php">
    <button class="button-64" role="button"><span class="text">View Medals</span></button></a>
  </form>
  <form action="schedule.php">
    <button class="button-64" role="button" ><span class="text">View schedule</span></button> </a>
  </form>


    <div class="main-div">
      <h1> Schedule of the matches </h1>
      <div class="center-div">
        <div class="table-responsive">
          <table>
            <thead>
              <tr>
               
                <th>Sport Name</th>
                <th>Date</th>
                <th>Local Time</th>
                <th>Location</th>
                <th>Country</th>

              </tr>
            </thead>
            <tbody>
                <?php 
                  session_start();
                  include('includes/config.php');
                  $selectquery ="select * from schedule";
                  $query = mysqli_query($con,$selectquery);
                  $nums = mysqli_num_rows($query);
                  while($res = mysqli_fetch_array($query))
                  {
                    ?>
                    <tr>
                    <td><?php echo $res['SportName']; ?></td>

                    <td><?php echo $res['S_Date']; ?></td>
                    <td><?php echo $res['Local_Time']; ?></td>
                    <td><?php echo $res['Location']; ?></td>
                    <td><?php echo $res['Country']; ?></td>

                    



                    <tr>
                 <?php } ?>

                 

  </tbody>
          </table>
      </div>
      </div>
    </div>
    


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="main.js"></script>

  
    <?php include('phpfile/footer.php');?>
    </body>
    </html>
