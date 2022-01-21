<?php
defined('BASEPATH') or exit();
class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function login()
    {
        if ($this->session->set_userdata('email')) {
            redirect('dashboard');
        }


        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Page';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/footer');
            $this->load->view('auth/login');
        } else {
            $this->_login();
        }
    }
    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        if ($user) {
            if ($user['is_active'] == 0) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']

                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {

                        redirect('Dashboard');
                    } else {
                        redirect('Dashboard');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class ="alert alert-danger" role ="alert"> Password Salah </div>');
                    redirect('auth/login');
                }
            } else {
                $this->session->set_flashdata('message', '<div class ="alert alert-danger" role ="alert"> Email belum diaktivasi</div>');
                redirect('auth/login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class ="alert alert-danger" role ="alert"> Email Tidak Terdaftar!</div>');
            redirect('auth/login');
        }
    }
    public function logout()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('logout', 'Kamu Berhasil Logout');

        redirect('Auth/login');
    }
}
