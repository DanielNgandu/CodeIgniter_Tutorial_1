<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{


    public function get_users($user_id,$user_name){
        //easier way using autoload
        $this->db->where([
            'userId' => $user_id,
            'userName' => $user_name
            ]);
        $query = $this->db->get('users');
        return $query->result();
    }


public function create_users($array){
$this->db->insert('users',$array);

}

}
