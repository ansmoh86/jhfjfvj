<?php
/*
 Template Name: Review
 */

get_header(); 
?>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<style>
label {
    color: #024c8b;
    font-size: 16px;
    font-weight: 400;
}
h3 {
    color: #024c8b;
    font-family: 'Lato';
    margin: 0 0 15px;
    font-size: 24px;
    font-weight: bold;
}
p {
    color: #666;
    font-size: 14px;
    line-height: 17px;
    margin-bottom: 30px;
    margin-top: 20px;
}
.btnsub{
    width:auto;
    margin: 5px;
}
hr {
    margin-top: 2rem;
    margin-bottom: 2rem;
}
.container{
    background-color:#f2eff9;
    padding:30px;
    margin-top:20px;
    margin-bottom:20px;
}


.switch {
  position: absolute;
  /*top: 50%;*/
  right: 15%;
  width: 150px;
  height: 50px;
  text-align: center;
  margin: -30px 0 0 -75px;
  background: #4cd964;
  -webkit-transition: all 0.2s ease;
  -moz-transition: all 0.2s ease;
  -o-transition: all 0.2s ease;
  -ms-transition: all 0.2s ease;
  transition: all 0.2s ease;
  border-radius: 25px;
}
.switch span {
  position: absolute;
  width: 20px;
  height: 4px;
  top: 50%;
  left: 50%;
  margin: -2px 0px 0px -4px;
  background: #fff;
  display: block;
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  -o-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
  transform: rotate(-45deg);
  -webkit-transition: all 0.2s ease;
  -moz-transition: all 0.2s ease;
  -o-transition: all 0.2s ease;
  -ms-transition: all 0.2s ease;
  transition: all 0.2s ease;
  border-radius: 2px;
}
.switch span:after {
  content: "";
  display: block;
  position: absolute;
  width: 4px;
  height: 12px;
  margin-top: -8px;
  background: #fff;
  -webkit-transition: all 0.2s ease;
  -moz-transition: all 0.2s ease;
  -o-transition: all 0.2s ease;
  -ms-transition: all 0.2s ease;
  transition: all 0.2s ease;
  border-radius: 2px;
}
input[type=radio] {
  display: none;
}
.switch label {
  cursor: pointer;
  color: #fff;/*rgba(0,0,0,0.2);*/
  width: 60px;
  line-height: 50px;
  -webkit-transition: all 0.2s ease;
  -moz-transition: all 0.2s ease;
  -o-transition: all 0.2s ease;
  -ms-transition: all 0.2s ease;
  transition: all 0.2s ease;
}
label[for=yes] {
  position: absolute;
  left: 0px;
  height: 20px;
}
label[for=no] {
  position: absolute;
  right: 0px;
}
#no:checked ~ .switch {
  background: #ff3b30;
}
#no:checked ~ .switch span {
  background: #fff;
  margin-left: -8px;
}
#no:checked ~ .switch span:after {
  background: #fff;
  height: 20px;
  margin-top: -8px;
  margin-left: 8px;
}
#yes:checked ~ .switch label[for=yes] {
  color: #fff;
}
#no:checked ~ .switch label[for=no] {
  color: #fff;
}

.unknown{
    color: #fff !important;
    background-color: #0f4c8b;
    float: left;
    margin-left: -100px;
}
</style>
<?php
include "formassets/config.php";

