<?php

class Soal_user extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_soal');
        if(empty($this->session->userdata('email'))){
            redirect('login');
        }
    }

    
    public function index()
    {
        $dataU['user'] = $this->db->get_where('tuser',['email'=>$this->session->userdata('email')])->row_array();
        $tampil=$this->m_soal->data();
        $data=array(
            'data'=>$tampil
        );  
        $this->load->view("user/v_soal_user",$data+$dataU);
    }
}


