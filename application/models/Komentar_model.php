<?php

class Komentar_model extends CI_Model
{
    public function tambahKomentar($id)
    {
        $data = [
            "id_user" =>  $this->session->userdata('id'),
            "id_restaurant" => $id,
            "komentar" => $this->input->post('komentar', true),
            "waktu" => time()
        ];
        $this->db->where('id_restaurant', $id);
        $this->db->where('id_user', $this->session->userdata('id'));
        $this->db->insert('komentar', $data);
    }

    public function getAllComment($id)
    {
        $this->db->where('id_restaurant', $id);
        return $this->db->get('komentar')->result_array();
    }

    public function getSpecifiedComment($id)
    {
        $this->db->where('id_restaurant', $id);
        $this->db->where('id_user', $this->session->userdata('id'));
        return $this->db->get('komentar')->row_array();
    }

    public function edit()
    {
        $data = [
            "komentar" => htmlspecialchars($this->input->post('komentar', true)),
            "waktu" => time()
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('komentar', $data);
    }

    public function delete($id)
    {
        $this->db->delete('komentar', ['id' => $id]);
    }
}
