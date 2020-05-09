<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dokter extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dokter_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'List Dokter';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $data['dokter'] = $this->Dokter_model->getAllDokter();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('dokter/index', $data);
        $this->load->view('templates/footer');
    }
    #COTS1: lengkapi function ini
    public function add()
    {
        $data['title'] = 'Form Tambah Dokter';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();


        $this->form_validation->set_rules('nama_dokter', 'Nama Menu', 'required');
        $this->form_validation->set_rules('jam_praktek', 'Jam Praktek', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|alpha_numeric|is_unique[user.username]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]|');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('dokter/index', $data);
        } else {
        	$this->Dokter_model->addDokter();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Add dokter successful!</div>');
            redirect('dokter/index');
        }
    }

    #COTS2: Lengkapi function ini
    public function pasien()
    {
        $data['title'] = 'List Pasien';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();


     	$data1 = $this->Dokter_model->getAllDokter($data['user']);
		$data['pasien'] = $this->Dokter_model->getAllPasienDokter($data1);

		$this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('dokter/pasien', $data);
        $this->load->view('templates/footer');
    }

    public function deleteDokter($id)
    {
        $this->Dokter_model->deletingDokter($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Selected doctor deleted!</div>');
        redirect('dokter');
    }
}
