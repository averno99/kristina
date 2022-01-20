<?php

class Penduduk extends CI_Controller
{
    public function index()
    {

        $this->load->model('M_penduduk');
        $this->load->model('M_kecamatan');


        $data['penduduk'] = $this->M_penduduk->tampil_data()->result_array();
        $data['kecamatan'] = $this->M_kecamatan->tampil_data()->result_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Penduduk";
        $keyword = $this->input->get('cari');

        if ($keyword) {
            $data['penduduk'] = $this->M_penduduk->cari_data($keyword)->result_array();
        }

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        if ($data['user']['role_id'] == 1) {
            $this->load->view('penduduk/penduduk', $data);
        } else {
            $this->load->view('pegawai/penduduk', $data);
        }
        $this->load->view('templates/footer');
    }
    public function tambah_aksi()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $id = $this->input->post('id');
        $tahun = $this->input->post('tahun');
        $jumlah_penduduk = $this->input->post('jumlah_penduduk');


        $data = array(
            'id' => $id,
            'tahun' => $tahun,
            'jumlah_penduduk' => $jumlah_penduduk,

        );
        $this->db->insert('penduduk', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data baru berhasil ditambahkan!</div>');
        redirect('penduduk/index');
    }
    public function hapus_data($id_data)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('M_penduduk');
        $where = array('id_data' => $id_data);
        $this->M_penduduk->hapus_data($where, 'penduduk');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data penduduk berhasil dihapus!</div>');
        redirect('penduduk/index');
    }
    public function edit_data($id_data)
    {
        $where = array('id_data' => $id_data);
        $this->load->model('M_penduduk');
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['penduduk'] = $this->M_penduduk->edit_data($where, 'penduduk')->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('penduduk/edit', $data);
        $this->load->view('templates/footer');
    }
    public function update()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $id_data = $this->input->post('id_data');
        $id = $this->input->post('id');
        $tahun = $this->input->post('tahun');
        $jumlah_penduduk = $this->input->post('jumlah_penduduk');

        $data = array(
            'id' => $id,
            'tahun' => $tahun,
            'jumlah_penduduk' => $jumlah_penduduk
        );
        $where = array(
            'id_data' => $id_data
        );
        $this->load->model('M_penduduk');
        $this->M_penduduk->update_data($where, $data, 'penduduk');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data penduduk berhasil diedit!</div>');
        redirect('penduduk/index');
    }
}
