<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class project_model extends CI_Model{


// Read
    public function get_all_projects(){
        //easier way using autoload
    
        $query = $this->db->get('projects');
        return $query->result();
    }

    //get project tasks
    // Read
    // public function get_project_tasks($id){
    //     //easier way using autoload

    //     $query = $this->db->get('projects');
    //     return $query->result();
    // }

}