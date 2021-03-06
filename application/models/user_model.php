<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{
// login
public function login_user($email,$password){
    $this->db->where([
        'email' => $email
        ]);


    $query = $this->db->get('users');

    $db_password = $query->row(5)->password;
    if (password_verify($password,$db_password)){
            return $query->row(0)->userId;
    }
   else{
       return false;
    }

}



// register user
public function register_user($array){

    $query = $this->db->insert('users',$array);

    if($this->db->affected_rows() != 1){
        return false;
    }else{
        return  true;
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
