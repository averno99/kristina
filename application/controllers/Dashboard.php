
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    }

    public function index()
    {

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['title'] = "Dashboard";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('dashboard/dashboard');
        $this->load->view('templates/footer', $data);
    }

    public function dash_penduduk()
    {
        $this->load->model('M_penduduk');
        $data['graph'] = $this->M_penduduk->jumlah_penduduk();


        $data['title'] = "Jumlah Penduduk";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('dashboard/dashpenduduk', $data);
        $this->load->view('templates/footer');
    }
    public function dash_pus()
    {
        $this->load->model('M_pus');
        $data['graph'] = $this->M_pus->jumlah_pus();


        $data['title'] = "Jumlah Pasangan Usia Subur";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('dashboard/dashpus', $data);
        $this->load->view('templates/footer');
    }
    public function dash_aks()
    {
        $this->load->model('M_akseptor');
        $data['graph'] = $this->M_akseptor->jumlah_akseptor();


        $data['title'] = "Jumlah Akseptor";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('dashboard/dashaks', $data);
        $this->load->view('templates/footer');
    }
    public function dash_pel()
    {
        $this->load->model('M_pelayanan');
        $data['graph'] = $this->M_pelayanan->jumlah_pelayanan();


        $data['title'] = "Jumlah Pelayanan Kb";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('dashboard/dashpel', $data);
        $this->load->view('templates/footer');
    }
    public function dash_kel()
    {
        $this->load->model('M_kelahiran');
        $data['graph'] = $this->M_kelahiran->jumlah_kelahiran();


        $data['title'] = "Jumlah Kelahiran";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('dashboard/dashkel', $data);
        $this->load->view('templates/footer');
    }
}