$name = $_POST['name1'];
if($name){
$givenname = $_POST['givenname'];
$gender = $_POST['gender1'];
$alias = $_POST['alias'];
$aliasfamilyname = $_POST['aliasfamilyname'];
$aliasgivenname = $_POST['aliasgivenname'];
$dobday = $_POST['dobday'];
$dobmonth = $_POST['dobmonth'];
$dobyear = $_POST['dobyear'];
$cob = $_POST['cob'];
$countryob = $_POST['countryob'];
$passportnumber = $_POST['passportnumber'];
$countryofcitizenship = $_POST['countryofcitizenship'];
$confirmpassportnumber = $_POST['confirmpassportnumber'];
$issuingcountry = $_POST['issuingcountry'];
$passportissuanceday = $_POST['passportissuanceday'];
$passportissuancemonth = $_POST['passportissuancemonth'];
$passportissuanceyear = $_POST['passportissuanceyear'];
$passportexpirationday = $_POST['passportexpirationday'];
$passportexpirationmonth = $_POST['passportexpirationmonth'];
$passportexpirationyear = $_POST['passportexpirationyear'];
$othercountry = $_POST['othercountry'];
$issued_country = $_POST['issued_country'];
$document_type = $_POST['document_type'];
$document_number = $_POST['document_number'];
$document_expiration_year = $_POST['document_expiration_year'];
$othercountrycitizen = $_POST['othercountrycitizen'];
$othernationality = $_POST['othernationality'];
$acquirecitizenship = $_POST['acquirecitizenship'];
$acquirecitizenshipother = $_POST['acquirecitizenshipother'];
$wasothercountrycitizen = $_POST['wasothercountrycitizen'];
$othernationalpast = $_POST['othernationalpast'];
$ge_member_cbp = $_POST['ge_member_cbp'];
$membershipnumber = $_POST['membershipnumber'];
$parentlastname1 = $_POST['parentlastname1'];
$parentfirstname1 = $_POST['parentfirstname1'];
$parentlastname2 = $_POST['parentlastname2'];
$parentfirstname2 = $_POST['parentfirstname2'];
$addressline1 = $_POST['addressline1'];
$addressline2 = $_POST['addressline2'];
$apartmentnumber = $_POST['apartmentnumber'];
$contact_city = $_POST['contact_city'];
$contact_state = $_POST['contact_state'];
$contact_country = $_POST['contact_country'];
$contact_telephone = $_POST['contact_telephone'];
$contact_phone_code = $_POST['contact_phone_code'];
$contact_phone_number = $_POST['contact_phone_number'];
$contact_email = $_POST['contact_email'];
$contact_email_confirm = $_POST['contact_email_confirm'];
$employment_employer = $_POST['employment_employer'];
$jobtitle = $_POST['jobtitle'];
$employername = $_POST['employername'];
$employeraddress1 = $_POST['employeraddress1'];
$employeraddress2 = $_POST['employeraddress2'];
$employercity = $_POST['employercity'];
$employerstate = $_POST['employerstate'];
$employercountry = $_POST['employercountry'];
$employer_phone_code = $_POST['employer_phone_code'];
$employer_phone_number = $_POST['employer_phone_number'];
$us_point_transit = $_POST['us_point_transit'];
$usname = $_POST['usname'];
$usaddress1 = $_POST['usaddress1'];
$usaddress2 = $_POST['usaddress2'];
$usaptnumber = $_POST['usaptnumber'];
$uscity = $_POST['uscity'];
$usstates = $_POST['usstates'];
$usnumber = $_POST['usnumber'];
$us_point_transit_sameaddress = $_POST['us_point_transit_sameaddress'];
$wusaddress1 = $_POST['wusaddress1'];
$wusaddress2 = $_POST['wusaddress2'];
$wusaptnumber = $_POST['wusaptnumber'];
$wuscity = $_POST['wuscity'];
$wusstates = $_POST['wusstates'];
$emergency_family_name = $_POST['emergency_family_name'];
$emergency_given_name = $_POST['emergency_given_name'];
$emergency_email_address = $_POST['emergency_email_address'];
$emcontact_phone_code = $_POST['emcontact_phone_code'];
$emcontact_phone_number = $_POST['emcontact_phone_number'];
$mentaldisorder = $_POST['mentaldisorder'];
$convictedforcrime = $_POST['convictedforcrime'];
$violatedlaw = $_POST['violatedlaw'];
$terroristactivity = $_POST['terroristactivity'];
$commitfraud = $_POST['commitfraud'];
$seekingemployment = $_POST['seekingemployment'];
$deniedvisa = $_POST['deniedvisa'];
$stayedlonger = $_POST['stayedlonger'];
$traveledto = $_POST['traveledto'];
$signature = $_POST['signature'];
$applicationid = $_POST['applicationid'];
$paymentstatus = "Pending";
$applicationstatus = "Draft";

$sql = "INSERT INTO `application` (id, paymentstatus, applicationstatus, name, givenname, gender, alias, aliasfamilyname, aliasgivenname, dobday, dobmonth, dobyear, cob, countryob, passportnumber, countryofcitizenship, confirmpassportnumber, issuingcountry, passportissuanceday, passportissuancemonth, passportissuanceyear, passportexpirationday, passportexpirationmonth, passportexpirationyear, othercountry, issued_country, document_type, document_number, document_expiration_year, othercountrycitizen, othernationality, acquirecitizenship, acquirecitizenshipother, wasothercountrycitizen, othernationalpast, ge_member_cbp, membershipnumber, parentlastname1, parentfirstname1, parentlastname2, parentfirstname2, addressline1, addressline2, apartmentnumber, contact_city, contact_state, contact_country, contact_telephone, contact_phone_code, contact_phone_number, contact_email, contact_email_confirm, employment_employer, jobtitle, employername, employeraddress1, employeraddress2, employercity, employerstate, employercountry, employer_phone_code, employer_phone_number, us_point_transit, usname, usaddress1, usaddress2, usaptnumber, uscity, usstates, usnumber, us_point_transit_sameaddress, wusaddress1, wusaddress2, wusaptnumber, wuscity, wusstates, emergency_family_name, emergency_given_name, emergency_email_address, emcontact_phone_code, emcontact_phone_number, mentaldisorder, convictedforcrime, violatedlaw, terroristactivity, commitfraud, seekingemployment, deniedvisa, stayedlonger, traveledto, signature) VALUES ('$applicationid', '$paymentstatus', '$applicationstatus','$name', '$givenname', '$gender', '$alias', '$aliasfamilyname', '$aliasgivenname', '$dobday', '$dobmonth', '$dobyear', '$cob', '$countryob', '$passportnumber', '$countryofcitizenship', '$confirmpassportnumber', '$issuingcountry', '$passportissuanceday', '$passportissuancemonth', '$passportissuanceyear', '$passportexpirationday', '$passportexpirationmonth', '$passportexpirationyear', '$othercountry', '$issued_country', '$document_type', '$document_number', '$document_expiration_year', '$othercountrycitizen', '$othernationality', '$acquirecitizenship', '$acquirecitizenshipother', '$wasothercountrycitizen', '$othernationalpast', '$ge_member_cbp', '$membershipnumber', '$parentlastname1', '$parentfirstname1', '$parentlastname2', '$parentfirstname2', '$addressline1', '$addressline2', '$apartmentnumber', '$contact_city', '$contact_state', '$contact_country', '$contact_telephone', '$contact_phone_code', '$contact_phone_number', '$contact_email', '$contact_email_confirm', '$employment_employer', '$jobtitle', '$employername', '$employeraddress1', '$employeraddress2', '$employercity', '$employerstate', '$employercountry', '$employer_phone_code', '$employer_phone_number', '$us_point_transit', '$usname', '$usaddress1', '$usaddress2', '$usaptnumber', '$uscity', '$usstates', '$usnumber', '$us_point_transit_sameaddress', '$wusaddress1', '$wusaddress2', '$wusaptnumber', '$wuscity', '$wusstates', '$emergency_family_name', '$emergency_given_name', '$emergency_email_address', '$emcontact_phone_code', '$emcontact_phone_number', '$mentaldisorder', '$convictedforcrime', '$violatedlaw', '$terroristactivity', '$commitfraud', '$seekingemployment', '$deniedvisa', '$stayedlonger', '$traveledto', '$signature') ON DUPLICATE KEY UPDATE id = id+1;";

$query = mysqli_query($conn,$sql);
if($query){
    $last_id = $applicationid;
}else{
    echo "Error!".mysqli_error($conn);
}
}else{
    
}

