<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $this->load->model('Restaurant_model');        
        $data['judul'] = 'Zotomat | Review Restaurant';
        $data['restaurant'] = $this->Restaurant_model->getAllRestaurant();
        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }

    public function about()
    {
        $data['judul'] = 'About Us | Review Restaurant';
        $this->load->view('templates/header', $data);
        $this->load->view('home/about');
        $this->load->view('templates/footer');
    }
}