<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Controller extends CI_Controller {

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
		public function update($username,$fname,$lname){
			$id = 17;
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