?>

<div class="container">
<div class="col-sm-2">
</div>
<div class="col-sm-12">
    <h3>APPLICATION ID# - <?php echo $last_id;?></h3><p>Save the Application ID for future reference.</p>
    <h3>REVIEW APPLICANT / PASSPORT INFORMATION</h3>
    <p>Refer to your passport and enter all information in the same format.</p>
<form method="post" action="/payment">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="name">Family Name* : </label>
      <?php echo $name;?>
    </div>
    <div class="form-group col-md-6">
      <label for="givenname">First (Given) Name* : </label>
      <?php echo $givenname;?>
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6" >
    <label for="gender">Gender* : </label>
    <?php echo $gender;?>
  </div>
  </div>
  
  <hr>
  
  <div class="form-row">
  <div class="form-group">
    <label for="applicant_aliases">Are you known by any other names or aliases?* </label>
    
    <?php echo $alias;?>
    
  </div>
  </div>
  
  <div class="aliasfields">
  <div class="form-row">
      <div class="form-group col-md-6">
          <label for="applicant_alias_family_name" class="control-label">Family Name* : </label>
          <?php echo $aliasfamilyname;?>
      </div>
      <div class="form-group col-md-6">
          <label for="applicant_alias_family_name" class="control-label">First (Given) Name* : </label>
          <?php echo $aliasgivenname;?>
      </div>
  </div>
  </div>
  
  <hr>
  
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="dob" >Date of Birth* : </label>
<?php echo $dobday;?> / <?php echo $dobmonth;?> / <?php echo $dobyear;?>
</div>
    <div class="form-group col-md-4">
    
    <label for="cob">City of Birth* : </label>
    <?php echo $cob;?>
    </div>

    <div class="form-group col-md-4">
      <label for="countryob">Country of Birth* : </label>
      <?php echo $countryob;?>
    </div>
    
  </div>

  <hr>
  
  <div class="form-row">
    <div class="form-group col-md-4">
        <label for="applicant_passport_number" class="control-label">Passport Number* : </label>
        <?php echo $passportnumber;?>
    </div>
    <div class="form-group col-md-4">
        <label for="applicant_country_of_citizenship" class="control-label">Country of Citizenship* : </label>
        <?php echo $countryofcitizenship;?>
    </div>
    <div class="form-group col-md-4">
        
    </div>
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-4">
        <label for="applicant_passport_number" class="control-label">Confirm Passport Number* : </label>
        <?php echo $confirmpassportnumber;?>
    </div>
    <div class="form-group col-md-4">
        <label for="applicant_country_of_citizenship" class="control-label">Issuing Country* : </label>
        <?php echo $issuingcountry;?>
    </div>
    <div class="form-group col-md-4">
        
    </div>
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-4">
        <label for="applicant_issuance_date_day" class="control-label">Passport Issuance Date* : </label>
        <?php echo $passportissuanceday;?> / <?php echo $passportissuancemonth;?> / <?php echo $passportissuanceyear;?>

    </div>
    <div class="form-group col-md-4">
        <label for="applicant_expiration_date_day" class="control-label">Passport Expiration Date* : </label>
        <?php echo $passportexpirationday;?> / <?php echo $passportexpirationmonth;?> / <?php echo $passportexpirationyear;?>

    </div>
    <div class="form-group col-md-4">
        
    </div>
  </div>
  
  <hr>
  
  <div class="form-row">
  <div class="form-group">
    <label for="applicant_aliases">Have you ever been issued a passport or national identity card for travel by any other country?* : </label>
    <?php echo $othercountry;?>  
  </div>
  </div>  
  <?php if($othercountry=="yes"){?>

      <div class="form-row">
          <div class="form-group col-md-6">
              <label for="applicant_issuing_country" class="control-label">Issuing Country* : </label>
              <?php echo $issued_country;?>
          </div>
          
          <div class="form-group col-md-6">
              <label for="applicant_document_type" class="control-label">Document Type* : </label>
              <?php echo $document_type;?>
          </div>
      </div>
      
      <div class="form-row">
          <div class="form-group col-md-6">
              <label for="applicant_document_number" class="control-label">Document Number* : </label>
              <?php echo $document_number;?>
          </div>
          <div class="form-group col-md-6">
              <label for="applicant_expiration_year" class="control-label">Expiration Year* : </label>
              <?php echo $document_expiration_year;?>
          </div>
      </div>
      

  <?php }?>
  
  
