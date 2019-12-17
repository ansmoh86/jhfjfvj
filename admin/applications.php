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
$res = "";
if(isset($_POST['appstat'])){
    $appstatus = $_POST['appstatus'];
    $apid = $_POST['apid'];
    $sql = "UPDATE `application` SET applicationstatus='$appstatus' WHERE id='$apid'";
    $query = mysqli_query($conn,$sql);
    if($query){
        $res = "<div class='alert alert-success' role='alert'>Application Status Updated Successfully!</div>";
        
        $appid = $apid;
        
        if($appstatus=="Completed"){
        $sqlq = "SELECT `name`,`givenname`,`passportnumber`,`contact_email` FROM `application` WHERE id='$appid'";
			$queryrun = mysqli_query($conn,$sqlq);
			$qrow = mysqli_fetch_assoc($queryrun);
			
			
			$passportnumber = $qrow['passportnumber'];
			$fname = $qrow['givenname'];
			$lname = $qrow['name'];
			$remail = $qrow['contact_email'];
        
        include "mail.php";
        }
        
        
    }
}

if(isset($_POST['paystat'])){
    $apppayment = $_POST['apppayment'];
    $apid = $_POST['apid'];
    $sql = "UPDATE `application` SET paymentstatus='$apppayment' WHERE id='$apid'";
    $query = mysqli_query($conn,$sql);
    if($query){
        $res = "<div class='alert alert-success' role='alert'>Payment Status Updated Successfully!</div>";
    }
}



$sql1 = "SELECT * FROM application";
$srun1 = mysqli_query($conn,$sql1);
$count1 = mysqli_num_rows($srun1);


?>
<div class="container-fluid">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-sm-12 col-lg-12">
        <a href="completedapplications.php" style="text-decoration:none;">
        <div class="card text-white bg-primary">
          <div class="card-body pb-0">
            
            <div class="text-value"><?php echo $count1;?></div>
            <h6>Total Applications</h6>
          </div>
          
        </div>
        </a>
      </div>
    </div>

    <!-- /.card-->
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">Applications</div>
          <div class="card-body">
         <?php echo $res;?>   
            <table class="table table-responsive">
 
                    <tr>
                        <th>ID#</th>
                        <th>Given Name</th>
                        <th>Family Name</th>
                        <th>Application Status</th>
                        <th>Payment Status</th>
                        <th>Email</th>
                        <th>Change Application Status</th>
                        <th>Change Payment Status</th>
                        <th>View Submission</th>
                    </tr>
   

                    <?php
                    $data = "SELECT * FROM application ORDER BY id DESC";
                    $dq = mysqli_query($conn,$data);
                    while($row = mysqli_fetch_assoc($dq)){
                        $aid = $row['id'];
                        echo "<tr>
                        <td>".$row['id']."</td>
                        <td>".$row['givenname']."</td>
                        <td>".$row['name']."</td>
                        <td>".$row['applicationstatus']."</td>
                        <td>".$row['paymentstatus']."</td>
                        <td>".$row['contact_email']."</td>
                        <td><form method='post' action=''><input type='hidden' name='apid' value='$aid'><select name='appstatus' class='form-control'><option disabled selected>-Change-</option><option>Completed</option><option>Pending</option></select><input type='submit' name='appstat' class='btn btn-primary btn-block'></form></td>
                        <td><form method='post' action=''><input type='hidden' name='apid' value='$aid'><select name='apppayment' class='form-control'><option disabled selected>-Change-</option><option>Completed</option><option>Pending</option></select><input type='submit' name='paystat' class='btn btn-primary btn-block'></form></td>
                        <td><a href='viewsubmission.php?id=".$row['id']."' class='btn btn-primary'>View Submission</a></td>
                        </tr>";
                    }
                    ?>
                    

                
            </table>

            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- /.row-->
    </div>
  </div>
  <?php require "footer.php"?>