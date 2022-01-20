<?php

class Persentase extends CI_Controller
{
    public function index()
    {

        $this->load->model('M_persentase');

        $data['persentase'] = $this->M_persentase->tampil_data()->result_array();
        $data['title'] = " Peritungan Persentase";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // var_dump($data['persentase']);
        // die;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('perhitungan/persentase/persentase', $data);
        $this->load->view('templates/footer');
    }


    public function hapus_data($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('M_persentase');
        $where = array('id' => $id);
        $this->M_persentase->hapus_data($where, 'persentase');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data persentase berhasil dihapus!</div>');
        redirect('persentase/index');
    }
}