</div>
<div class="col-sm-2">
</div>
</div>

<div class="container">
<div class="col-sm-2">
    
</div>
<div class="col-sm-12">
    <h3>OTHER CITIZENSHIP/NATIONALITY</h3>
  <div class="form-row">
  <div class="form-group">
    <label for="other_citizenship_now_other_country" class="control-label">Are you now, a citizen or national of any other country?* : </label>
    <?php echo $othercountrycitizen;?>
  </div>
  </div>

<?php if($othercountrycitizen=="yes"){?>  
  <div class="othernational">
  <div class="form-row">
      <div class="form-group col-md-4">
          <label for="other_citizenship_nationality" class="control-label">Country of Citizenship / Nationality* : </label>
          <?php echo $othernationality;?>
      </div>
      <div class="form-group col-md-4">
          <label for="other_citizenship_how_acquire" class="control-label">How did you acquire citizenship* : </label>
          <?php echo $acquirecitizenship;?>
      </div>
      <div class="form-group col-md-4">
          <label for="other_citizenship_other" class="control-label">Other </label>
          <?php echo $acquirecitizenshipother;?>
      </div>
  </div>
  </div>
<?php }?>  
  
  <hr>

  <div class="form-row">
  <div class="form-group">
    <label for="other_citizenship_ever_other_country" class="control-label">Have you ever been a citizen or national of any other country?* : </label>
    <?php echo $wasothercountrycitizen;?>
  </div>
  </div>
  
  <?php if($wasothercountrycitizen=="yes"){?>
  <div class="othernationalpast">
      <div class="form-row">
          <div class="form-group col-md-4">
              <label for="other_citizenship_ever_nationality" class="control-label">Country of Citizenship / Nationality* : </label>
              <?php echo $othernationalpast;?>
          </div>
      </div>
  </div>
  <?php }?>
  
</div>
<div class="col-sm-2">
    
</div>
</div> 


<div class="container">
<div class="col-sm-2">
    
