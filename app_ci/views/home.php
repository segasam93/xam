<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
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
            body{
                background: url('<?php echo base_url()?>asset/images/bg.jpg');
                background-size: cover;
            }
        </style>
    </head>
    <body>
<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>Sega University Exam Portal</h1>
  <p>Progress with Knowledge!</p> 
</div>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>    
    </ul>
  </div>  
</nav>


<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
      <h2>About Me</h2>
      <h5>Photo of me:</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
      <h3>Some Links</h3>
      <p>Lorem ipsum dolor sit ame.</p>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="#">Active</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
      <h2>TITLE HEADING</h2>
      <h5>Title description, Dec 7, 2017</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
      <br>
      <h2>TITLE HEADING</h2>
      <h5>Title description, Sep 2, 2017</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
  </div>
</div>


<div class="jumbotron text-center" style="margin-bottom:0">
  <p>Footer</p>
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

