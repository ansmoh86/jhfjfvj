<link rel="stylesheet" href="css.css">
<link type="text/css" rel="stylesheet" href="style.css"/>    
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script> 
<style>
h1,h2,h3,h4,h5,h6 {font-family: "Oswald"}
body {font-family: "Open Sans"}
</style>
<?php require "header.php"; 
include "config.php";

$sql1 = "SELECT * FROM application WHERE applicationstatus='completed'";
$srun1 = mysqli_query($conn,$sql1);
$count1 = mysqli_num_rows($srun1);

$sql2 = "SELECT * FROM application WHERE applicationstatus='pending'";
$srun2 = mysqli_query($conn,$sql2);
$count2 = mysqli_num_rows($srun2);

$sql3 = "SELECT * FROM application WHERE paymentstatus='pending'";
$srun3 = mysqli_query($conn,$sql3);
$count3 = mysqli_num_rows($srun3);

$sql4 = "SELECT * FROM application WHERE paymentstatus='completed'";
$srun4 = mysqli_query($conn,$sql4);
$count4 = mysqli_num_rows($srun4);
?>
<div class="container-fluid">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-sm-6 col-lg-4">
        <a href="view.php" style="text-decoration:none;">
        <div class="card text-white bg-primary">
          <div class="card-body pb-0">
            
            <div class="text-value"><?php echo $count1;?></div>
            <h6>Completed Applications</h6>
          </div>
          
        </div>
        </a>
      </div>
      <!-- /.col-->

      <div class="col-sm-6 col-lg-4">
        <a href="companies.php" style="text-decoration:none;">
        <div class="card text-white bg-danger">
          <div class="card-body pb-0">
            
            <div class="text-value"><?php echo $count2;?></div>
            <h6>Pending Applications</h6>
          </div>
          
        </div>
        </a>
      </div>
      <!-- /.col-->
      <div class="col-sm-6 col-lg-4">
        <a href="employees.php" style="text-decoration:none;">
        <div class="card text-white bg-info">
          <div class="card-body pb-0">
            
            <div class="text-value"><?php echo $count3;?></div>
            <h6>Pending Payments</h6>
          </div>
          
        </div>
        </a>
      </div>
      <!-- /.col-->

      
    </div>

    <!-- /.card-->
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">Overview</div>
          <div class="card-body">
            
<div class="w3-content" style="max-width:1600px">
 
 
</div>

            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- /.row-->
    </div>
  </div>
  <?php require "footer.php"?>