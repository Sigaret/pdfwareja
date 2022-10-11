<?php

class Search extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_search');
    }

    

    public function index()
    {
        $this->load->view("v_search");
    }

    public function hasil()
    {
        $data2['result']= $this->m_search->cari();
        $this->load->view('v_search',$data2);
    }

}