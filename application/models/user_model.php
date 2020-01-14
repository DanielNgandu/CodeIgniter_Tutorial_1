<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{
// login
public function login_user($email,$password){
    $this->db->where([
        'email' => $email,
        'password' => $password
        ]);
    $query = $this->db->get('users');
    if($query->num_rows() == 1){

        return $query->row(0)->userId;

    }else{
       return false;
    }

}


// Read
    public function get_users($array){
        //easier way using autoload
        $this->db->where([
            'userId' => $user_id,
            'userName' => $user_name
            ]);
        $query = $this->db->get('users');
        return $query->result();
    }

// Create
public function create_users($array){
$this->db->insert('users',$array);

}
// Update
public function update_users($array,$id){
    $this->db->where([
        'userId' => $id,
        ]);
    $this->db->update('users',$array);
    
    }
// Delete
public function delete_users($id){
    $this->db->where([
        'userId' => $id,
        ]);
    $this->db->delete('users');
    
    }
}
