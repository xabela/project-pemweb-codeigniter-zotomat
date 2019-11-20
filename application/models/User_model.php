<?php

class User_model extends CI_Model
{
    public function register()
    {
        $data = [
            'username' => htmlspecialchars($this->input->post('username', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT)
        ];
        $this->db->insert('user', $data);
    }

    public function getUserById($id)
    {
        
        return $this->db->get_where('user', ['id' => $id])->row_array();
    }

    public function edit()
    {
        $data = [
            "username" => htmlspecialchars($this->input->post('username', true)),
            "email" => htmlspecialchars($this->input->post('email', true)),
            "password" => password_hash($this->input->post('password1'), PASSWORD_DEFAULT)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user', $data);
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
    }
}