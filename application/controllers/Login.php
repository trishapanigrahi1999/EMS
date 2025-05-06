<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Login_Model');
        $this->load->helper('url'); // <-- add this line

        $this->load->library('session');
    }

    public function index() {
        $this->load->view('login');
    }

    public function check_login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->Login_model->get_user($username);

        if ($user && password_verify($password, $user->password)) {
            $this->session->set_userdata('user_id', $user->id);
            $this->session->set_userdata('user_name', $user->name);
            redirect('dashboard');
        } else {
            $data['error'] = "Invalid Username or Password";
            $this->load->view('login', $data);
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }
}
