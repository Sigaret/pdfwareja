<?php

class Donate_user extends CI_Controller{

    function __construct()
    {
        parent::__construct();        
        if(empty($this->session->userdata('email'))){
            redirect('login');
        }
    }

    public function index()
    {
        $dataU['user'] = $this->db->get_where('tuser',['email'=>$this->session->userdata('email')])->row_array();
        $this->load->view('user/v_donate_user',$dataU);
    }
}

