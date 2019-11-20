<?php

class Restaurant_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }
    public function getAllRestaurant()
    {
        $this->db->where('verifikasi', 1);
        $this->db->order_by('nama', 'ASC');
        return $this->db->get('restaurant')->result_array();
    }

    public function getAllVerificationRestaurant()
    {
        $this->db->where('verifikasi', 0);
        return $this->db->get('restaurant')->result_array();
    }

    public function tambahRestaurant()
    {
        // $upload_image = $_FILES['image'];
        // if ($upload_image) {
        //     $config['allowed_types'] = 'gif|jpg|png';
        //     $config['max_size']     = '2048';
        //     $config['upload_path'] = './assets/image/';
        //     $this->load->library('upload', $config);

        //     if ($this->upload->do_upload('image')) {
        //         echo $upload_image;
        //         die;
        //         $new_image = $this->upload->data('file_name');
        //         $data = ["gambar" => $new_image];
        //         $this->db->insert('restaurant', $data);
        //     } else {
        //         echo $this->upload->display_errors();
        //     }
        // }

        $data = [
            "nama" => htmlspecialchars($this->input->post('nama', true)),
            "alamat" => htmlspecialchars($this->input->post('alamat', true)),
            "kota" => htmlspecialchars($this->input->post('kota', true)),
            "jambuka" => htmlspecialchars($this->input->post('jambuka', true)),
            "fasilitas" => htmlspecialchars($this->input->post('fasilitas', true)),
            "telepon" => htmlspecialchars($this->input->post('telepon', true)),
            "deskripsi" => htmlspecialchars($this->input->post('deskripsi', true)),
            "gambar" => 'default.jpg'
            // "gambar" => $this->getsave()
            //taruhsini
            // "gambar" => htmlspecialchars($this->input->post('foto', true)),
        ];
        $this->db->insert('restaurant', $data);
    }

    public function cariRestaurant()
    {
        
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('kota', $keyword);
        $this->db->or_like('alamat', $keyword);
        $this->db->where('verifikasi', 1);
        return $this->db->get('restaurant')->result_array();

        // return $this->db->get('restaurant')->result_array();
    }

    public function getSpecifiedRestaurant($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('restaurant')->row_array();
    }
    public function decline($id)
    {
        $this->db->delete('restaurant', ['id' => $id]);
    }

    public function accept($id)
    {
        $data = ["verifikasi" => 1];
        $this->db->where('id', $id);
        $this->db->update('restaurant', $data);
    }


    // public function upload()
    // {
    //     $config['upload_path'] = './assets/images/';
    //     $config['allowed_types'] = 'jpg|png|jpeg';
    //     $config['max_size'] = '2048'; //2mb
    //     $config['remove_space'] = true;
    //     $this->load->library('upload', $config); //di set konfigurasinya
    //     if ($this->upload->do_upload('gambar')) { //cek jika upload berhasil
    //         $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
    //         return $return;
    //     } else {
    //         //kalo gagal
    //         $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
    //         return $return;
    //     }
    // }
    // private $data ;
    // public function save($image)
    // {
    //     $data = $image['file']['file_name'];
    //     $this->data = $data;
    //     $this->tambahRestaurant();
    // }

    // public function getsave(){
    //     return $this->data;
    // }
}
