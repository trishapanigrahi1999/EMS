<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Employee_Model');
        $this->load->helper(array('form', 'url'));
        $this->load->library('session');
    }

  public function index() {
       $data['employees'] = $this->Employee_Model->get_all_employees();
        $this->load->view('employee', $data);
    }
    public function add() {
       
        $this->load->view('add_employee');
    }
    public function insert() {
        // File upload config
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('picture')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('add_employee', $error);
        } else {
            $data = $this->upload->data();
            $picture = $data['file_name'];

            $emp_data = array(
                'id' => $this->input->post('id'), // Add this line
                'name' => $this->input->post('name'),
                'address' => $this->input->post('address'),
                'designation' => $this->input->post('designation'),
                'salary' => $this->input->post('salary'),
                'picture' => $picture
            );
            
            $this->Employee_Model->insert_employee($emp_data);
            redirect('employee');
        }
    }

   

    public function edit($id) {
        $data['employee'] = $this->Employee_Model->get_employee_by_id($id);
        $this->load->view('edit_employee', $data);
    }

    public function update($id) {
        $emp_data = array(
            'name' => $this->input->post('name'),
            'address' => $this->input->post('address'),
            'designation' => $this->input->post('designation'),
            'salary' => $this->input->post('salary'),
        );

        $this->Employee_Model->update_employee($id, $emp_data);
        redirect('employee');
    }

    public function delete($id) {
        $this->Employee_Model->delete_employee($id);
        redirect('employee');
    }
}
