<?php

class Viewer_pdf extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_viewer_pdf');
        $this->load->helper('cookie');
    }
    
    public function tampil_c()
    {

        $id=$this->uri->segment(3);
        $datau=$this->m_viewer_pdf->tampil($id);
        $data = array(
            'data'=>$datau
        );
        $this->load->view("v_viewer_pdf",$data);
        $this->itung($id);
    }

    public function itung($id)
    {
        $slug=$this->uri->segment(4);        

        $ip = $this->input->ip_address();
        $check = $this->input->cookie(urldecode($slug),FALSE);

        if ( $check == FALSE){
            $cookie = array("name" => urldecode($slug), "value" => "$ip", "expire" => time() + 7200, "secure" => false);
            $this->input->set_cookie($cookie);            
        }
        $this->m_viewer_pdf->update_itung($id);
    }
    
}