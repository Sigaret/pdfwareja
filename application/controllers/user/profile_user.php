<?php

class Profile_user extends CI_Controller{

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
        $dataU['user'] = $this->db->get_where('tuser',['email'=>$this->session->userdata('email')])->row_array();
        $tampil=$this->m_home->data_profile($this->session->userdata('id_user'));
        $topV=$this->m_home->topviewer();
        $data=array(
            'data'=>$tampil          
        );
        $this->load->view('user/v_profile',$data+$dataU);
    }

    public function update($id)
    {
        $this->m_home->cek($id);
        $alldata=$this->m_home->cek($id);
        $kate=$this->m_home->data_kat();
        $data = array(
            'data'=>$alldata,
            'kategori'=>$kate
        );
        $this->load->view('user/v_ubah',$data);
    }

    public function updateSave()
    {
        $this->m_home->ubah_simpan();
        echo"<script>alert('Data Telah Diubah');</script>";
        redirect('user/profile_user');
    }

    public function hapus($id)
    {
        $this->m_home->hapus($id);
        echo"<script>alert('Data Telah Dihapus');</script>";
        redirect('user/profile_user');
    }
}

