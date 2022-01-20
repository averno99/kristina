<?php

class Total extends CI_Controller
{
    public function index()
    {
        $this->load->model('M_harkat');
        $this->load->model('M_total');
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['total'] = $this->M_total->tampil_data()->result_array();
        $data['title'] = "Perhitungan Total";
        $keyword = $this->input->get('tahun');

        $data['kecamatan'] = $this->db->get('kecamatan')->result_array();
        if ($keyword) {
            $data['total'] = $this->M_total->cari_data($keyword)->result_array();
        }

        if ($this->input->get('kecamatansel')) {
            $data['tahun'] = $this->M_harkat->loadtahun_penduduk();
            $data['pelayanan'] = $this->M_harkat->loadtahun_pelayanan();
            $data['pus'] = $this->M_harkat->loadtahun_pus();
            $data['kelahiran'] = $this->M_harkat->loadtahun_kelahiran();
            $data['akseptor'] = $this->M_harkat->loadtahun_akseptor();
        }



        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('perhitungan/total/total', $data);
        $this->load->view('templates/footer');
        $this->load->view('harkat/js_penduduk');
    }

    public function getPerbandinganPenduduk($datatahun)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('M_harkat');
        // contoh logic perbangingan
        $quer1 = $this->M_harkat->getNowPenduduk($datatahun);
        $quer2 = $this->M_harkat->getPenduduk($datatahun);
        $res1 = (int)$quer1->jumlah_penduduk;
        $res2 = (int)$quer2->jumlah_penduduk;
        $finalres = "";
        if ($res1 < $res2) {
            $finalres = '3';
        } elseif ($res1 > $res2) {
            $finalres = '1';
        } else {
            $finalres = '2';
        }
        // var_dump($finalres);
        // die;
        // end contoh

        echo json_encode($finalres);
    }

    public function getPerbandinganPelayanan($datatahun)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('M_harkat');
        // contoh logic perbangingan
        $quer1 = $this->M_harkat->getNowPelayanan($datatahun);
        $quer2 = $this->M_harkat->getPelayanan($datatahun);
        $res1 = (int)$quer1->jumlah_pelayanan;
        $res2 = (int)$quer2->jumlah_pelayanan;
        $finalres = "";
        if ($res1 < $res2) {
            $finalres = '1';
        } elseif ($res1 > $res2) {
            $finalres = '3';
        } else {
            $finalres = '2';
        }
        // var_dump($finalres);
        // die;
        // end contoh

        echo json_encode($finalres);
    }

    public function getPerbandinganPus($datatahun)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('M_harkat');
        // contoh logic perbangingan
        $quer1 = $this->M_harkat->getNowPus($datatahun);
        $quer2 = $this->M_harkat->getPus($datatahun);
        $res1 = (int)$quer1->jumlah_pus;
        $res2 = (int)$quer2->jumlah_pus;
        $finalres = "";
        if ($res1 < $res2) {
            $finalres = '1';
        } elseif ($res1 > $res2) {
            $finalres = '3';
        } else {
            $finalres = '2';
        }
        // var_dump($finalres);
        // die;
        // end contoh

        echo json_encode($finalres);
    }

    public function getPerbandinganKelahiran($datatahun)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('M_harkat');
        // contoh logic perbangingan
        $quer1 = $this->M_harkat->getNowKelahiran($datatahun);
        $quer2 = $this->M_harkat->getKelahiran($datatahun);
        $res1 = (int)$quer1->jumlah_kelahiran;
        $res2 = (int)$quer2->jumlah_kelahiran;
        $finalres = "";
        if ($res1 < $res2) {
            $finalres = '3';
        } elseif ($res1 > $res2) {
            $finalres = '1';
        } else {
            $finalres = '2';
        }
        // var_dump($finalres);
        // die;
        // end contoh

        echo json_encode($finalres);
    }

    public function getPerbandinganAkseptor($datatahun)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('M_harkat');
        // contoh logic perbangingan
        $quer1 = $this->M_harkat->getNowAkseptor($datatahun);
        $quer2 = $this->M_harkat->getAkseptor($datatahun);
        $res1 = (int)$quer1->jumlah_akseptor;
        $res2 = (int)$quer2->jumlah_akseptor;
        $finalres = "";
        if ($res1 < $res2) {
            $finalres = '1';
        } elseif ($res1 > $res2) {
            $finalres = '3';
        } else {
            $finalres = '2';
        }
        // var_dump($finalres);
        // die;
        // end contoh

        echo json_encode($finalres);
    }

    public function tambah_aksi()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $tahun = $this->input->post('tahun');
        $kecamatan_id = $this->input->post('keca_id');
        $harkat_penduduk = $this->input->post('harkat_penduduk');
        $harkat_pus = $this->input->post('harkat_pus');
        $harkat_akseptor = $this->input->post('harkat_akseptor');
        $harkat_pelayanan = $this->input->post('harkat_pelayanan');
        $harkat_kelahiran = $this->input->post('harkat_kelahiran');

        $bbtpend = 2;
        $bbtpus = 2;
        $bbtaks = 3;
        $bbtpel = 1;
        $bbtkel = 2;
        $hasilpend =     $harkat_penduduk * $bbtpend;
        $hasilpus =  $harkat_pus  * $bbtpus;
        $hasilaks =  $harkat_akseptor * $bbtaks;
        $hasilpel =  $harkat_pelayanan * $bbtpel;
        $hasilkel =  $harkat_kelahiran * $bbtkel;
        $hasilttl = $hasilpend + $hasilpus + $hasilaks + $hasilpel + $hasilkel;

        $data = array(
            'tahun' => $tahun,
            'kecamatan_id' => $kecamatan_id,
            'bobot_penduduk' => $bbtpend,
            'harkat_penduduk' => $harkat_penduduk,
            'hasil_penduduk' => $hasilpend,
            'bobot_pus' => $bbtpus,
            'harkat_pus' => $harkat_pus,
            'hasil_pus' => $hasilpus,
            'harkat_akseptor' => $harkat_akseptor,
            'bobot_akseptor' => $bbtaks,
            'hasil_akseptor' => $hasilaks,
            'harkat_pelayanan' => $harkat_pelayanan,
            'bobot_pelayanan' => $bbtpel,
            'harkat_kelahiran' => $harkat_kelahiran,
            'bobot_kelahiran' => $bbtkel,
            'hasil_kelahiran' => $hasilkel,
            'total' => $hasilttl,

        );
        $this->db->insert('total', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data baru berhasil ditambahkan!</div>');
        redirect('total/index');
    }
    public function hapus_data($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('M_total');
        $where = array('id' => $id);
        $this->M_total->hapus_data($where, 'total');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data harkat total berhasil dihapus!</div>');
        redirect('total/index');
    }
}
