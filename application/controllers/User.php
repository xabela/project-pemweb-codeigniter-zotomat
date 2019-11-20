<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('User_model');
    }
    public function index()
    {
        $this->form_validation->set_rules('username', 'username', 'required|trim');
        $this->form_validation->set_rules('password', 'password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Login | Zotomat';
            $this->load->view('templates/header', $data);
            $this->load->view('user/login');
            $this->load->view('templates/footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();

        if ($user) { //jika user ada
            if (password_verify($password, $user['password'])) {
                $data = [
                    'username' => $user['username'],
                    'id' => $user['id']
                ];
                $this->session->set_userdata($data);
                redirect('home');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Wrong password
                </div>');
                redirect('user');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Username is not registered
            </div>');
            redirect('user');
        }
    }

    public function register()
    {
        $this->form_validation->set_rules(
            'username',
            'username',
            'required|trim|is_unique[user.username]',
            ['is_unique' => 'Username has already been taken']
        );
        $this->form_validation->set_rules('email', 'email', 'required|trim|valid_email');
        $this->form_validation->set_rules(
            'password1',
            'password',
            'required|trim|min_length[3]|matches[password2]',
            ['matches' => 'Password doesnt match', 'min_length' => 'Password too short']
        );
        $this->form_validation->set_rules('password2', 'password', 'required|trim|matches[password1]');
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Register | Zotomat';
            $this->load->view('templates/header', $data);
            $this->load->view('user/register');
            $this->load->view('templates/footer');
        } else {
            $this->User_model->register();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Congratulation! Your account has been created. Please Login
            </div>');
            redirect('user');
        }
    }

    public function edit($id)
    {
        $data['judul'] = 'Edit Profile | Zotomat';
        $data['user'] = $this->User_model->getUserById($id);
        $this->form_validation->set_rules(
            'username',
            'username',
            'required|trim|is_unique[user.username]',
            ['is_unique' => 'Username has already been taken']
        );
        $this->form_validation->set_rules('email', 'email', 'required|trim|valid_email');
        $this->form_validation->set_rules(
            'password1',
            'password',
            'required|trim|min_length[3]|matches[password2]',
            ['matches' => 'Password doesnt match', 'min_length' => 'Password too short']
        );
        $this->form_validation->set_rules('password2', 'password', 'required|trim|matches[password1]');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('user/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->User_model->edit();
            $this->session->set_flashdata('message2', '<div class ="alert alert-success" role ="alert ">
                Congratulation! Your account has been edited. Please Login </div>');
            redirect('user');
        }
    }

    public function logout()
    {
        $this->User_model->logout();
        redirect('home');
    }
}
