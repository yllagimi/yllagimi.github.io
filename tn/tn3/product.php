<?php
require 'pserver.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>TeleNovela - Adverts</title>
<!-- Bootstrap core CSS-->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom fonts for this template-->
<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<!-- Custom styles for this template-->
<link href="css/sb-admin.css" rel="stylesheet">
</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
<a class="navbar-brand" href="index.php">Home</a>
<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarResponsive">
<ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
<a class="nav-link" href="index.php">
<i class="fa fa-fw fa-dashboard"></i>
<span class="nav-link-text" >Dashboard</span>
</a>
</li>
<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
<a class="nav-link" href="charts.html">
<i class="fa fa-check-square"></i>
<span class="nav-link-text">New Advert</span>
</a>
</li>
<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
<a class="nav-link" href="register.php">
<i class="fa fas fa-user"></i>
<span class="nav-link-text">Register Users</span>
</a>
</li>
</ul>
<ul class="navbar-nav sidenav-toggler">
<li class="nav-item">
<a class="nav-link text-center" id="sidenavToggler">
<i class="fa fa-fw fa-angle-left"></i>
</a>
</li>
</ul>
<ul class="navbar-nav ml-auto">
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="fa fa-fw fa-envelope"></i>
<span class="d-lg-none">Messages
<span class="badge badge-pill badge-primary">12 New</span>
</span>
<span class="indicator text-primary d-none d-lg-block">
<i class="fa fa-fw fa-circle"></i>
</span>
</a>
<div class="dropdown-menu" aria-labelledby="messagesDropdown">
<h6 class="dropdown-header">New Messages:</h6>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="#">
<strong>David Miller</strong>
<span class="small float-right text-muted">11:21 AM</span>
<div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="#">
<strong>Jane Smith</strong>
<span class="small float-right text-muted">11:21 AM</span>
<div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="#">
<strong>John Doe</strong>
<span class="small float-right text-muted">11:21 AM</span>
<div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item small" href="#">View all messages</a>
</div>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="fa fa-fw fa-bell"></i>
<span class="d-lg-none">Alerts
<span class="badge badge-pill badge-warning">6 New</span>
</span>
<span class="indicator text-warning d-none d-lg-block">
<i class="fa fa-fw fa-circle"></i>
</span>
</a>
<div class="dropdown-menu" aria-labelledby="alertsDropdown">
<h6 class="dropdown-header">New Alerts:</h6>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="#">
<span class="text-success">
<strong>
<i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
</span>
<span class="small float-right text-muted">11:21 AM</span>
<div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="#">
<span class="text-danger">
<strong>
<i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
</span>
<span class="small float-right text-muted">11:21 AM</span>
<div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="#">
<span class="text-success">
<strong>
<i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
</span>
<span class="small float-right text-muted">11:21 AM</span>
<div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item small" href="#">View all alerts</a>
</div>
</li>
<li class="nav-item">
<form class="form-inline my-2 my-lg-0 mr-lg-2">
<div class="input-group">
<input class="form-control" type="text" placeholder="Search for...">
<span class="input-group-append">
<button class="btn btn-primary" type="button">
<i class="fa fa-search"></i>
</button>
</span>
</div>
</form>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="modal" data-target="#exampleModal">
<i class="fa fa-fw fa-sign-out"></i>Logout</a>
</li>
</ul>
</div>
</nav>
<div class="content-wrapper">
<div class="container-fluid">
<!-- Breadcrumbs-->
<ol class="breadcrumb">
<li class="breadcrumb-item">
<a href="index.html">Dashboard</a>
</li>
<li class="breadcrumb-item active">Product Page</li>
</ol>
<div class="row">
<div class="col-12">
    <h1> <font color="white">New Advert </font></h1>
</div>
<div class="col-md-8">
<form method="POST" action="product.php"  enctype="multipart/form-data" >
<div class="form-group">
    <label><font color="#f9ecd6">Product Name</font></label>
