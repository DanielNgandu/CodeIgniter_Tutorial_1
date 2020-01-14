<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Controller extends CI_Controller {

//view login page
public function index()
{
	$data['main_view'] = "login";
	$this->load->view('layouts/main',$data);

}

public function register(){
	// //set rules
	$this->form_validation->set_rules('username','Username','trim|required|min_length[3]');
	$this->form_validation->set_rules('email','Email','trim|required|min_length[3]');
	$this->form_validation->set_rules('fname','FirstName','trim|required|min_length[3]');
	$this->form_validation->set_rules('lname','LastName','trim|required|min_length[3]');
	$this->form_validation->set_rules('password','Password','trim|required|min_length[3]');
	$this->form_validation->set_rules('confirm_password','Confirm Password','trim|required|min_length[3]|matches[password]');

	// //check if validations were false
	if ($this->form_validation->run() == FALSE){
		$data = array(
		'errors' => validation_errors()
		);
		// $this->session->set_userdata($data);
		//flash session
		$this->session->set_flashdata($data);
		$data['main_view'] = "register";
	    $this->load->view('layouts/main',$data);

	}else{
            $username = $this->input->post('username');
			$email = $this->input->post('email');
			$fname = $this->input->post('fname');
			$lname = $this->input->post('lname');
			$password = password_hash($this->input->post('password'),PASSWORD_DEFAULT);

//set up array
//Setting values for tabel columns
$data = array(	'userName' => $username,
				'email' => $email,
				'firstName' => $fname,
				'lastName' => $lname,
				'password' => $password
				);

			$result = $this->user_model->register_user($data);
			if ($result){
            $user_data = array(
			 'email' => $email,
			 'logged_in' => true

			);
			$this->session->set_userdata($user_data);
			$this->session->set_flashdata('login_success','You are now registered successfully!');
			//load view
		$this->load->view('admin_home',$user_data);
			}else{
				$this->session->set_flashdata('login_failed','Registeration Failed!');

			// redirect('User_Controller/');
			$data['main_view'] = "admin_home";
			$this->load->view('layouts/main',$data);

			}


	}
	
}

public function login()
{
	// $data['main_view'] = "login";
	// $this->load->view('layouts/main',$data);
	// print_r($_POST);

	// //set rules
	$this->form_validation->set_rules('email','Email','trim|required|min_length[3]');
	$this->form_validation->set_rules('password','Password','trim|required|min_length[3]');
	$this->form_validation->set_rules('confirm_password','Confirm Password','trim|required|min_length[3]|matches[password]');

	// //check if validations were false
	if ($this->form_validation->run() == FALSE){
		$data = array(
		'errors' => validation_errors()

		);
		// $this->session->set_userdata($data);
		//flash session
		$this->session->set_flashdata($data);
		$data['main_view'] = "login";
	    $this->load->view('layouts/main',$data);

	}else{
		// redirect('User_Controller/');
			// print_r($_POST);
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			//check in db using user_model function
			// $user_data = array();

			$user_id = $this->user_model->login_user($email,$password);

			if ($user_id){
				
            $user_data = array(
			 'user_id' => $user_id,
			 'email' => $email,
			 'logged_in' => true

			);
			$this->session->set_userdata($user_data);
			$this->session->set_flashdata('login_success','You are now logged in successfully!');
			//load view
		$this->load->view('admin_home',$user_data);
			}else{
				$this->session->set_flashdata('login_failed','Login Failed!');

			// redirect('User_Controller/');
			$data['main_view'] = "admin_home";
			$this->load->view('layouts/main',$data);

			}


	}

}



public function logout(){

	$user_data = $this->session->all_userdata();
	foreach ($user_data as $key => $value) {
		if ($key != 'login_success' && $key != 'login_failed' && $key != 'user_id' && $key != 'email' && $key != 'logged_in' ) {
			$this->session->unset_userdata($key);
		}
	}
$this->session->sess_destroy();
redirect('User_Controller/login');	
}


	public function show($user_id,$user_name)
	{
		// $this->load->model('user_model');		//manual way of loading model
		$results['results'] = $this->user_model->get_users($user_id,$user_name);

		//load view
		$this->load->view('user_view',$results);
	}


	//function to do all inserts
	public function insert($username,$fname,$lname){
    $this->user_model->create_users([
		'userName' => $username,
		'firstName' => $fname,
		'lastName' => $lname
		]);

	}


		//function to do all updates
		public function update($id,$username,$fname,$lname){
			$this->user_model->update_users([
				'userName' => $username,
				'firstName' => $fname,
				'lastName' => $lname
			],$id);
		
			}
		//function to do all deletes
		public function delete(){
			$id = 17;
			$this->user_model->delete_users($id);
		
			}
}
