<?php

class Home_user extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_home');
        if(empty($this->session->userdata('email'))){
            redirect('login');
        }
    }


    public function index()
    {
        $data['user'] = $this->db->get_where('tuser',['email'=>$this->session->userdata('email')])->row_array();

        $tampil=$this->m_home->data();
        $topV=$this->m_home->topviewer();
        $data_m=array(
            'data'=>$tampil,
            'top'=>$topV
        );        
        $this->load->view('user/v_index_user',$data_m+$data);
    }

}

