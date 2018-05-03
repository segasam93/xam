<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Home</title>
        <link href="<?php echo base_url() ?>asset/lib/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="<?php echo base_url() ?>asset/lib/select2/select2.css"/>
        <link rel="stylesheet" href="<?php echo base_url() ?>asset/lib/select2/select2-bootstrap.css"/>
        <link rel="stylesheet" href="<?php echo base_url() ?>asset/lib/alertify/alertify.min.css"/>
        <link rel="stylesheet" href="<?php echo base_url() ?>asset/lib/alertify/bootstrap.min.css"/>
        <link rel="stylesheet" href="<?php echo base_url() ?>asset/lib/jquery_ui/jquery-ui.min.css"/>
        <link rel="stylesheet" href="<?php echo base_url() ?>asset/lib/jquery_ui/jquery-ui.theme.min.css"/>
        <link href="<?php echo base_url() ?>asset/lib/css/style.css" rel="stylesheet" type="text/css"/>
        <script src="<?php echo base_url() ?>asset/lib/js/jquery-3.3.1.min.js"></script>
        <script src="<?php echo base_url() ?>asset/lib/jquery_ui/jquery-ui.min.js"></script>
        <style>
          
        </style>
    </head>
    <body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="#">XAM Portal</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
   <ul class="navbar-nav">
    <li class="nav-item active"><a class="nav-link" href="#">Home</a></li>
    <li class="nav-item"><a class="nav-link" href="#">About</a></li>
    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
    <li class="nav-item"><a class="nav-link disabled" href="#">Coming soon</a></li>
	<li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Help</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Link 1</a>
        <a class="dropdown-item" href="#">Link 2</a>
        <a class="dropdown-item" href="#">Link 3</a>
      </div>
	  </div>
    </li>
  </ul>
  
  </nav>
 <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
       <img src="<?php echo base_url()?>asset/images/slider1.jpg" alt="Los Angeles">
	   <div class="carousel-caption">
       <h3>Los Angeles</h3>
       <p>We had such a great time in LA!</p>
       </div>
    </div>
    <div class="carousel-item">
        <img src="<?php echo base_url()?>asset/images/slider2.jpg" alt="Chicago">
	    <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
        </div>
    </div>
    <div class="carousel-item">
        <img src="<?php echo base_url()?>asset/images/slider3.jpg" alt="New York">
	     <div class="carousel-caption">
         <h3>Los Angeles</h3>
         <p>We had such a great time in LA!</p>
         </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

  </div>
   
   <div class="container">
	
	<div class="row">
	<div class="col-sm-8 nopad">
	
		
  <div id="about" class="container-fluid bg-white home-main">
  <div class="row content-left">
    <div class="col-sm-8 pad15">
   
    <div class="home-content">
	<h1> Sega Technical University </h1>
	<p>Welcome to Sega University Exam portal.</p>
	</div>
      <p class="main-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <button class="btn btn-default btn-lg home-btn pull-right">Enquiry</button>
    </div>
    <div class="col-sm-4">
	
      <span class="content-logo"><img src="<?php echo base_url(); ?>/asset/images/logo.png"></span>
    </div>
  </div>
  </div>

  <div class="container-fluid bg-grey">
  <div class="row content-left">
    <div class="col-sm-4 font-icon-big">
      <i class="fa fa-globe"></i>
    </div>
    <div class="col-sm-8 pad15">
      <center><h2>Instructions</h2><center>
      <p class="main-content"><strong>Notice:</strong> Our vision Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
  </div>
  </div>
	
	</div>
	<div class="col-sm-4 home-sidebar">
	
	<div class="login-form">
	
	<form>
    <div class="form-group">
	<label for="regno">Register Number
	<input type="text" class="form-control" id="regno" name="regno">
	</label>
	</div>
	</form>
	</div>
	
	
	
	</div>
	</div>
	
	</div>
	<div class="jumbotron text-center" style="margin-bottom:0" >
	
	<span>  Sega University 2018 all rights reserved </span>
	
    </div>

	 <script>
        $(document).ready(function (){
            document.cookie = "login = false";
            $("#frm_login").submit(function (e){
                e.preventDefault();
                var url = $(this).attr('action');
                var method = $(this).attr('method');
                var data = $(this).serialize();
                $.ajax({
                   url:url,
                   type:method,
                   data:data
                }).done(function(data){
                   if(data =='false')
                    {
                        $("#response").slideDown('fast');
                        $('#frm_login')[0].reset();
                        setTimeout(function (){
                            $("#response").slideUp('fast');
                        },3000);
                    }
                    else if(data =='true')
                    {
                    document.cookie = "login = true";
                    window.location.href='<?php echo base_url() ?>admin/';
                    throw new Error('go');
                    } 
                });
            });
        });
        </script>

<script src="<?php echo base_url() ?>asset/lib/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url() ?>asset/lib/alertify/alertify.min.js"/>

<script>
    $(document).ready(function (){
        
    });
</script>
    </body>
</html>

