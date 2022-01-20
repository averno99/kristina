<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Harkat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_harkat');
    }

    public function view_penduduk()
    {

        $data['kecamatan'] = $this->db->get('kecamatan')->result_array();

        if ($this->input->get('kecamatan')) {
            $data['tahun'] = $this->M_harkat->loadtahun_penduduk();
            $data['pelayanan'] = $this->M_harkat->loadtahun_pelayanan();
        }

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('harkat/penduduk', $data);
        $this->load->view('templates/footer');
        $this->load->view('harkat/js_penduduk');
    }

    public function getPerbandinganPenduduk($datatahun)
    {
        // contoh logic perbangingan
        $quer1 = $this->M_harkat->getNowPenduduk($datatahun);
        $quer2 = $this->M_harkat->getPenduduk($datatahun);
        $res1 = (int)$quer1->jumlah_penduduk;
        $res2 = (int)$quer2->jumlah_penduduk;
        $finalres = "";
        if ($res1 < $res2) {
            $finalres = '1';
        } elseif ($res1 > $res2) {
            $finalres = '2';
        } else {
            $finalres = '3';
        }
        // var_dump($finalres);
        // die;
        // end contoh

        echo json_encode($finalres);
    }

    public function getPerbandinganPelayanan($datatahun)
    {
        // contoh logic perbangingan
        $quer1 = $this->M_harkat->getNowPelayanan($datatahun);
        $quer2 = $this->M_harkat->getPelayanan($datatahun);
        $res1 = (int)$quer1->jumlah_pelayanan;
        $res2 = (int)$quer2->jumlah_pelayanan;
        $finalres = "";
        if ($res1 < $res2) {
            $finalres = '1';
        } elseif ($res1 > $res2) {
            $finalres = '2';
        } else {
            $finalres = '3';
        }
        // var_dump($finalres);
        // die;
        // end contoh

        echo json_encode($finalres);
    }

    public function getPerbandinganPus($datatahun)
    {
        // contoh logic perbangingan
        $quer1 = $this->M_harkat->getNowPus($datatahun);
        $quer2 = $this->M_harkat->getPus($datatahun);
        $res1 = (int)$quer1->jumlah_pus;
        $res2 = (int)$quer2->jumlah_pus;
        $finalres = "";
        if ($res1 < $res2) {
            $finalres = '1';
        } elseif ($res1 > $res2) {
            $finalres = '2';
        } else {
            $finalres = '3';
        }
        // var_dump($finalres);
        // die;
        // end contoh

        echo json_encode($finalres);
    }

    public function getPerbandinganKelahiran($datatahun)
    {
        // contoh logic perbangingan
        $quer1 = $this->M_harkat->getNowKelahiran($datatahun);
        $quer2 = $this->M_harkat->getKelahiran($datatahun);
        $res1 = (int)$quer1->jumlah_kelahiran;
        $res2 = (int)$quer2->jumlah_kelahiran;
        $finalres = "";
        if ($res1 < $res2) {
            $finalres = '1';
        } elseif ($res1 > $res2) {
            $finalres = '2';
        } else {
            $finalres = '3';
        }
        // var_dump($finalres);
        // die;
        // end contoh

        echo json_encode($finalres);
    }

    public function getPerbandinganAkseptor($datatahun)
    {
        // contoh logic perbangingan
        $quer1 = $this->M_harkat->getNowAkseptor($datatahun);
        $quer2 = $this->M_harkat->getAkseptor($datatahun);
        $res1 = (int)$quer1->jumlah_akseptor;
        $res2 = (int)$quer2->jumlah_akseptor;
        $finalres = "";
        if ($res1 < $res2) {
            $finalres = '1';
        } elseif ($res1 > $res2) {
            $finalres = '2';
        } else {
            $finalres = '3';
        }
        // var_dump($finalres);
        // die;
        // end contoh

        echo json_encode($finalres);
    }
}