</div>
<div class="col-sm-12">
    <h3>GE Membership</h3>
  <div class="form-row">
  <div class="form-group">
    <label for="ge_member_cbp" class="control-label" style="margin-top:10px;">Are you a member of the CBP Global Entry Program?* : </label>
    <?php echo $ge_member_cbp;?>
  </div>
  </div>
  <?php if($ge_member_cbp=="yes"){?>
  <div class="form-row">
      <div class="form-group col-md-6">
          <label for="ge_passid" class="control-label">PASSID / Membership Number* : </label>
          <?php echo $membershipnumber;?>
      </div>
  </div>
  <?php }?>

  
</div>
<div class="col-sm-2">
    
</div>
</div>



<div class="container">
<div class="col-sm-2">
    
</div>
<div class="col-sm-12">
    <h3>PARENTS</h3>
  <div class="form-row">
  <div class="form-group col-md-5">
    <label for="parents_family_name_mother" class="control-label">Family Name* : </label>
    <?php echo $parentlastname1;?>
  </div>
  
  <div class="form-group col-md-5">
    <label for="parents.given_name_mother" class="control-label">First (Given) Name*  : 
    <?php echo $parentfirstname1;?> 
  </div>
  </div>

  <div class="form-row">
  <div class="form-group col-md-5">
    <label for="parents_family_name_mother" class="control-label">Family Name*  : </label>
    <?php echo $parentlastname2;?> 
  </div>
  
  <div class="form-group col-md-5">
    <label for="parents.given_name_mother" class="control-label">First (Given) Name*  : </label>
    <?php echo $parentfirstname2;?> 
  </div>
  </div>
  
</div>
<div class="col-sm-2">
    
</div>
</div>

<div class="container">
<div class="col-sm-2">
    
</div>
<div class="col-sm-12">
    <h3>YOUR CONTACT INFORMATION</h3>
    <p>Please enter your contact information below.</p>
  <div class="form-row">
  <div class="form-group col-md-4">
    <label for="addressline1" class="control-label">Address Line 1* : </label>
    <?php echo $addressline1;?>  
  </div>
  
  <div class="form-group col-md-4">
    <label for="addressline2" class="control-label">Address Line 2 : </label>
    <?php echo $addressline2;?>
  </div>

  <div class="form-group col-md-4">
    <label for="contact_apartment_number" class="control-label">Apartment Number : </label>
    <?php echo $apartmentnumber;?>
  </div>  
  </div>
  
  <div class="form-row">
      <div class="form-group col-md-4">
          <label for="contact_city" class="control-label">City* : 
          <?php echo $contact_city;?>
      </div>
      <div class="form-group col-md-4">
          <label for="contact_state" class="control-label">State/Province/Region* : </label>
          <?php echo $contact_state;?>
      </div>
      <div class="form-group col-md-4">
          <label for="contact_country" class="control-label">Country* : </label>
          <?php echo $contact_country;?>
      </div>
  </div>
  
  <div class="form-row">
      <div class="form-group col-md-4">
          <label for="contact_telephone_type" class="control-label">Telephone Type* : </label>
          <?php echo $contact_telephone;?>
      </div>
      
      <div class="form-group col-md-4">
          <label for="contact_phone_code" class="control-label">Country Code + Phone* : </label>
          <?php echo $contact_phone_code;?>-<?php echo $contact_phone_number;?>
      </div>
      
  </div>

  <div class="form-row">
      <div class="form-group col-md-6">
          <label for="contact_email" class="control-label">E-mail Address* : </label>
          <?php echo $contact_email;?>
      </div>
  </div>


  
</div>
<div class="col-sm-2">
    
</div>
</div>


<div class="container">
<div class="col-sm-2">
</div>    
<div class="col-sm-12">
    <h3>EMPLOYMENT INFORMATION</h3>
  <div class="form-row">
  <div class="form-group">
  <label for="employment_employer" class="control-label" style="margin-top:10px;">Do you have a current or previous employer?* : </label>
  <?php echo $employment_employer;?>
  </div>
  </div> 
  
