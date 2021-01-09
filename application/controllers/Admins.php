<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admins extends CI_Controller{
    public function __construct()
    {
        parent::__construct();$this->load->model('Admin_model', 'admin');

    }
    public function index()
    {
        $this->load->view('registration/home_view');
    }
    //load view if you dont logged in
    public function home_view()
    {
        $this->load->view('');
    }
    public function register(){

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('email'   , 'Email'   , 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == true) {

                $data = array(
                    'username'  =>     $this->input->post('username'),
                    'email'     =>     $this->input->post('email'),
                    'password'  => md5($this->input->post('password')),
                    'phonenumber'       =>     $this->input->post('phonenumber'),
                );
                $this->admin->insert($data);
                $this->load->view('registration/login');
            }else {
            $this->load->view('registration/register');
            }
    }

    public function login(){
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == true) {
            $data = array(

                'username' =>     $this->input->post('username'),
                'password' => md5($this->input->post('password')),
            );
            $result = $this->admin->get_all($data);
            if ($result==true) {
                $this->load->view('registration/    add_books');
            }else {
                $this->load->view('registration/login');
                echo "<h2 >Error, Please try again!</h2>";
            }
        }else{
            $this->load->view('registration/login');
        }
    }
    public function logout() {

        // Removing session data
        $sess_array = array(
            'username' => ''
        );
        $this->session->unset_userdata('logged_in', $sess_array);
        $this->load->view('registration/login');
    }
}


