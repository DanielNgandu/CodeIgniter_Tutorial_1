
<br>
<div class ="jumbotron text-center" style="margin-bottom:0">
<h1>Login</h1>
</div>
<?php 

$attributes = array(
    'id' => 'login_form',
    'class' => 'needs-validation'
);
echo form_open('login',$attributes);?>

<div class="form-group">
    <label for="email">Email address:</label>
    <?php 
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
    <label for="pwd">Password:</label>
    <?php 
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
  <button type="submit" class="btn btn-primary">Submit</button>
  <?php echo form_close();?>