<div class="form-row">
    <div class="form-group col-md-4">
        <label for="employment_job_title" class="control-label">Job Title : </label>
        <?php echo $jobtitle;?>
    </div>
    <div class="form-group col-md-4">
        <label for="employment_name" class="control-label col-md-12 col-sm-12 col-xs-12 no-padding">Employer Name : </label>
        <?php echo $employername;?>
    </div>
    <div class="form-group col-md-4">
        <label for="employment_address_line1" class="control-label col-md-12 col-sm-12 col-xs-12 no-padding">Address Line 1 : </label>
        <?php echo $employeraddress1;?>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-4">
        <label for="employment_address_line2" class="control-label">Address Line 2 : </label>
        <?php echo $employeraddress2;?>
    </div>
    <div class="form-group col-md-4">
        <label for="employment_city" class="control-label col-md-12 col-sm-12 col-xs-12 no-padding">City : </label>
        <?php echo $employercity;?>
    </div>
    <div class="form-group col-md-4">
        <label for="employment_state" class="control-label col-md-12 col-sm-12 col-xs-12 no-padding">State/Province/Region : </label>
        <?php echo $employerstate;?>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-4">
        <label for="employment_country" class="control-label col-md-12 col-sm-12 col-xs-12 no-padding">Country : </label>
        <?php echo $employercountry;?>
    </div>
    <div class="form-group col-md-4">
        <label for="employment_phone_code" class="control-label">Country Code + Phone : </label>
        <?php echo $employer_phone_code;?>-<?php echo $employer_phone_number;?>
    </div>
    <div class="form-group col-md-4">
        
    </div>
</div>
  
  
</div>
<div class="col-sm-2">
</div>    
</div>

<div class="container">
<div class="col-sm-2">
</div>
<div class="col-sm-12">
    <h3>TRAVEL INFORMATION</h3>
  <div class="form-row">
  <div class="form-group">
  <label for="us_point_transit" class="control-label">Is your travel to the US occurring in transit to another country? : </label>
  <?php echo $us_point_transit;?>
  </div>
  </div>
</div>
<div class="col-sm-2">
</div>
</div>



<div class="container">
<div class="col-sm-2">
</div>
<div class="col-sm-12">
    <h3>U.S. POINT OF CONTACT INFORMATION</h3>
  <div class="form-row">
  <div class="form-group col-md-4">
    <label for="us_point_name" class="control-label col-md-12 col-sm-12 col-xs-12 no-padding">Name : </label>
    <?php echo $usname;?>
  </div>
  <div class="form-group col-md-4">
    <label for="us_point_address_line1" class="control-label col-md-12 col-sm-12 col-xs-12 no-padding">Address Line 1 : </label>
    <?php echo $usaddress1;?>
  </div>
  <div class="form-group col-md-4">
    <label for="us_point_address_line2" class="control-label">Address Line 2 : </label>
    <?php echo $usaddress2;?>
  </div>
  </div>
  
  <div class="form-row">
  <div class="form-group col-md-4">
    <label for="us_point_apartment_number" class="control-label">Apartment Number : </label>
    <?php echo $usaptnumber;?>
  </div>
  <div class="form-group col-md-4">
    <label for="us_point_city" class="control-label col-md-12 col-sm-12 col-xs-12 no-padding">City : </label>
    <?php echo $uscity;?>
  </div>
  <div class="form-group col-md-4">
    <label for="us_point_state" class="control-label col-md-12 col-sm-12 col-xs-12 no-padding">State : </label>
    <?php echo $usstates;?>
  </div>
  </div>
  
  <div class="form-row">
  <div class="form-group col-md-4">
    <label for="us_point_phone_number" class="control-label col-md-12 col-sm-12 col-xs-12 no-padding">Phone Number : </label>
    <?php echo $usnumber;?>
  </div>
  <div class="form-group col-md-4">

  </div>
  <div class="form-group col-md-4">

  </div>
  </div>
</div>
<div class="col-sm-2">
</div>
</div>



<div class="container">
<div class="col-sm-2">
</div>
<div class="col-sm-12">
    <h3>ADDRESS WHILE IN THE U.S.</h3>
  <div class="form-row">
  <div class="form-group">
  <label for="us_point_transit_sameaddress" class="control-label col-md-12 col-sm-12 col-xs-12 no-padding">Use the same address as above? : </label>
  <?php echo $us_point_transit_sameaddress;?>
  </div>
  </div>
  
<div class="form-row">
    <div class="form-group col-md-4">
        <label for="while_in_us_address_line1" class="control-label">Address Line 1 : </label>
        <?php echo $wusaddress1;?>
    </div>
    <div class="form-group col-md-4">
        <label for="while_in_us_address_line2" class="control-label">Address Line 2 : </label>
        <?php echo $wusaddress2;?>
    </div>
    <div class="form-group col-md-4">
        <label for="while_in_us_apartment_number" class="control-label">Apartment Number : </label>
        <?php echo $wusaptnumber;?>
    </div>
</div> 

<div class="form-row">
    <div class="form-group col-md-4">
        <label for="while_in_us_city" class="control-label">City : </label>
        <?php echo $wuscity;?>
    </div>
    <div class="form-group col-md-4">
        <label for="while_in_us_state" class="control-label">State : </label>
        <?php echo $wusstates;?>
    </div>
    <div class="form-group col-md-4">
        
    </div>
