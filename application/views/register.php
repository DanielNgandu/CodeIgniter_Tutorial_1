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
        <li><a href="<?= site_url();?>user_controller/register"><span class="glyphicon glyphicon-log-in"></span> Register</a></li>
      <?php }?>
      </ul>
    </div>
  </div>
</nav>

<br>
<div class ="jumbotron text-center" style="margin-bottom:0">
<h1>Register New User</h1>
</div>
<?php 

$attributes = array(
    'id' => 'register_form',
    'class' => 'needs-validation'
);
// echo validation_errors();
if($this->session->flashdata('errors')):
echo $this->session->flashdata('errors');


endif;    
echo form_open('User_Controller/register',$attributes);?>

<div class="form-group">
    <?php 
    echo form_label('Username: ');
    $data_username = array(
'type' => 'text',
'class' => 'form-control',
'name' => 'username',
'id' => 'username',
'placeholder' => 'Please Enter Username'
);
echo form_input($data_username); ?>
  </div>

<div class="form-group">
    <?php 
    echo form_label('Email: ');
    $data_email = array(
'type' => 'email',
'class' => 'form-control',
'name' => 'email',
'id' => 'email',
'placeholder' => 'Please Enter Email'
);
echo form_input($data_email); ?>
  </div>

  <div class="form-group">
    <?php 
    echo form_label('FirstName: ');
    $data_fname = array(
'type' => 'text',
'class' => 'form-control',
'name' => 'fname',
'id' => 'fname',
'placeholder' => 'Please Enter First Name'
);
echo form_input($data_fname); ?>
  </div>


  <div class="form-group">
    <?php 
    echo form_label('LastName: ');
    $data_lname = array(
'type' => 'text',
'class' => 'form-control',
'name' => 'lname',
'id' => 'lname',
'placeholder' => 'Please Enter Last Name'
);
echo form_input($data_lname); ?>
  </div>


  <div class="form-group">
    <?php 
    echo form_label('Password: ');

    $data_password = array(
'type' => 'password',
'class' => 'form-control',
'name' => 'password',
'id' => 'password_id',
'placeholder' => 'Please Enter Password'
);
echo form_password($data_password); ?>
 </div>
 <div class="form-group">
    <?php 
    echo form_label('Password: ');

    $data_Cpassword = array(
'type' => 'password',
'class' => 'form-control',
'name' => 'confirm_password',
'id' => 'Cpassword_id',
'placeholder' => 'Please Confirm Password'
);
echo form_password($data_Cpassword); ?>
 </div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me
    </label>
  </div>
  <!-- //create reset button -->
  <?php
  $data_reset = array(
'type' => 'reset',
'class' => 'btn btn-warning',
'name' => 'reset',
'id' => 'reset',
'value' => 'Reset'
);

 echo form_reset($data_reset); ?>

<!-- //create submit button -->
<?php
  $data_submit = array(
    'type' => 'submit',
    'class' => 'btn btn-success',
    'name' => 'submit',
    'id' => 'submit',
    'value' => 'Register'
    );
echo form_submit($data_submit); 
 echo form_close();?>

