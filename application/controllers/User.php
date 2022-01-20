<?php

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_user');
    }
    public function index()
    {

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Kelola Data User";
        $data['dataUser'] = $this->M_user->getDataUser()->result_array();
        $data['role'] = $this->db->get('user_role')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('user/user', $data);
        $this->load->view('templates/footer');
    }

    public function datauser()
    {
        $data['title'] = 'Data User';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // $this->load->model('M_user');

        $data['dataUser'] = $this->M_user->getDataUser();
        // $data['role'] = $this->db->get('user_role')->result_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('role_id', 'Role', 'required');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[5]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|min_length[5]|matches[password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/user', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'role_id' => 2,
                'is_active' => 0,

            ];

            $this->db->insert('user', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data user berhasil ditambahkan!</div>');
            redirect('user');
        }
    }
    public function editdatauser($id)
    {
        $this->load->model('M_user');
        $this->M_user->editdatauser($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data user berhasil diedit!</div>');
        redirect('user');
    }

    public function hapusdatauser($id)
    {
        $this->load->model('M_user');
        $this->M_user->hapusdatauser($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data user berhasil dihapus!</div>');
        redirect('user');
    }
}
