<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project_model extends CI_Model{


// Read
    public function get_all_projects(){
        //easier way using autoload
    
        $query = $this->db->get('projects');
        return $query->result();
    }

// Add Project
    public function add($array){

        $query = $this->db->insert('projects',$array);

        if($this->db->affected_rows() != 1){
            return false;
        }else{
            return  true;
        }


    }

    // Edit Project
    public function edit($id,$array){
        $this->db->where([
            'id' => $id,
        ]);
        $query = $this->db->update('projects',$array);

        if($this->db->affected_rows() != 1){
            return false;
        }else{
            return  true;
        }


    }


// Delete
    public function delete($id){
        $this->db->where([
            'id' => $id,
        ]);
        $this->db->delete('projects');

    }
}