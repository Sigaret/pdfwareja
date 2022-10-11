<?php

class Modul extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_modul');
    }
    

    public function index()
    {
        $tampil=$this->m_modul->data();
        $data=array(
            'data'=>$tampil
        );  
        $this->load->view("v_modul",$data);
    }
}