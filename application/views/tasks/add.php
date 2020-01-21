<br>
<div class ="jumbotron text-center" style="margin-bottom:0">
    <h1>Add New Task</h1>
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
echo form_open('task_controller/add',$attributes);?>

<div class="form-group">
    <?php
    echo form_label('Name: ');
    $data_username = array(
        'type' => 'text',
        'class' => 'form-control',
        'name' => 'p_name',
        'id' => 'p_name',
        'placeholder' => 'Please Enter Project Name'
    );
    echo form_input($data_username); ?>
</div>

<div class="form-group">
    <?php
    echo form_label('Description: ');
    $data_email = array(
        'type' => 'text',
        'class' => 'form-control',
        'name' => 'p_desc',
        'id' => 'p_desc',
        'placeholder' => 'Please Enter Description'
    );
    echo form_input($data_email); ?>
</div>

<div class="form-group">
    <?php
    echo form_label('Date Created: ');
    $data_fname = array(
        'type' => 'date',
        'class' => 'form-control',
        'name' => 'date',
        'id' => 'date',
        'placeholder' => 'Please Enter Date'
    );
    echo form_input($data_fname); ?>
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
    'value' => 'Add'
);
echo form_submit($data_submit);
echo form_close();?>

