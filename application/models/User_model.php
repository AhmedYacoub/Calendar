<?php 

class User_model extends CI_Model
{
    public function create_member() {

        // Encrypt password
        $enc_password = md5($this->input->post('password'));

        // User data from the form
        $user_data = array(
            'first_name' => $this->input->post('first_name'),
            'last_name'  => $this->input->post('last_name'),
            'email'      => $this->input->post('email'),
            'username'   => $this->input->post('username'),
            'password'   => $enc_password
        );

        // Insert data into database.
        $this->db->insert('users', $user_data);
    }

    public function login() {
        $user_data = array(
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post['password'])
        );

        $result = $this->db->get_where('users', array('username' => $user_data['username']));
        return $result->row_array();
    }
}