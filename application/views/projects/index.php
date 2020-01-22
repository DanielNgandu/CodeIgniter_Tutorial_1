<div class ="jumbotron text-center" style="margin-bottom:0">
<h1>View Project Details</h1>
</div>
<br><br>
<div  class="container text-center">
<p class = 'bg-success'>
<?php 
if($this->session->flashdata('access')):
  echo $this->session->flashdata('access');
  
  
  endif; 
    ?>

</p>
<p class = 'bg-danger'>
<?php 
if($this->session->flashdata('no_access')):
  echo $this->session->flashdata('no_access');
  
  
  endif; 

    ?>

</p>
</div>
<br>
<a href="<?= site_url();?>project_controller/add"><button class = 'btn btn-lg btn-success'>Add</button></a>

<br></hr>
<h2>Project Details</h2>
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Project Name</th>
        <th>Project Desc.</th>
        <th>Date Created</th>
        <th>Action</th>

      </tr>
    </thead>
    <tbody>

      
      <?php
      if (isset($projects)) {
          foreach ($projects as $projects){
         echo "<tr><td>".$projects->id."</td>";
         echo "<td>".$projects->project_name."</td>";
         echo "<td>".$projects->project_body."</td>";
         echo "<td>".$projects->date_created."</td>";
     ?>
              <td><a href ='<?= site_url();?>task_controller/tasks/<?php echo $projects->id; ?>'>
                      <button class='btn btn-sm btn-success'>View</button></a>|

                  <?php echo '<button type="button"  class= \'btn btn-sm btn-info\'  onclick="editProjectModal(\'' . $projects->id . '\',\'' . $projects->project_name . '\',\'' . $projects->project_body .'\',\''  .$projects->date_created .'\')" >
                  Edit</button>';?>
                  | <a href ="<?= site_url();?>project_controller/delete/<?php echo $projects->id; ?>" class= "btn btn-sm btn-danger">Delete</a></td>


     <?php
     echo "</tr>";
         }
      }
    ?>


    </tbody>
  </table>
<br>
  <a href="<?= site_url();?>user_controller/logout"><button class = 'btn btn-lg btn-warning'>Logout</button></a>
<div class="modal fade" id="editTaskModal" role="dialog">
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
                echo form_close();?>        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

</div>


