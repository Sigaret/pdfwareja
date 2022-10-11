<?php

class Login extends CI_Controller{
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
    }
 
    public function index()
    {
        $this->form_validation->set_rules('email','Email','trim|required|valid_email');
        $this->form_validation->set_rules('password','Password','trim|required');

        if($this->form_validation->run() == false){
            $this->load->view('v_login');
        }else{
            $this->_cek();
        }
        
    }

    private function _cek()
    {
        $email= $this->input->post('email');
        $password= $this->input->post('password');

        $user = $this->db->get_where('tuser', ['email'=> $email])->row_array();
        
        if(!empty($user)){
            if(password_verify($password,$user['password'])){
                $data = array(
                    'id_user' => $user['id_user'],
                    'nama' => $user['nama'],
                    'email' => $user['email']
                );
                $this->session->set_userdata($data);
                redirect('user/home_user');
            }else{
                $this->session->set_flashdata('great','<div class="alert alert-danger text-light" role="alert">
                 Wrong password !</div>');
                redirect('login');
            }            
        }else{
            $this->session->set_flashdata('great','<div class="alert alert-warning text-dark" role="alert">
            Your email not registered</div>');
            redirect('login');
        }

    }

    public function register()
    {
        $this->load->view('v_register');
    }


    public function auth()
    {
        $this->form_validation->set_rules('fullname','Full Name','required|trim');
        $this->form_validation->set_rules('emailreg','E-mail','required|trim|valid_email|is_unique[tuser.email]',[
            'is_unique' => 'This E-mail has already used!'
        ]);
        $this->form_validation->set_rules('password1','Password','required|trim|min_length[8]|matches[password2]',[
            'matches' => 'Password dont match!',
            'min_lenght' => 'Password minimun 8 charater!'
        ]);
        $this->form_validation->set_rules('password2','Password','required|trim|matches[password1]');

        if($this->form_validation->run() == FALSE){
            $this->load->view('v_register');
        }else{
            $data = array(
                "nama" => $this->input->post('fullname',true),
                "email" => $this->input->post('emailreg',true),
                "password" => password_hash($this->input->post('password1',true),PASSWORD_DEFAULT)
            );
             $this->m_login->register($data);
             $this->session->set_flashdata('great','<div class="alert alert-success shadow-lg" role="alert">
             Hooray!! Your account has been registered!</div>');
             redirect('login');
            
        }        
    }


    public function logout()
    {

        $this->session->unset_userdata('id_user');
        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('email');
        $this->session->sess_destroy();

        // $this->session->set_flashdata('great','<div class="alert alert-success shadow-lg" role="alert">
        // Logout !</div>');
        redirect('home','refresh');
    }
    

}    