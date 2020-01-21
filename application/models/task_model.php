<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class task_model extends CI_Model{


// Add Task
    public function add($array){

        $query = $this->db->insert('tasks',$array);

        if($this->db->affected_rows() != 1){
            return false;
        }else{
            return  true;
        }


    }



// Read
    public function get_all_tasks(){
        //easier way using autoload
    
        $query = $this->db->get('tasks');
        return $query->result();
    }

 // Read
 public function get_project_tasks($id){
    //easier way using autoload
    $this->db->where([
        'project_id' => $id,
        ]);
    $query = $this->db->get('tasks');
    return $query->result();
}   

 // Update
public function edit($array,$id){
    $this->db->where([
        'id' => $id,
        ]);
    $this->db->update('tasks',$array);
    
    }

// Delete
public function delete($id){
    $this->db->where([
        'id' => $id,
        ]);
    $this->db->delete('tasks');
    
    }   
}