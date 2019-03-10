<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('templates/auth_header');
        $this->load->view('auth/login');
        $this->load->view('templates/auth_footer');
    }

    public function registration()
    {
        $data['title'] = 'WPU User Registration';
        $this->load->view('templates/auth_header', $data);
        $this->load->view('auth/registration');
        $this->load->view('templates/auth_footer');
    }
}
