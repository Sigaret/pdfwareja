<?php

class Soal extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_soal');
    }


    public function index()
    {        
        $tampil=$this->m_soal->data();
        $data=array(
            'data'=>$tampil
        );  
        $this->load->view("v_soal",$data);
    }
}