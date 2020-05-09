<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pasien_model extends CI_Model
{
    public function getAllPasien()
    {
        $query = $this->db->get('user_pasien');
        return $query->result_array();
    }

    public function getAllDokter()
    {
        $query = $this->db->get('user_dokter');
        return $query->result_array();
    }

    public function getPasien($username)
    {
        $query = $this->db->get_where('user', ['username' => $username]);
        return $query->row_array();
    }

    public function getDokter($id)
    {
        $query = $this->db->get_where('user_dokter', ['id' => $id]);
        return $query->row_array();
    }

    public function getPasienbyId($id)
    {
        $query = $this->db->get_where('user_pasien', ['id' => $id]);
        return $query->row_array();
    }
}
