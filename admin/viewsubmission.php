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

$apid = $_GET['id'];

$res = "";
if(isset($_POST['appstat'])){
    $appstatus = $_POST['appstatus'];
    $apid = $_POST['apid'];
    $sql = "UPDATE `application` SET applicationstatus='$appstatus' WHERE id='$apid'";
    $query = mysqli_query($conn,$sql);
    if($query){
        $res = "<div class='alert alert-success' role='alert'>Application Status Updated Successfully!</div>";
        $apid = $_GET['id'];
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
        $apid = $_GET['id'];
    }
}



?>
<div class="container-fluid">
  <div class="animated fadeIn">

    <!-- /.card-->
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">Applications ID# <?php echo $apid;?></div>
          <div class="jumbotron">
              <div class="row">
              <div class="col-md-6">
                  <label>Application Status</label>
              <form method='post' action=''>
                  <input type='hidden' name='apid' value='<?php echo $apid;?>'>
                  <select name='appstatus' class='form-control'>
                      <option disabled selected>-Change-</option>
                      <option>Completed</option>
                      <option>Pending</option>
                  </select>
                  <input type='submit' name='appstat' class='btn btn-primary btn-block'>
              </form>
              </div>
              <div class="col-md-6">
                  <label>Payment Status</label>
              <form method='post' action=''>
                  <input type='hidden' name='apid' value='<?php echo $apid;?>'>
                  <select name='apppayment' class='form-control'>
                      <option disabled selected>-Change-</option>
                      <option>Completed</option>
                      <option>Pending</option>
                  </select>
                  <input type='submit' name='paystat' class='btn btn-primary btn-block'>
              </form>
              </div>
              </div>
          </div>  
          <div class="card-body">
         <?php echo $res;?>   
<?php            
            //get results from database
$result = mysqli_query($conn,"SELECT * FROM `application` WHERE id='$apid'");
$all_property = array();  //declare an array for saving property

//showing property
echo '<table class="table table-responsive">';

$row = mysqli_fetch_array($result);