<input type="text" class="form-control" name="pname" >
</div>
<div class="form-group">
    <label><font color="#f9ecd6">Product Price</font></label>
<input type="text" class="form-control"  name="price" >
</div>
<div class="form-group">
    <label><font color="#f9ecd6">Product Catgory</font></label>
<input type="text" class="form-control" name="pcat" >
</div>
<div class="form-group">
    <label><font color="#f9ecd6">Product Details</font></label>
<textarea class="form-control" name="pdetails" ></textarea>
</div>
    
<div class="form-group">   
<h2> <font color="white">Describe Audience</font></h2>
    <p> <font color="white"> Think of audience characteristics best suited for this advert.</font></p>

    <label> <font color="#f9ecd6">Audience Gender:</font></label> 
<select name="aud_gender">
<option value="Male">Male</option>
<option value="Female">Female</option>
<option value="Any">Any Gender</option>
</select><br>
    </div>
<div class="form-group"> 
    <label> <font color="#f9ecd6"> Audience Age Range:</font></label><br>
    <p> <font color="white"> Start <input type="number" name="audagestrt"> </font>
    <font color="white"> End <input type="number" name="audageend">   </font></p>
<!--
<select name="aud_age">
<option value="12-16">12-16</option>
<option value="17-18">17-18</option>
<option value="19-22">19-22</option>
<option value="24-29">24-29</option>
<option value="30-39">30-39</option>
<option value="40-49">40-49</option>
<option value="50-59">50-59</option>
<option value="60+">60+</option>
<option value="12-60+">All Ages</option>
</select>
-->
    </div>
 <div class="form-group">    
     <label> <font color="#f9ecd6">  Audience Mood Target </font></label><br>
     <input type="checkbox" name="moodneut" value="Neutral"><font color="#f9ecd6">Neutral </font>
     <input type="checkbox"  name="moodhappy" value="Happy"><font color="#f9ecd6">Happy </font>
     <input type="checkbox" name="moodsad" value="Sad"><font color="#f9ecd6">Sad </font>
     <input type="checkbox" name="moodangry" value="Anger"><font color="#f9ecd6">Angry </font>
     <input type="checkbox"  name="moodafraid" value="Afraid"><font color="#f9ecd6">Afraid </font>
        <input type="checkbox"  name="moodsur" value="Surprise"><font color="#f9ecd6">Surprise </font>
</div>
    <div class="form-group">    
<h2> <font color="white">Advert Weight</font></h2>
         <p> <font color="white"> Relative to adverts targeting similar customers, select priority score for advert between 0-10, with 5 being average priority.</font></p>
    <input type="number" name="cweight"  > <font color="#f9ecd6"></font><br>

</div>

    <div class="form-group">    
<h2> <font color="white">Categorize Advert</font></h2>
    <input type="checkbox" name="hlth" value="Health and Wellness"> <font color="#f9ecd6">Health and Wellness</font><br>
<input type="checkbox" name="food" value="Restaurants and Food"> <font color="#f9ecd6">Restaurants and Food</font><br>
<input type="checkbox" name="bty" value="Beauty and Pharmaceuticals"> <font color="#f9ecd6">Beauty and Pharmaceuticals </font><br>
<input type="checkbox" name="sports" value="Sports"> <font color="#f9ecd6">Sports</font> <br>
<input type="checkbox" name="music" value="Music and Entertainment" > <font color="#f9ecd6">Music and Entertainment </font><br>
<input type="checkbox" name="civic" value="Local and Civic Issues" > <font color="#f9ecd6">Local and Civic Issues </font><br>
</div>
    <div class="form-group">    

<h2> <font color="white">Advert Keywords </font></h2>

<input type="text" class="form-control" placeholder="keyword 1" type ="text" name="clipkwd1"> <br>
<input type="text" class="form-control" placeholder="keyword 2" type ="text" name="clipkwd2"> <br>
<input type="text" class="form-control" placeholder="keyword 3" type ="text" name="clipkwd3"> <br>
<textarea type="text" class="form-control" id="text" cols="40" rows="4" name="clipdesc"
placeholder="Say something about your advert..."></textarea>
</div>
    <div class="form-group">    
