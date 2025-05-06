<?php
class Login_Model extends CI_Model {

    public function get_user($username) {
        $query = $this->db->get_where('login_details', ['user_name' => $username]);
        return $query->row();
    }
}
