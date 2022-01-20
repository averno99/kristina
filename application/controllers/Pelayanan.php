<?php

class Pelayanan extends CI_Controller
{
    public function index()
    {

        $this->load->model('M_pelayanan');
        $this->load->model('M_kecamatan');


        $data['pelayanan'] = $this->M_pelayanan->tampil_data()->result_array();
        $data['kecamatan'] = $this->M_kecamatan->tampil_data()->result_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['title'] = "Data Jumlah Pelayanan KB";
        $keyword = $this->input->get('cari');

        if ($keyword) {
            $data['pelayanan'] = $this->M_pelayanan->cari_data($keyword)->result_array();
        }

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        if ($data['user']['role_id'] == 1) {
            $this->load->view('pelayanan/pelayanan', $data);
        } else {
            $this->load->view('pegawai/pelayanan', $data);
        }
        $this->load->view('templates/footer');
    }
    public function tambah_aksi()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $id = $this->input->post('id');
        $tahun = $this->input->post('tahun');
        $jumlah_pelayanan = $this->input->post('jumlah_pelayanan');


        $data = array(

            'id' => $id,
            'tahun' => $tahun,
            'jumlah_pelayanan' => $jumlah_pelayanan,


        );
        $this->db->insert('pelayanan', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data baru berhasil ditambahkan!</div>');
        redirect('pelayanan/index');
    }
    public function hapus_data($id_data)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('M_pelayanan');
        $where = array('id_data' => $id_data);
        $this->M_pelayanan->hapus_data($where, 'pelayanan');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data pelayanan berhasil dihapus!</div>');
        redirect('pelayanan/index');
    }
    public function edit_data($id_data)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $where = array('id_data' => $id_data);
        $this->load->model('M_pelayanan');

        $data['pelayanan'] = $this->M_pelayanan->edit_data($where, 'pelayanan')->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('pelayanan/edit_pelayanan', $data);
        $this->load->view('templates/footer');
    }
    public function update()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $id_data = $this->input->post('id_data');
        $id = $this->input->post('id');
        $tahun = $this->input->post('tahun');
        $jumlah_pelayanan = $this->input->post('jumlah_pelayanan');


        $data = array(
            'id' => $id,
            'tahun' => $tahun,
            'jumlah_pelayanan' => $jumlah_pelayanan

        );
        $where = array(
            'id_data' => $id_data
        );
        $this->load->model('M_pelayanan');
        $this->M_pelayanan->update_data($where, $data, 'pelayanan');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data pelayanan berhasil diedit!</div>');
        redirect('pelayanan/index');
    }
}
