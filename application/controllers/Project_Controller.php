<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project_Controller extends CI_Controller {

//constructor
public function __construct()
 {
    parent::__construct();


 if($this->session->userdata('logged_in')){
    $this->session->set_flashdata('access','Awesome! Welcome.');


}

}

public function index()
{
    $data['projects'] = $this->project_model->get_all_projects();
	$data['main_view'] = "projects/index";
	$this->load->view('layouts/main',$data);

}


    public function add(){
        // //set rules
        $this->form_validation->set_rules('p_name','Project Name','trim|required|min_length[3]');
        $this->form_validation->set_rules('p_desc','Description','trim|required|min_length[3]');
//        $this->form_validation->set_rules('date','Date','trim|option|min_length[3]|matches[password]');

        // //check if validations were false
        if ($this->form_validation->run() == FALSE){
            $data = array(
                'errors' => validation_errors()
            );
            // $this->session->set_userdata($data);
            //flash session
            $this->session->set_flashdata($data);
            $data['main_view'] = "projects/add";
            $this->load->view('layouts/main',$data);

        }else{
            $p_name = $this->input->post('p_name');
            $p_desc = $this->input->post('p_desc');
            $date = $this->input->post('date');
//            $password = password_hash($this->input->post('password'),PASSWORD_DEFAULT);

//set up array
//Setting values for tabel columns
            $data = array(
                'project_name' => $p_name,
                'project_body' => $p_desc,
                'date_created' => $date
            );

            $result = $this->project_model->add($data);
            if ($result){

                $this->session->set_flashdata('login_success','Project Registered successfully!');
                //load view
                $this->load->view('admin_home');
            }else{
                $this->session->set_flashdata('login_failed','Registration Failed!');

                // redirect('User_Controller/');
                $data['main_view'] = "projects/add";
                $this->load->view('layouts/main',$data);

            }


        }

    }
    public function edit()
    {
        $p_id = $this->input->post('p_id');
        $p_name = $this->input->post('p_name');
        $p_desc = $this->input->post('p_desc');
        $date = $this->input->post('date');

//set up array
//Setting values for tabel columns
        $dataArray = array(
            'project_name' => $p_name,
            'project_body' => $p_desc,
            'date_created' => $date
        );
        $this->project_model->edit($p_id,$dataArray);
        $data['main_view'] = "projects/index";
        $this->load->view('layouts/main',$data);

    }
    public function delete($id)
    {
        $this->project_model->delete($id);
        $data['main_view'] = "projects/index";
        $this->load->view('layouts/main',$data);

    }


}
