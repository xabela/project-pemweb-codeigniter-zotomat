<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Restaurant extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Restaurant_model');
        $this->load->model('Komentar_model');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $data['judul'] = 'Restaurants | Zotomat';
        $data['restaurant'] = $this->Restaurant_model->getAllRestaurant();
        if ($this->input->post('keyword')) {
            $data['restaurant'] = $this->Restaurant_model->cariRestaurant();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('restaurant/index',$data);
        $this->load->view('templates/footer');
    }

    public function verifikasi()
    {
        $data['judul'] = 'Verifikasi Restaurants | Zotomat';
        $data['restaurant'] = $this->Restaurant_model->getAllVerificationRestaurant();
        $this->load->view('templates/header', $data);
        $this->load->view('restaurant/verifikasi', $data);
        $this->load->view('templates/footer');
    }

    public function declineVerifikasi($id)
    {
        // $this->Restaurant_model->getSpecifiedRestaurant($id);
        $data['restaurant'] = $this->Restaurant_model->getSpecifiedRestaurant($id);
        $this->Restaurant_model->decline($id);
        redirect('restaurant/verifikasi', $data);
    }

    public function acceptVerifikasi($id)
    {
        // $this->Restaurant_model->getSpecifiedRestaurant($id);
        $data['restaurant'] = $this->Restaurant_model->getSpecifiedRestaurant($id);
        $this->Restaurant_model->accept($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Restaurant berhasil diverifikasi 
            </div>');
        redirect('restaurant', $data);
    }

    public function deleteRestaurant($id)
    {
        // $this->Restaurant_model->getSpecifiedRestaurant($id);
        $data['restaurant'] = $this->Restaurant_model->getSpecifiedRestaurant($id);
        $this->Restaurant_model->decline($id);
        redirect('restaurant', $data);
    }



    public function tambah()
    {
        $data['judul'] = 'Tambah Restaurant';
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('kota', 'kota', 'required');
        $this->form_validation->set_rules('jambuka', 'jam buka', 'required');
        $this->form_validation->set_rules('fasilitas', 'fasilitas', 'required');
        $this->form_validation->set_rules('telepon', 'telepon', 'required');
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('restaurant/tambah');
            $this->load->view('templates/footer');
        } else {
            // $data = array();
            // if ($this->input->post('gambar')) {
            //     $upload = $this->Restaurant_model->upload();
            //     if ($upload['result'] == "success") {
            //         $this->Restaurant_model->save($upload);
            //         redirect('restaurant');
            //     }else {
            //         $data['message'] = $upload['error']; //jukukpesan error
            //     }
            // }
            $this->Restaurant_model->tambahRestaurant();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Anda berhasil menambahkan restaurant. Silahkan menunggu konfirmasi dari admin
            </div>');
            redirect('restaurant');
        }
    }

    public function tambahKomentar($id)
    {

        $this->Komentar_model->tambahKomentar($id);
        redirect("restaurant/restaurantDetail/$id");
    }

    public function editKomentar($id, $id_restaurant)
    {
        $this->Komentar_model->edit($id);
        $this->Restaurant_model->getSpecifiedRestaurant($id_restaurant);
        redirect("restaurant/restaurantDetail/$id_restaurant");
    }

    public function deleteKomentar($id, $id_restaurant)
    {
        $this->Komentar_model->delete($id);
        $this->Restaurant_model->getSpecifiedRestaurant($id_restaurant);
        redirect("restaurant/restaurantDetail/$id_restaurant");
    }

    public function restaurantDetail($id)
    {
        $hasil = $this->Restaurant_model->getSpecifiedRestaurant($id);
        $data['judul'] = $hasil['nama'] . ' | Zotomat';
        $data['restaurant'] = $hasil;
        $data['komentar'] = $this->Komentar_model->getAllComment($id);
        $data['komentarku'] = $this->Komentar_model->getSpecifiedComment($id);
        $this->load->view('templates/header', $data);
        $this->load->view('restaurant/restaurant_detail', $data);
        $this->load->view('templates/footer');
    }

    // public function upload()
    // {
    //     $data = array();
    //     if ($this->input->post('daftar')) {
    //         $upload = $this->Restaurant_model->upload();
    //         if ($upload['result'] == "success") {
    //             $this->Restaurant_model->save($upload);
    //             redirect('restaurant');
    //         }else {
    //             $data['message'] = $upload['error']; //jukukpesan error
    //         }
    //     }
    //     $this->load->view('restaurant',$data);
    // }
}
