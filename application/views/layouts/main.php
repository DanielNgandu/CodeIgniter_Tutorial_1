<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <title>CI Tutorial 2020</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container">

<div class = "col-lg-12">
<?php
//  $this->load->view($admin_view); ?>
</div>
<div class = "col-lg-12">
<br>
<?php
 $this->load->view($main_view); ?>
</div>
<br>
<div class="jumbotron text-center" style="margin-bottom:10">
  <p>Footer</p>
</div>
</div>
</body>
</html>