</div> 
  
</div>
<div class="col-sm-2">
</div>
</div>



<div class="container">
<div class="col-sm-2">
</div>    
<div class="col-sm-12">
    <h3>EMERGENCY CONTACT INFORMATION IN OR OUT OF THE U.S.</h3>

<div class="form-row">
    <div class="form-group col-md-4">
        <label for="emergency_family_name" class="control-label col-md-12 col-sm-12 col-xs-12 no-padding">Family Name* : </label>
        <?php echo $emergency_family_name;?>
    </div>
    <div class="form-group col-md-4">
        <label for="emergency_given_name" class="control-label col-md-12 col-sm-12 col-xs-12 no-padding">First (Given) Name* : </label>
        <?php echo $emergency_given_name;?>
    </div>
    <div class="form-group col-md-4">
        <label for="emergency_email_address" class="control-label col-md-12 col-sm-12 col-xs-12 no-padding">E-mail Address* : </label>
        <?php echo $emergency_email_address;?>
    </div>
</div>   

<div class="form-row">
    <div class="form-group col-md-4">
        <label for="emergency_phone_code" class="control-label col-md-12 col-sm-12 col-xs-12 no-padding">Country Code + Phone* : </label>
        <?php echo $emcontact_phone_code;?>-<?php echo $emcontact_phone_number;?>
    </div>
</div>
    
</div>
<div class="col-sm-2">
</div>    
</div>



<div class="container">
<div class="col-sm-2">
    
</div>
<div class="col-sm-12">
    <h3>ELIGIBILITY QUESTIONS</h3>

<div class="form-row">
<div class="col-sm-10">
<p>1) Do you have a physical or mental disorder; or are you a drug abuser or addict; or do you currently have any of the following diseases (communicable diseases are specified pursuant to section 361(b) of the Public Health Service Act):</p>
<ul><li>Cholera</li><li>Diphtheria</li><li>Tuberculosis, infectious</li><li>Plague</li><li>Smallpox</li><li>Yellow Fever</li><li>Viral Hemorrhagic Fevers, including Ebola, Lassa, Marburg, Crimean-Congo</li><li>Severe acute respiratory illnesses capable of transmission to other persons and likely to cause mortality.</li></ul>
</div>
<div class="col-sm-2">
  <?php echo $mentaldisorder;?> 
</div> 
</div>

<hr>

<div class="form-row">
<div class="col-sm-10">
<p>2) Have you ever been arrested or convicted for a crime that resulted in serious damage to property, or serious harm to another person or government authority? </p></div>
<div class="col-sm-2">
<?php echo $convictedforcrime;?>
</div> 
</div>

<hr>

<div class="form-row">
<div class="col-sm-10">
<p>3) Have you ever violated any law related to possessing, using, or distributing illegal drugs?	</p></div>
<div class="col-sm-2">
<?php echo $violatedlaw;?>
</div> 
</div>


<hr>

<div class="form-row">
<div class="col-sm-10">
<p>4) Do you seek to engage in or have you ever engaged in terrorist activities, espionage, sabotage, or genocide?</p></div>
<div class="col-sm-2">
 <?php echo $terroristactivity;?>
</div> 
</div>

<hr>

<div class="form-row">
<div class="col-sm-10">
<p>5) Have you ever committed fraud or misrepresented yourself or others to obtain, or assist others to obtain, a visa or entry into the United States?</p></div>
<div class="col-sm-2">
 <?php echo $commitfraud;?>
</div> 
</div>

<hr>

<div class="form-row">
<div class="col-sm-10">
<p>6) Are you currently seeking employment in the United States or were you previously employed in the United States without prior permission from the U.S. government? </p></div>
<div class="col-sm-2">
 <?php echo $seekingemployment;?>
</div> 
</div>

<hr>

<div class="form-row">
<div class="col-sm-10">
<p>7) Have you ever been denied a U.S. visa you applied for with your current or previous passport, or have you ever been refused admission to the United States or withdrawn your application for admission at a U.S. port of entry?</p></div>
<div class="col-sm-2">
 <?php echo $deniedvisa;?>
</div> 
</div>

<hr>

<div class="form-row">
<div class="col-sm-10">
<p>8) Have you ever stayed in the United States longer than the admission period granted to you by the U.S. government?	</p></div>
<div class="col-sm-2">
 <?php echo $stayedlonger;?>
</div> 
</div>
<hr>