echo '
<tr><th>ID#</th><td>' . $row['id'] . '</td></tr>
<tr><th>Submission Time</th><td>' . $row['timestamp'] . '</td></tr>
<tr><th>Payment Status</th><td>' . $row['paymentstatus'] . '</td></tr>
<tr><th>Application Status</th><td>' . $row['applicationstatus'] . '</td></tr>
<tr><th>Last Name</th><td>' . $row['name'] . '</td></tr>
<tr><th>Given Name</th><td>' . $row['givenname'] . '</td></tr>
<tr><th>Gender</th><td>' . $row['gender'] . '</td></tr>
<tr><th>Known by Alias</th><td>' . $row['alias'] . '</td></tr>
<tr><th>Family Name (Alias)</th><td>' . $row['aliasfamilyname'] . '</td></tr>
<tr><th>Last Name (Alias)</th><td>' . $row['aliasgivenname'] . '</td></tr>
<tr><th>D.O.B</th><td>' . $row['dobday'] . '/' . $row['dobmonth'] . '/' . $row['dobyear'] . '</td></tr>
<tr><th>Country of Birth</th><td>' . $row['cob'] . '</td></tr>
<tr><th>Passport Number</th><td>' . $row['passportnumber'] . '</td></tr>
<tr><th>Country of Citizenship</th><td>' . $row['countryofcitizenship'] . '</td></tr>
<tr><th>Issuing Country</th><td>' . $row['issuingcountry'] . '</td></tr>
<tr><th>Passport Issuance Date</th><td>' . $row['passportissuanceday'] . '/' . $row['passportissuancemonth'] . '/' . $row['passportissuanceyear'] . '</td></tr>
<tr><th>Passport Expiration Date</th><td>' . $row['passportexpirationday'] . '/' . $row['passportexpirationmonth'] . '/' . $row['passportexpirationyear'] . '</td></tr>
<tr><th>Issued Passport by Other Country</th><td>' . $row['othercountry'] . '</td></tr>
<tr><th>Country</th><td>' . $row['issued_country'] . '</td></tr>
<tr><th>Document Type</th><td>' . $row['document_type'] . '</td></tr>
<tr><th>Document Number</th><td>' . $row['document_number'] . '</td></tr>
<tr><th>Document Expiration Year</th><td>' . $row['document_expiration_year'] . '</td></tr>
<tr><th>Citizen of Other Country (Current)</th><td>' . $row['othercountrycitizen'] . '</td></tr>
<tr><th>Nationality</th><td>' . $row['othernationality'] . '</td></tr>
<tr><th>Acquired Citizenship</th><td>' . $row['acquirecitizenship'] . '</td></tr>
<tr><th>Other</th><td>' . $row['acquirecitizenshipother'] . '</td></tr>
<tr><th>Citizen of Other Country (Past)</th><td>' . $row['wasothercountrycitizen'] . '</td></tr>
<tr><th>Nationality (Past)</th><td>' . $row['othernationalpast'] . '</td></tr>
<tr><th>G.E Membership</th><td>' . $row['ge_member_cbp'] . '</td></tr>
<tr><th>Membership Number</th><td>' . $row['membershipnumber'] . '</td></tr>
<tr><th>Parent Last Name (1)</th><td>' . $row['parentlastname1'] . '</td></tr>
<tr><th>Parent First Name (1)</th><td>' . $row['parentfirstname1'] . '</td></tr>
<tr><th>Parent Last Name (2)</th><td>' . $row['parentlastname2'] . '</td></tr>
<tr><th>Parent First Name (2)</th><td>' . $row['parentfirstname2'] . '</td></tr>
<tr><th>Address Line 1</th><td>' . $row['addressline1'] . '</td></tr>
<tr><th>Address Line 2</th><td>' . $row['addressline1'] . '</td></tr>
<tr><th>Apartment Number</th><td>' . $row['apartmentnumber'] . '</td></tr>
<tr><th>City</th><td>' . $row['contact_city'] . '</td></tr>
<tr><th>State</th><td>' . $row['contact_state'] . '</td></tr>
<tr><th>Country</th><td>' . $row['contact_country'] . '</td></tr>
<tr><th>Telephone</th><td>' . $row['contact_telephone'] . '</td></tr>
<tr><th>Phone Number</th><td>' . $row['contact_phone_code'] . '-' . $row['contact_phone_number'] . '</td></tr>
<tr><th>Email</th><td>' . $row['contact_email'] . '</td></tr>
<tr><th>Employed</th><td>' . $row['employment_employer'] . '</td></tr>
<tr><th>Job Title</th><td>' . $row['jobtitle'] . '</td></tr>
<tr><th>Employer</th><td>' . $row['employername'] . '</td></tr>
<tr><th>Employer Address Line 1</th><td>' . $row['employeraddress1'] . '</td></tr>
<tr><th>Employer Address Line 2</th><td>' . $row['employeraddress2'] . '</td></tr>
<tr><th>Employer City</th><td>' . $row['employercity'] . '</td></tr>
<tr><th>Employer State</th><td>' . $row['employerstate'] . '</td></tr>
<tr><th>Employer Country</th><td>' . $row['employercountry'] . '</td></tr>
<tr><th>Employer Phone Number</th><td>' . $row['employer_phone_code'] . '-' . $row['employer_phone_number'] . '</td></tr>
<tr><th>Transit</th><td>' . $row['us_point_transit'] . '</td></tr>
<tr><th>US POINT OF CONTACT</th></tr>
<tr><th>Name</th><td>' . $row['usname'] . '</td></tr>
<tr><th>Address Line 1</th><td>' . $row['usaddress1'] . '</td></tr>
<tr><th>Address Line 2</th><td>' . $row['usaddress2'] . '</td></tr>
<tr><th>Apartment Number</th><td>' . $row['usaptnumber'] . '</td></tr>
<tr><th>City</th><td>' . $row['uscity'] . '</td></tr>
<tr><th>State</th><td>' . $row['usstates'] . '</td></tr>
<tr><th>Phone Number</th><td>' . $row['usnumber'] . '</td></tr>
<tr><th>ADDRESS IN US</th></tr>
<tr><th>Address Line 1</th><td>' . $row['wusaddress1'] . '</td></tr>
<tr><th>Address Line 2</th><td>' . $row['wusaddress1'] . '</td></tr>
<tr><th>Apartment Number</th><td>' . $row['wusaptnumber'] . '</td></tr>
<tr><th>City</th><td>' . $row['wuscity'] . '</td></tr>
<tr><th>State</th><td>' . $row['wusstates'] . '</td></tr>
<tr><th>EMERGENCY CONTACT DETAILS</th></tr>
<tr><th>Family Name</th><td>' . $row['emergency_family_name'] . '</td></tr>
<tr><th>Given Name</th><td>' . $row['emergency_given_name'] . '</td></tr>
<tr><th>Email</th><td>' . $row['emergency_email_address'] . '</td></tr>
<tr><th>Phone Number</th><td>' . $row['emcontact_phone_code'] . '-' . $row['emcontact_phone_number'] . '</td></tr>
<tr><th>ELIGIBILITY QUESTIONS</th></tr>
<tr><th>Do you have a physical or mental disorder</th><td>' . $row['mentaldisorder'] . '</td></tr>
<tr><th>Have you ever been arrested or convicted for a crime that resulted in serious damage to property, or serious harm to another person or government authority?</th><td>' . $row['convictedforcrime'] . '</td></tr>
<tr><th>Have you ever violated any law related to possessing, using, or distributing illegal drugs?</th><td>' . $row['violatedlaw'] . '</td></tr>
<tr><th>Do you seek to engage in or have you ever engaged in terrorist activities, espionage, sabotage, or genocide?</th><td>' . $row['terroristactivity'] . '</td></tr>
<tr><th>Have you ever committed fraud or misrepresented yourself or others to obtain, or assist others to obtain, a visa or entry into the United States?</th><td>' . $row['commitfraud'] . '</td></tr>
<tr><th>Are you currently seeking employment in the United States or were you previously employed in the United States without prior permission from the U.S. government?</th><td>' . $row['seekingemployment'] . '</td></tr>
<tr><th>Have you ever been denied a U.S. visa you applied for with your current or previous passport, or have you ever been refused admission to the United States or withdrawn your application for admission at a U.S. port of entry?</th><td>' . $row['deniedvisa'] . '</td></tr>
<tr><th>Have you ever stayed in the United States longer than the admission period granted to you by the U.S. government?</th><td>' . $row['stayedlonger'] . '</td></tr>
<tr><th>Have you traveled to, or been present in Iraq, Syria, Iran, Sudan, Libya, Somalia or Yemen on or after March 1, 2011?</th><td>' . $row['traveledto'] . '</td></tr>
<tr><th>Signature</th><td>' . $row['signature'] . '</td></tr>
';
echo "</table>";
?>

            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- /.row-->
    </div>
  </div>
  <?php require "footer.php"?>