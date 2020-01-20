<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project_Controller extends CI_Controller {

//constructor
public function __construct()
 {
    parent::__construct();


 if($this->session->userdata('logged_in')){
    $this->session->set_flashdata('access','Awesome! Welcome.');

// //view home page
// 	$data['main_view'] = "projects/index";
//     $this->load->view('layouts/main',$data);
//     exit;


//  }else{
//     $this->session->set_flashdata('no_access','Sorry, you are allowed beyond this. Try again.');
//     redirect('User_Controller/login');
//     exit;

}

}

public function index()
{
    $data['projects'] = $this->project_model->get_all_projects();
	$data['main_view'] = "projects/index";
	$this->load->view('layouts/main',$data);

}

// public function task()
// {
//     $data['projects'] = $this->project_model->get_all_projects();
// 	$data['main_view'] = "tasks/display_task";
// 	$this->load->view('layouts/main',$data);

// }

}
