
<br>
<div class ="jumbotron text-center" style="margin-bottom:0">
<h1>Login</h1>
</div>
<?php 

$attributes = array(
    'id' => 'login_form',
    'class' => 'needs-validation'
);

if():


endif;    
echo form_open('Admin_Controller/login',$attributes);?>

<div class="form-group">
    <?php 
    echo form_label('Email: ');
    $data_password = array(
'type' => 'email',
'class' => 'form-control',
'name' => 'email',
'id' => 'email',
'placeholder' => 'Please Enter Email'
);
echo form_password($data_password); ?>
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
    'value' => 'Login'
    );
echo form_submit($data_submit); 
 echo form_close();?>

