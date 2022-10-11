<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_upload extends CI_Model  {
    

    public function data_kategori()
    {      
        $kt=$this->db->select('*')
                 ->from('tkategori')                    
                 ->get()
                 ->result();
        return $kt;                         
    }

    public function tambah($data){
   
        // var_dump ($data)  ;
        // $data = array(
        //     "judul_b" => $this->input->post('judul',true),
        //     "abstrak" => $this->input->post('abstrak',true),
        //     "file" => $file,
        //     "id_kategori" => $this->input->post('kategori',true)
        // );
    //    echo "oke" ;
        $this->db->insert('tberkas',$data);
        
    }


}