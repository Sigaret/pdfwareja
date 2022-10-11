<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {
    
    function data()
    {
        $us=$this->db->select('*')
                 ->from('tberkas')
                 ->join('tkategori','tberkas.id_kategori=tkategori.id_kategori')
                 ->join('tuser','tberkas.id_user=tuser.id_user')                                  
                 ->order_by('tgl_uploaded','DESC')
                 ->get()
                 ->result();
        return $us;    
    }

    public function download($id_berkas)
    {
        $data = $this->db->get_where('tberkas',array('id_berkas'=>$id_berkas));
        return $data->row_array();
    }

    public function topviewer()
    {
        $top=$this->db->select('*')
                      ->from('tberkas')
                      ->order_by('viewed', 'DESC')
                      ->limit(5)
                      ->get()
                      ->result();
        return $top;    
     
    }


    public function data_kat()
    {
        $k=$this->db->select('*')
                      ->from('tkategori')                      
                      ->get()
                      ->result();
        return $k;    
     
    }



    public function cek($id)
    {
        $us=$this->db->select('*')
                 ->from('tberkas')
                 ->join('tkategori','tberkas.id_kategori=tkategori.id_kategori')
                 ->join('tuser','tuser.id_user=tuser.id_user')
                 ->where('tberkas.id_berkas',$id)
                 ->get()
                 ->result();
        return $us;    

    }

    public function ubah_simpan()
    {
        $tgl_up =date("Y-m-d");
        $id =  $this->input->post('id',true);
        $data = array(
            "judul_b" => $this->input->post('judul',true),
            "abstrak" => $this->input->post('abstrak',true),
            "tgl_updated" =>$tgl_up,          
            "id_kategori" => $this->input->post('kategori',true)
        );
        $this->db->where('id_berkas',$id);
        $this->db->update('tberkas',$data);        
    }

    public function hapus( $id )
    {
		$this->db->where('id_berkas',$id);
                $this->db->delete('tberkas');
                
    }

    function data_profile($id)
    {
        $us=$this->db->select('*')
                 ->from('tberkas')
                 ->join('tkategori','tberkas.id_kategori=tkategori.id_kategori')
                 ->join('tuser','tberkas.id_user=tuser.id_user')                                  
                 ->order_by('tgl_uploaded','DESC')
                 ->where('tberkas.id_user',$id)
                 ->get()
                 ->result();
        return $us;    
    }    


}