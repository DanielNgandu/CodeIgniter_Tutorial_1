<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Controller extends CI_Controller {
    public function index()
    {
        $data['main_view'] = "admin_home";
        $this->load->view('layouts/main',$data);
    
    }


    public function admin(){
        // $data['admin_view'] = "view_users";
        // $this->load->view('layouts/main',$data);

    }
}
