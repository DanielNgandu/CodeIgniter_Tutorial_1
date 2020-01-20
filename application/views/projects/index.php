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
     foreach ($projects as $projects){
    echo "<tr><td>".$projects->id."</td>";
    echo "<td>".$projects->project_name."</td>";
    echo "<td>".$projects->project_body."</td>";
    echo "<td>".$projects->date_created."</td>";
?>
  <td><a href ='<?= site_url();?>task_controller/tasks/<?php echo $projects->id; ?>'><button class='btn btn-large btn-success'>View Tasks</button></a></td>


<?php
echo "</tr>";
    }
    ?>
      

    </tbody>
  </table>
  <a href="<?= site_url();?>user_controller/logout"><button class = 'btn btn-lg btn-warning'>Logout</button></a>

</div>


