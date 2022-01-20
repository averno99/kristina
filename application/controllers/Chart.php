<?php
class Chart extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('M_total');
    }

    public function index()
    {
        $data['graph'] = $this->M_total->graph();
        $this->load->view('chart', $data);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    }
}
