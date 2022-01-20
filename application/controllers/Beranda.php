<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Beranda extends CI_Controller
{
    public function index()
    {

        $this->load->model('M_pemetaan');

        $data['pemetaan'] = $this->M_pemetaan->tampil_data();



        $this->load->view('frontend/template/head');
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/container');
        $this->load->view('frontend/template/content', $data);
        $this->load->view('frontend/template/footer');
    }
    public function informasi()
    {

        $this->load->view('frontend/template/head');
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/informasi/programKB');
        $this->load->view('frontend/template/footer');
    }
    public function pemetaan()
    {
        $this->load->model('M_pemetaan');

        $data['pemetaan'] = $this->M_pemetaan->tampil_data();
        $this->load->model('M_pemetaan');
        $this->load->model('M_kecamatan');
        $this->load->model('M_total');


        $data['title'] = 'Pemetaan';
        $data['kecamatanbywarna'] = $this->db->get_where('kecamatan', ['warna' => $this->session->userdata('warna')])->row_array();
        $data['pemetaan'] = $this->M_pemetaan->pemetaan()->result_array();
        $data['kecamatan'] = $this->M_kecamatan->kecamatan();
        $data['total'] = $this->M_total->tampil_data()->result_array();
        $data['persentase'] = $this->M_total->persen()->result_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        if (isset($_POST[''])) {
            $kecamatan = $_POST['kecamatan_id'];
        }
        $this->load->view('frontend/template/head');
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/pemetaan/mapb', $data);
        $this->load->view('frontend/template/footer');
    }
    public function chart()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $kecamatan = $this->input->post('kecamatan_id');
        $data['kecamatan'] = $this->db->get_where('total', ['kecamatan_id' => $kecamatan])->result_array();
        $this->load->view('pemetaan/chart', $data);
    }
}
