<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <title>CI Tutorial 2020</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</head>
<body>
<div class="container">
<div class = "col-lg-12">
<br>
<?php
 $this->load->view($main_view); ?>
</div>r
<br>
<div class="jumbotron text-center" style="margin-bottom:10;">
  <p>Footer</p>
</div>
</div>
<!-- View Project Details Modal-->
<div class="modal fade" id="ViewTaskDetsModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edit</h4>
            </div>
            <div class="modal-body">
                <?php

                $attributes = array(
                    'id' => 'editProjectModalForm',
                    'class' => 'needs-validation'
                );
                // echo validation_errors();
                if($this->session->flashdata('errors')):
                    echo $this->session->flashdata('errors');


                endif;
                echo form_open('task_controller/add',$attributes);?>
                <div class="form-group">
                    <?php
                    echo form_label('Project ID: ');
                    $data_id = array(
                        'type' => 'text',
                        'class' => 'form-control',
                        'name' => 'p_id',
                        'id' => 'p_id',
                        'placeholder' => ''
                    );
                    echo form_input($data_id); ?>
                </div>
                <div class="form-group">
                    <?php
                    echo form_label('Name: ');
                    $data_username = array(
                        'type' => 'text',
                        'class' => 'form-control',
                        'name' => 'p_name',
                        'id' => 'p_name',
                        'placeholder' => ''
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
                        'placeholder' => ''
                    );
                    echo form_input($data_email); ?>
                </div>

                <div class="form-group">
                    <?php
                    echo form_label('Date Created: ');
                    $data_fname = array(
                        'type' => 'text',
                        'class' => 'form-control',
                        'name' => 'date',
                        'id' => 'date',
                        'placeholder' => ''
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
                echo form_close();?>        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
<!-- View Task Details Modal-->
<div class="modal fade" id="ViewTaskDetsModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edit</h4>
            </div>
            <div class="modal-body">
                <?php

                $attributes = array(
                    'id' => 'editProjectModalForm',
                    'class' => 'needs-validation'
                );
                // echo validation_errors();
                if($this->session->flashdata('errors')):
                    echo $this->session->flashdata('errors');


                endif;
                echo form_open('task_controller/add',$attributes);?>
                <div class="form-group">
                    <?php
                    echo form_label('Project ID: ');
                    $data_id = array(
                        'type' => 'text',
                        'class' => 'form-control',
                        'name' => 'p_id',
                        'id' => 'p_id',
                        'placeholder' => ''
                    );
                    echo form_input($data_id); ?>
                </div>
                <div class="form-group">
                    <?php
                    echo form_label('Name: ');
                    $data_username = array(
                        'type' => 'text',
                        'class' => 'form-control',
                        'name' => 'p_name',
                        'id' => 'p_name',
                        'placeholder' => ''
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
                        'placeholder' => ''
                    );
                    echo form_input($data_email); ?>
                </div>

                <div class="form-group">
                    <?php
                    echo form_label('Date Created: ');
                    $data_fname = array(
                        'type' => 'text',
                        'class' => 'form-control',
                        'name' => 'date',
                        'id' => 'date',
                        'placeholder' => ''
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
                echo form_close();?>        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
<!--Edit Project  Modal -->
<div class="modal fade" id="editProjectModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit</h4>
        </div>
        <div class="modal-body">
            <?php

            $attributes = array(
                'id' => 'editProjectModalForm',
                'class' => 'needs-validation'
            );
            // echo validation_errors();
            if($this->session->flashdata('errors')):
                echo $this->session->flashdata('errors');


            endif;
            echo form_open('task_controller/add',$attributes);?>
            <div class="form-group">
                <?php
                echo form_label('Project ID: ');
                $data_id = array(
                    'type' => 'text',
                    'class' => 'form-control',
                    'name' => 'p_id',
                    'id' => 'p_id',
                    'placeholder' => ''
                );
                echo form_input($data_id); ?>
            </div>
            <div class="form-group">
                <?php
                echo form_label('Name: ');
                $data_username = array(
                    'type' => 'text',
                    'class' => 'form-control',
                    'name' => 'p_name',
                    'id' => 'p_name',
                    'placeholder' => ''
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
                    'placeholder' => ''
                );
                echo form_input($data_email); ?>
            </div>

            <div class="form-group">
                <?php
                echo form_label('Date Created: ');
                $data_fname = array(
                    'type' => 'text',
                    'class' => 'form-control',
                    'name' => 'date',
                    'id' => 'date',
                    'placeholder' => ''
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
            echo form_close();?>        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>


</body>
<script>

    function test(){
        alert("Hello0");
    }

 function  editProjectModal(project_id,project_name,project_body,date_created){
     // document.getElementById("p_id").value = project_id;
     $('input[name=p_id]').val(''+project_id);
     // document.getElementById("p_name").value = project_name;
     $('input[name=p_name]').val(''+project_name);

     // document.getElementById("p_desc").value = project_body;
     $('input[name=p_desc]').val(''+project_body);

     // document.getElementById("date").value = date_created;
     $('input[name=date]').val(''+date_created);

     // alert(project_name);
     $("#editProjectModal").modal();
}
</script>
</html>