<h2> <font color="white">Advert Display Location </font></h2>
      <p> <font color="white"> Specify location for advert to be shown. Also, specify the advert <strong>start</strong> and <strong>end </strong>date and time.</font></p>    

    <label> <font color="#f9ecd6"> Type of Advert:</font></label>
<select name="cliptype">
<option value="poster">Poster</option>
<option value="short_v">Short Video (Under 2 minutes)</option>
<option value="long_v">Long Video (Over 2 minutes)</option>
<option value="other">Other</option>
</select><br>
        </div>
        <div class="form-group"> 
                <label> <font color="#f9ecd6"> Advert Display Location:</font></label>
<select name="cliploc1">
<option value="mallplaza1">MallPlaza, Las Condes</option>
<option value="UAI_Ed_A">UAI Edificio A</option>
<option value="UAI_Ed_B">UAI Edificio B</option>
<option value="m_bella_artes">Metro - Bella Artes</option>
<option value="m_armas">Metro - Plaza de Armas</option>
</select>
            </div>
            <div class="form-group">    

<label> <font color="#f9ecd6">Advert Start Date:</font></label>
<input type="date" placeholder="Advert Start Date:(mmddyyyy)" size="40" name="tstartdate"><br>
<label> <font color="#f9ecd6">Advert End Date:</font></label>
<input placeholder="Advert End Date:(mmddyyyy)" type="date" size="40" name="tenddate"> <br><br>
<label> <font color="#f9ecd6"> Hour of Day Display Preferences (Specify Start/End Times (hour increments)) </font></label><br>
<font color="White">Group 1: Display Time Start </font><input type="number" name="g1hrstart" placeholder="04">
<font color="White">End </font><input type="number" name="g1hrend" placeholder="11"><br>
<font color="White">Group 2: Display Time Start  </font><input type="number" name="g2hrstart" placeholder="13">
<font color="White">End </font><input type="number" name="g2hrend" placeholder="17"> <br>
<font color="White">Group 3: Display Time Start  </font><input type="number" name="g3hrstart" placeholder="21">
<font color="White">End </font><input type="number" name="g3hrend" placeholder="24">
                
          
                </div>
            <div class="form-group">    

<label> <font color="#f9ecd6"> Day Display Preferences (Select all that apply) </font></label><br>
<input type="checkbox" name="clipmon" value=2><font color="white">Monday</font>
<input type="checkbox"  name="cliptue" value=3><font color="white">Tuesday</font>
<input type="checkbox" name="clipwed" value=4><font color="white">Wednesday</font>
<input type="checkbox" name="clipthu" value=5><font color="white">Thursday</font>
    <input type="checkbox"  name="clipfri" value=6><font color="white">Friday</font>
    <input type="checkbox" name="clipsat"  value=7><font color="white">Saturday</font>
        <input type="checkbox" name="clipsun"  value=1><font color="white">Sunday</font>
                </div>
            <div class="form-group">    
                <input type="file" name="fileToUpload" id="fileToUpload">
            </div>
  
        
    
<button type="submit" class="btn btn-primary" name="reg_p">Submit</button>
</form>
    <br><br><br><br><br><br>
</div>
</div>
</div>
<!-- /.container-fluid-->
<!-- /.content-wrapper-->
<footer class="sticky-footer">
<div class="container">
<div class="text-center">
<small>Copyright © TeleNovela 2018</small>
</div>
</div>
</footer>
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fa fa-angle-up"></i>
</a>
<!-- Logout Modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
<button class="close" type="button" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
<div class="modal-footer">
<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
<a class="btn btn-primary" href="login.php">Logout</a>
</div>
</div>
</div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Custom scripts for all pages-->
<script src="js/sb-admin.min.js"></script>
</div>
</body>
</html>

