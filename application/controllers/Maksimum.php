<?php

class Maksimum extends CI_Controller
{
    public function index()
    {

        $data['maksimum'] = $this->db->get('maksimum')->result_array();
        $data['title'] = " Peritungan Maksimum";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('perhitungan/maksimum/maksimum', $data);
        $this->load->view('templates/footer');
    }
    public function tambah_aksi()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $kecamatan = $this->input->post('kecamatan');
        $bobot_penduduk = $this->input->post('bobot_penduduk');
        $bobot_pus = $this->input->post('bobot_pus');
        $bobot_akseptor = $this->input->post('bobot_akseptor');
        $bobot_pelayanan = $this->input->post('bobot_pelayanan');
        $bobot_kelahiran = $this->input->post('bobot_kelahiran');

        $data = array(
            'kecamatan' => $kecamatan,
            'bobot_penduduk' => $bobot_penduduk,
            'bobot_pus' => $bobot_pus,
            'bobot_akseptor' => $bobot_akseptor,
            'bobot_pelayanan' => $bobot_pelayanan,
            'bobot_kelahiran' => $bobot_kelahiran,
        );
        $this->db->insert('maksimum', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data baru berhasil ditambahkan!</div>');
        redirect('maksimum/index');
    }
    public function hapus_data($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('M_maksimum');
        $where = array('id' => $id);
        $this->M_maksimum->hapus_data($where, 'maksimum');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data harkat maksimum berhasil dihapus!</div>');
        redirect('maksimum/index');
    }
    public function edit_data($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $where = array('id' => $id);
        $this->load->model('M_maksimum');

        $data['maksimum'] = $this->M_maksimum->edit_data($where, 'maksimum')->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('perhitungan/maksimum/edit_maksimum', $data);
        $this->load->view('templates/footer');
    }
    public function update()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $id = $this->input->post('id');
        $kecamatan = $this->input->post('kecamatan');
        $bobot_penduduk = $this->input->post('bobot_penduduk');
        $bobot_pus = $this->input->post('bobot_pus');
        $bobot_akseptor = $this->input->post('bobot_akseptor');
        $bobot_pelayanan = $this->input->post('bobot_pelayanan');
        $bobot_kelahiran = $this->input->post('bobot_kelahiran');
        $data = array(
            'kecamatan' => $kecamatan,
            'bobot_penduduk' => $bobot_penduduk,
            'bobot_pus' => $bobot_pus,
            'bobot_akseptor' => $bobot_akseptor,
            'bobot_pelayanan' => $bobot_pelayanan,
            'bobot_kelahiran' => $bobot_kelahiran
        );
        $where = array(
            'id' => $id
        );
        $this->load->model('M_maksimum');
        $this->M_maksimum->update_data($where, $data, 'maksimum');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data harkat maksimum berhasil diedit!</div>');
        redirect('maksimum/index');
    }
}
