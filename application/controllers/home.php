<?php

class Home extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_home');
    }

    public function index()
    {
        $tampil=$this->m_home->data();
        $topV=$this->m_home->topviewer();
        $data=array(
            'data'=>$tampil,
            'top'=>$topV
        );
        $this->load->view('v_index',$data);
        
    }

    public function download()
    {
        $id_berkas=$this->uri->segment(3);
        $file_download = $this->m_home->download($id_berkas);
        $download = 'assets/berkas/'.$file_download['file'];
        force_download($download,NULL);
    }
}

