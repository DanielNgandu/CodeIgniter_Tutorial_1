<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Task_Controller extends CI_Controller {

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
    $data['tasks'] = $this->task_model->get_all_tasks();
    
	$data['main_view'] = "tasks/index";
	$this->load->view('layouts/main',$data);

}


public function tasks($id)
{
    $data['tasks'] = $this->task_model->get_project_tasks($id);
    
	$data['main_view'] = "tasks/index";
	$this->load->view('layouts/main',$data);

}


public function view()
{
    $data['projects'] = $this->task_model->view();
	$data['main_view'] = "tasks/display_task";
	$this->load->view('layouts/main',$data);

}

public function edit($id)
{
    $data['projects'] = $this->task_model->edit($id);
	$data['main_view'] = "tasks/edit";
	$this->load->view('layouts/main',$data);

}

public function delete($id)
{
    $this->task_model->delete($id);
	$data['main_view'] = "tasks/index";
	$this->load->view('layouts/main',$data);

}


}
