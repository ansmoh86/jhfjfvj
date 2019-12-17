<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=shift_jis">
  <base href="./">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="keyword" content="">
  <title>ESTA VISA</title>
  <!-- Icons-->
  <link href="node_modules/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
  <link href="node_modules/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
  <link href="node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="node_modules/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
  
  <!-- Main styles for this application-->
  <link href="css/style.css" rel="stylesheet">

  <link href="vendors/pace-progress/css/pace.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-formhelpers/2.3.0/css/bootstrap-formhelpers.min.css" />

<style>
.badge-primary, .btn-primary{
background-color: #40abfb;
}
.sidebar {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    padding: 0;
    color: #fff;
    background: #131e4e;
}
.sidebar .nav-link.active {
    color: #fff;
    background: #0f1c3d;
}
</style>
</head>
<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
  <header class="app-header navbar">
    <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">
      <img class="navbar-brand-full" src="img/esta.png" width="80%" height="auto" alt="ESTA">
      <img class="navbar-brand-minimized" src="img/esta.png" width="30" height="30" alt="ESTA">
    </a>
    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
      <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="nav navbar-nav d-md-down-none">
      <li class="nav-item px-3">
        <a class="nav-link" href="#">Dashboard</a>
      </li>
      <li class="nav-item px-3">
        <a class="nav-link" href="#">Applications</a>
      </li>
    </ul>
    <ul class="nav navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <!--<div class="dropdown-header text-center">
            <strong>Account</strong>
          </div>-->
          <!--<a class="dropdown-item" href="profile.php">
            <i class="fa fa-user"></i> Profile</a>-->
              <a class="dropdown-item" href="logout.php">
                <i class="fa fa-lock"></i> Logout</a>
              </div>
            </li>
          </ul>

        </header>
        <div class="app-body">
          <div class="sidebar">
            <nav class="sidebar-nav">
              <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link" href="index.php">
                    <i class="nav-icon icon-speedometer"></i> Dashboard
                  </a>
                </li>
                <li class="nav-title">Applications</li>
                <li class="nav-item">
                  <a class="nav-link" href="applications.php">
                    <i class="nav-icon icon-plus"></i> View</a>
                  </li>

                
                    
                    
                    
                        <li class="nav-item">
                          <a class="nav-link nav-link-danger" href="logout.php" target="_top">
                            <i class="nav-icon icon-account-logout"></i> Log
                            <strong>Out!</strong>
                          </a>
                        </li>
                      </ul>
                    </nav>
                    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
                  </div>
                  <main class="main">
                   <!-- Breadcrumb-->
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">Home</li>
                      <li class="breadcrumb-item active">Dashboard</li>
                      <!-- Breadcrumb Menu-->
                      <li class="breadcrumb-menu d-md-down-none">
                        <div class="btn-group" role="group" aria-label="Button group">
                          <a class="btn" href="./">
                            <i class="icon-graph"></i> Dashboard</a>
                            </div>
                          </li>
                        </ol>