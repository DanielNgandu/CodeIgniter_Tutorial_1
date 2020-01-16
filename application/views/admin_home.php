<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <title>User View | CI Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Portfolio</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Gallery</a></li>
        <li><a href="#">Contact</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
      <?php if($this->session->userdata('logged_in')){
?>
        <li><a href="<?= site_url();?>user_controller/logout"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      <?php }else{?>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      <?php }?>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron">
  <div class="container text-center">
    <h1>Hello,   <?php if($this->session->userdata('email')){
      echo $this->session->userdata('email');
    }
?></h1>      
  </div>
</div>
  
<br><br>
<div  class="container text-center">
<p class = 'bg-success'>
<?php 
if($this->session->flashdata('login_success')):
  echo $this->session->flashdata('login_success');
  
  
  endif; 
    ?>

</p>
<p class = 'bg-danger'>
<?php 
if($this->session->flashdata('login_failed')):
  echo $this->session->flashdata('login_failed');
  
  
  endif; 

    ?>

</p>
<a href="<?= site_url();?>project_controller/"><button class = 'btn btn-lg btn-info'>View Projects</button></a>
</div>
<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>