<div class="form-row">
<div class="col-sm-10">
<p><p>9) Have you traveled to, or been present in Iraq, Syria, Iran, Sudan, Libya, Somalia or Yemen on or after March 1, 2011?</p></div>
<div class="col-sm-2">
 <?php echo $traveledto;?>
</div> 
</div>







<div class="col-sm-2">
    
</div>
</div>

</div>

<div class="container">
<div class="col-sm-2">
</div>
<div class="col-sm-12">
    <h3>APPLICANT'S DECLARATION</h3>
<p>
I declare that the information I have provided in this application is truthful, complete and accurate to the best of my knowledge.
</p>
<p>
I understand that an approved travel authorization is NOT a visa. It does not meet the legal or regulatory requirements to serve in lieu of a United States visa when a visa is required under United States law. Individuals who possess a valid visa will still be able to travel to the United States on that visa for the purpose for which it was issued. Individuals traveling on valid visas are not required to apply for a travel authorization.
</p>
<p>
I have read and understood the terms of the <a href="https://travelassist.us.com/visa-waiver-program" target="_blank">Visa Waiver Program</a>. I understand that If my Electronic Travel Authorization is approved, this approval establishes that I am eligible to travel to the United States under the Visa Waiver Program but does not guarantee that I am admissible to the United States. Upon arrival in the United States, I will be inspected by a Customs and Border Protection officer at a port of entry who may determine that I am inadmissible under the Visa Waiver Program or for any reason under United States law.
</p>
<p>
I understand that attempting to obtain an Electronic System for Travel Authorization (ESTA) under the US Visa Waiver Program by the willful misrepresentation of a material fact, or fraud, is an offense under <a href="http://uscode.house.gov/view.xhtml?req=granuleid:USC-prelim-title8-section1187&amp;num=0&amp;edition=prelim" target="_blank">INA 217, 8 U.S.C. 1187</a> and the <a href="https://www.govinfo.gov/app/details/CFR-2019-title8-vol1/CFR-2019-title8-vol1-part217" target="_blank">CFR Title 8, Subchapter B, Part 217</a> and may result in the permanent refusal of a Travel Authorization, or adjudicated inadmissibility for entry into the USA as well as removal from the United States and its territories after entry has been granted based on such willful misrepresentations.
</p>
<?php echo $declaration;?>
<hr>

<h3>Third-Party Authorization</h3>
<p>I understand that I am applying via GovAssist, LLC; a third-party that is not affiliated with the United States’ government, that the third-party cannot guarantee application approval, that the third-Party service is offered to help expedite the process as experts and that I have the option to apply directly with the pertinent government websites. I also understand that my purchase includes a processing and service fee to GovAssist, which includes the USD $14.00 non-refundable government fee, required by the <a href="https://www.congress.gov/111/bills/hr2935/BILLS-111hr2935ih.xml" target="_blank">Travel Promotion Act of 2009</a> (Section 9 of the United States Capitol Police Administrative Technical Corrections Act of 2009, Pub. L. No. 111-145).</p>
<p>I confirm and authorize GovAssist LLC to assist me, by using their processing service in completing and reviewing my application. I understand and acknowledge that I have not been offered legal advice and that this company or its agents and affiliates have never claimed to be qualified to offer legal advice under any circumstance. I also confirm that I am submitting my application and signing it myself.
By obtaining services from the GovAssist website I have agreed to the following: <a href="https://apply-esta.us.com/terms-conditions" target="_blank">Terms &amp; Conditions</a> | <a href="https://apply-esta.us.com/refund-policy" target="_blank">Refund Policy</a> | <a href="https://apply-esta.us.com/privacy-policy" target="_blank">Privacy Policy</a> | <a href="https://apply-esta.us.com/disclaimer" target="_blank">Disclaimer</a></p>
<?php echo $authorization;?>
<hr>

<h3>APPLICANT'S SIGNATURE</h3>
<?php echo $signature;?>
<p>
To sign, please enter your full name exactly as it appears on your passport
</p>
<hr>
<input type="hidden" name="appid" value="<?php echo $last_id;?>">
<input type="hidden" name="fname" value="<?php echo $givenname;?>">
<input type="hidden" name="lname" value="<?php echo $name;?>">
<input type="hidden" name="email" value="<?php echo $contact_email;?>">
<center><button type="submit" class="btn btnsub btn-lg btn-danger" style="border-radius:20px;">PROCEED</button>
<a href="javascript:history.go(-1)" class="btn btnsub btn-lg btn-danger" style="border-radius:20px;text-decoration:none;color:white;">MODIFY/EDIT</a>
</center>
</div>
<div class="col-sm-2">
</div>
</div>
</form>

<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.10.1/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<?php
get_footer();
?>    