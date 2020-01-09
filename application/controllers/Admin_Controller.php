<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Controller extends CI_Controller {

	public function index()
	{
        $data['main_view'] = "login";
        $this->load->view('layouts/main',$data);

    }
    public function login()
	{
        // $data['main_view'] = "login";
        // $this->load->view('layouts/main',$data);
        // print_r($_POST);

        //set rules
        $this->form_validation->set_rules('email','Email','trim|required|min_length[3]');
        $this->form_validation->set_rules('password','Password','trim|required|min_length[3]');


        //check if validations were false
        if ($this->form_validation->run() == FALSE){
            $data = array(
            'errors' => validation_errors();

            );
            // $this->session->set_userdata($data);
            //flash session
            $this->session->set_flashdata($data);

        }

    }
    public function admin(){
        // $data['admin_view'] = "view_users";
        // $this->load->view('layouts/main',$data);

    }
}
