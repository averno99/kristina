<?php

class Kecamatan extends CI_Controller
{
    public function index()
    {

        $data['kecamatan'] = $this->db->get('kecamatan')->result_array();
        $data['title'] = "Data Kecamatan";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $keyword = $this->input->get('tahun');

        if ($keyword) {
            $data['kecamatan'] = $this->db->get_where('kecamatan', ['tahun' => $keyword])->result_array();
        }

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('kecamatan/kecamatan', $data);
        $this->load->view('templates/footer');
    }
    public function tambah_aksi()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $Kode = $this->input->post('Kode');
        $Nama_Kecamatan = $this->input->post('Nama_Kecamatan');
        $warna = $this->input->post('warna');
        $geojson = $_FILES['geojson'];
        if ($geojson = '') {
        } else {
            $config['upload_path']     = './assets/GeoJson';
            $config['allowed_types']   = 'file|img|JPG|geojson';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('geojson')) {
                echo "Upload Gagal";
                die();
            } else {
                $geojson = $this->upload->data('file_name');
            }
        }


        $data = array(

            'Kode' => $Kode,
            'Nama_Kecamatan' => $Nama_Kecamatan,
            'geojson' => $geojson,
            'warna' => $warna

        );
        $this->db->insert('kecamatan', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data Baru berhasil ditambahkan!</div>');
        redirect('kecamatan/index');
    }
    public function hapus_data($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('M_kecamatan');
        $where = array('id' => $id);
        $this->M_kecamatan->hapus_data($where, 'kecamatan');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data Kecamatan berhasil dihapus!</div>');
        redirect('kecamatan/index');
    }
    public function edit_data($id)
    {
        $where = array('id' => $id);
        $this->load->model('M_kecamatan');
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kecamatan'] = $this->M_kecamatan->edit_data($where, 'kecamatan')->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('kecamatan/edit_data', $data);
        $this->load->view('templates/footer');
    }
    public function update()
    {
        $id = $this->input->post('id');
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $kode = $this->input->post('Kode');
        $nama_kecamatan = $this->input->post('Nama_Kecamatan');
        $geojson = $this->input->post('geojson');
        $warna = $this->input->post('warna');

        $data = array(

            'Kode' => $kode,
            'Nama_Kecamatan' => $nama_kecamatan,
            'geojson' => $geojson,
            'warna' => $warna

        );
        $where = array(
            'id' => $id
        );
        $this->load->model('M_kecamatan');
        $this->M_kecamatan->update_data($where, $data, 'kecamatan');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data Kecamatan berhasil diedit!</div>');
        redirect('kecamatan/index');
    }
}
