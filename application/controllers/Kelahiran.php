<?php

class Kelahiran extends CI_Controller
{
    public function index()
    {

        $this->load->model('M_kelahiran');
        $this->load->model('M_kecamatan');


        $data['kelahiran'] = $this->M_kelahiran->tampil_data()->result_array();
        $data['kecamatan'] = $this->M_kecamatan->tampil_data()->result_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Data Kelahiran Bayi";
        $keyword = $this->input->get('cari');

        if ($keyword) {
            $data['kelahiran'] = $this->M_kelahiran->cari_data($keyword)->result_array();
        }

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        if ($data['user']['role_id'] == 1) {
            $this->load->view('kelahiran/kelahiran', $data);
        } else {
            $this->load->view('pegawai/kelahiran', $data);
        }
        $this->load->view('templates/footer');
    }
    public function tambah_aksi()
    {

        $id = $this->input->post('id');
        $tahun = $this->input->post('tahun');
        $jumlah_kelahiran = $this->input->post('jumlah_kelahiran');
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data = array(

            'id' => $id,
            'tahun' => $tahun,
            'jumlah_kelahiran' => $jumlah_kelahiran,

        );

        $this->db->insert('kelahiran', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data baru berhasil ditambahkan!</div>');
        redirect('kelahiran/index');
    }
    public function hapus_data($id_data)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('M_kelahiran');
        $where = array('id_data' => $id_data);
        $this->M_kelahiran->hapus_data($where, 'kelahiran');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data Kelahiran berhasil dihapus!</div>');
        redirect('kelahiran/index');
    }
    public function edit_data($id_data)
    {
        $where = array('id_data' => $id_data);
        $this->load->model('M_kelahiran');
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kelahiran'] = $this->M_kelahiran->edit_data($where, 'kelahiran')->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('kelahiran/edit_kelahiran', $data);
        $this->load->view('templates/footer');
    }
    public function update()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $id_data = $this->input->post('id_data');
        $id = $this->input->post('id');
        $tahun = $this->input->post('tahun');
        $jumlah_kelahiran = $this->input->post('jumlah_kelahiran');


        $data = array(
            'id' => $id,
            'tahun' => $tahun,
            'jumlah_kelahiran' => $jumlah_kelahiran
        );
        $where = array(
            'id_data' => $id_data
        );
        $this->load->model('M_kelahiran');
        $this->M_kelahiran->update_data($where, $data, 'kelahiran');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data kelahiran berhasil diedit!</div>');
        redirect('kelahiran/index');
    }
}
