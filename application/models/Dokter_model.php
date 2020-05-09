<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dokter_model extends CI_Model
{
    public function getAllDokter()
    {
        $query = $this->db->get('user_dokter');
        return $query->result_array();
    }

    public function getDokter($id)
    {
        $query = $this->db->get_where('user_dokter', ['id' => $id]);
        return $query->row_array();
    }

    public function addDokter()
    {
        $data = [
            "nama_dokter" => $this->input->post('nama', true),
            "jam_praktek" => $this->input->post('jp', true),
            "username" => $this->input->post('usname', true),
            "password" => password_hash($this->input->post('pass'), PASSWORD_DEFAULT),
            "image" => 'default.jpg',
            "role_id" => 2,
            "is_active" => 1,
            "date_created" => time()
        ];
        $this->db->insert('user_dokter', $data);

        $user = [
            "name" => $data['nama_dokter'],
            "email" => 'klinikthttelu@gmail.com',
            "username" => $data['username'],
            "image" => 'default.jpg',
            "password" => $data['password'],
            "role_id" => 2,
            "is_active" => 1,
            "date_created" => time()
        ];

        $this->db->insert('user', $user);
    }

    public function deletingDokter($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user_dokter');
    }

    public function getAllPasienDokter()
    {
        $query = $this->db->get('user_pasien');
        return $query->result_array();
    }
}
