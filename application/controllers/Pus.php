<?php

class Pus extends CI_Controller
{
    public function index()
    {
        $this->load->model('M_pus');
        $this->load->model('M_kecamatan');


        $data['pus'] = $this->M_pus->tampil_data()->result_array();
        $data['kecamatan'] = $this->M_kecamatan->tampil_data()->result_array();

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['title'] = "Data Jumlah Pasangan Usia Subur";
        $keyword = $this->input->get('cari');

        if ($keyword) {
            $data['pus'] = $this->M_pus->cari_data($keyword)->result_array();
        }


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        if ($data['user']['role_id'] == 1) {
            $this->load->view('pus/pus', $data);
        } else {
            $this->load->view('pegawai/pus', $data);
        }
        $this->load->view('templates/footer');
    }
    public function tambah_aksi()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $id = $this->input->post('id');
        $tahun = $this->input->post('tahun');
        $jumlah_pus = $this->input->post('jumlah_pus');


        $data = array(

            'id' => $id,
            'tahun' => $tahun,
            'jumlah_pus' => $jumlah_pus,

        );
        $this->db->insert('pus', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data baru berhasil ditambahkan!</div>');
        redirect('pus/index');
    }
    public function hapus_data($id_data)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('M_pus');
        $where = array('id_data' => $id_data);
        $this->M_pus->hapus_data($where, 'pus');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data pus berhasil dihapus!</div>');
        redirect('pus/index');
    }
    public function edit_data($id_data)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $where = array('id_data' => $id_data);
        $this->load->model('M_pus');
        $data['pus'] = $this->M_pus->edit_data($where, 'pus')->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('pus/edit_pus', $data);
        $this->load->view('templates/footer');
    }
    public function update()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $id_data = $this->input->post('id_data');
        $id = $this->input->post('id');
        $tahun = $this->input->post('tahun');
        $jumlah_pus = $this->input->post('jumlah_pus');



        $data = array(

            'id' => $id,
            'tahun' => $tahun,
            'jumlah_pus' => $jumlah_pus

        );
        $where = array(
            'id_data' => $id_data
        );
        $this->load->model('M_pus');
        $this->M_pus->update_data($where, $data, 'pus');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data pus berhasil diedit!</div>');
        redirect('pus/index');
    }
}
