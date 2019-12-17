<?php
   include("config.php");
   session_start();
   $error = "";
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      $myusername = mysqli_real_escape_string($conn,$_POST['username']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 

      $mypassword = md5($mypassword);

      $sql = "SELECT `id` FROM `admin` WHERE `user` = '$myusername' and `pass` = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $id = $row['id'];
      
      $count = mysqli_num_rows($result);
		
      if($count == 1) {
         $_SESSION['lu'] = $myusername;
         $_SESSION['lid'] = $id;
         
         header("location: index.php");
      }else {
         $error = "<div class='alert alert-danger'><strong>Incorrect!</strong> Login Credentials.</div>".mysqli_error($conn);
      }
   }
?>
<!DOCTYPE html>
<html lang="en">
  <head><meta http-equiv="Content-Type" content="text/html; charset=shift_jis">
    <base href="./">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>ESTA Portal - Login</title>
    <!-- Icons-->
    <link href="node_modules/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="node_modules/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="node_modules/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="css/style.css" rel="stylesheet">
    <link href="vendors/pace-progress/css/pace.min.css" rel="stylesheet">
  </head>
  <body style="background-image:linear-gradient(#17174f,#17174f);" class="app flex-row align-items-center">
    <div class="container">
      <div class="row justify-content-center">
      <center><img class="logologin" src="img/esta.png" width="50%" style="padding:20px;" height="auto"></center>
        <div class="col-md-8">
<?php echo $error;?>
          <div class="card-group">
            <div class="card text-white bg-primary">
              <div class="card-body">
                <h1>Login</h1>
                <p class="text-muted">Sign In to your account</p>
<form action="" method="post">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="icon-user"></i>
                    </span>
                  </div>
                  <input class="form-control" type="text" name="username" placeholder="Username" required>
                </div>
                <div class="input-group mb-4">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="icon-lock"></i>
                    </span>
                  </div>
                  <input class="form-control" type="password" name="password" placeholder="Password" required>
                </div>
                <div class="row">
                  <div class="col-6">
                    <button class="btn btn-lg btn-primary active mt-3" type="submit">Login</button>
                  </div>
                  <div class="col-6 text-right">
                    <!--<button class="btn btn-link px-0" type="button">Forgot password?</button>-->
                  </div>
                </div>
</form>
              </div>
            </div>
            <!--<div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
              <div class="card-body text-center">
                <div>
                  <h2>Sign up</h2>
                  <p>Register at CertAssist and manage all your tenants and COI's under one roof.</p>
                  <a href="register.php"><button class="btn btn-primary active mt-3" type="button">Register Now!</button></a>
                </div>
              </div>
            </div>-->
          </div>
        </div>
      </div>
    </div>

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/pace-progress/pace.min.js"></script>
    <script src="node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
    <script src="node_modules/@coreui/coreui/dist/js/coreui.min.js"></script>
  </body>
</html>