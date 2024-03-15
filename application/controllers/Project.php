<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
         $this->load->library('form_validation');
    }
    public function index(){
        // $this->load->view('user');
         $this->load->view('user');
    }

    public function add() {
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'age' => $this->input->post('age'),
            'DOF' => $this->input->post('DOF')
        );

        $this->User_model->add_project($data);

        
        redirect('Project/display_data');
    }
     public function display_data() {
        $data['user_data'] = $this->User_model->get_all_users(); 
        $this->load->view('formview', $data);
    }
}
?>