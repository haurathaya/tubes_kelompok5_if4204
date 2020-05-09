<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pasien extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pasien_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Jadwal Dokter';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $data1['dokter'] = $this->Pasien_model->getAllDokter();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pasien/jadwal', $data1);
        $this->load->view('templates/footer');
    }

    public function list()
    {

        $data['title'] = 'List Pasien';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $data1['pasien'] = $this->Pasien_model->getAllPasien();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pasien/list', $data1);
        $this->load->view('templates/footer');
    }

    public function reserveDokter($id)
    {
        $data['title'] = 'Reservasi Dokter';
        $data['user'] = $this->session->userdata('username');
        $idD = $this->uri->segment(3);

        $data1 = $this->Pasien_model->getPasien($data['user']);
        $data2 = $this->Pasien_model->getDokter($idD);

        $datajanji = [
            "nama_pasien"   =>    $data1['name'],
            "email"         =>    $data1['email'],
            "username"      =>    $data1['username'],
            "password"      =>    $data1['password'],
            "image"         =>    $data1['image'],
            "role_id"       =>    $data1['role_id'],
            "is_active"     =>    $data1['is_active'],
            "date_created"  =>    $data1['date_created'],
            "date_reserved" =>    time(),
            "id_dokter"     =>    $data2['id'],
            "nama_dokter"   =>    $data2['nama_dokter']
        ];

        $this->db->insert('user_pasien', $datajanji);
        redirect('pasien');
    }
}
