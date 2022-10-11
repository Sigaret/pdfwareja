<?php

class Jm extends CI_Controller{


    function __construct()
    {
        parent::__construct();
        $this->load->model('m_jm');
    }

    public function index()
    {
        $tampil=$this->m_jm->data();
        $data=array(
            'data'=>$tampil
        );  
        $this->load->view ("v_jm",$data);
    }


}

