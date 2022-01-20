<?php

class Akseptor extends CI_Controller
{
    public function index()
    {
        $this->load->model('M_akseptor');
        $this->load->model('M_kecamatan');


        $data['akseptor'] = $this->M_akseptor->tampil_data()->result_array();
        $data['kecamatan'] = $this->M_kecamatan->tampil_data()->result_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['title'] = "Data Jumlah Akseptor KB";
        $keyword = $this->input->get('cari');

        if ($keyword) {
            $data['akseptor'] = $this->M_akseptor->cari_data($keyword)->result_array();
        }

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        if ($data['user']['role_id'] == 1) {
            $this->load->view('akseptor/akseptor', $data);
        } else {
            $this->load->view('pegawai/akseptor', $data);
        }
        $this->load->view('templates/footer');
    }
    public function tambah_aksi()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $id = $this->input->post('id');
        $tahun = $this->input->post('tahun');
        $jumlah_akseptor = $this->input->post('jumlah_akseptor');


        $data = array(

            'id' => $id,
            'tahun' => $tahun,
            'jumlah_akseptor' => $jumlah_akseptor,

        );
        $this->db->insert('akseptor', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data baru berhasil ditambahkan!</div>');

        redirect('akseptor/index');
    }
    public function hapus_data($id_data)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('M_akseptor');
        $where = array('id_data' => $id_data);
        $this->M_akseptor->hapus_data($where, 'akseptor');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data Akseptor berhasil dihapus!</div>');
        redirect('akseptor/index');
    }
    public function edit_data($id_data)
    {
        $where = array('id_data' => $id_data);
        $this->load->model('M_akseptor');

        $data['akseptor'] = $this->M_akseptor->edit_data($where, 'akseptor')->result();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('akseptor/edit_akseptor', $data);
        $this->load->view('templates/footer');
    }
    public function update()
    {
        $id_data = $this->input->post('id_data');
        $id = $this->input->post('id');
        $tahun = $this->input->post('tahun');
        $jumlah_akseptor = $this->input->post('jumlah_akseptor');
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data = array(
            'id' => $id,
            'tahun' => $tahun,
            'jumlah_akseptor' => $jumlah_akseptor
        );
        $where = array(
            'id_data' => $id_data
        );
        $this->load->model('M_akseptor');
        $this->M_akseptor->update_data($where, $data, 'akseptor');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data Kelahiran berhasil diedit!</div>');
        redirect('akseptor/index');
    }
}
