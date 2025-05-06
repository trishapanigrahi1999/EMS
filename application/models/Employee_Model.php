<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee_Model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database(); // This loads the database connection
    }

    public function get_all_employees() {
        return $this->db->get('emp_details')->result();
    }

    public function insert_employee($data) {
        return $this->db->insert('emp_details', $data);
    }

    public function get_employee_by_id($id) {
        return $this->db->get_where('emp_details', ['id' => $id])->row();
    }

    public function update_employee($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('emp_details', $data);
    }

    public function delete_employee($id) {
        return $this->db->delete('emp_details', ['id' => $id]);
    }
}
