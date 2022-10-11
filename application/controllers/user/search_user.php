<?php

class Search_user extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_search');
        if(empty($this->session->userdata('email'))){
            redirect('login');
        }
    }


    public function index()
    {
        $this->load->view('user/v_search_user');
    }

    public function hasil()
    {
        $data2['result']= $this->m_search->cari();
        $this->load->view('user/v_search_user',$data2);
    }
}

