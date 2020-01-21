<div class ="jumbotron text-center" style="margin-bottom:0">
<h1>View Tasks</h1>
</div>
<br><br>
<div  class="container text-center">
<p class = 'bg-success'>
<?php
//$data_id = $this->input->get('name_of_field');

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
<h2>All Tasks</h2>
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Task Name</th>
        <th>Task Desc.</th>
        <th>Task Progress</th>
        <th>Date Created</th>
        <th>Action</th>

      </tr>
    </thead>
    <tbody>

      
      <?php
      if (isset($tasks)) {
          foreach ($tasks as $task){
         echo "<tr><td>".$task->id."</td>";
         echo "<td>".$task->task_name."</td>";
         echo "<td>".$task->task_desc."</td>";
         echo "<td>".$task->task_progress."</td>";
         echo "<td>".$task->date_created."</td>";
         ?>
         <td><a href ="<?= site_url();?>task_controller/edit/<?php echo $task->id; ?>" class= "btn btn-sm btn-info" data-toggle="modal" data-target="#editTaskModal">Edit</a> | <a href ="<?= site_url();?>task_controller/delete/<?php echo $task->id; ?>" class= "btn btn-sm btn-danger">Delete</a></td>
         <?php
         echo "</tr>";

         }
      }
    ?>
      

    </tbody>
  </table>
  <a href="<?= site_url();?>user_controller/logout"><button class = 'btn btn-lg btn-warning'>Logout</button></a>

</div>


