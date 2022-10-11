<?php

class M_search extends CI_Model{


public function cari()
    {
        $search = $this->input->GET('search', TRUE);
        // $data = $this->db->query("SELECT * from tberkas where judul_b like '%$search%'");
        // return $data->result();

        $data=$this->db->select('*')
        ->from('tberkas')
        ->join('tkategori','tberkas.id_kategori=tkategori.id_kategori')
        ->join('tuser','tberkas.id_user=tuser.id_user')
        ->like('tberkas.judul_b',$search)
        ->or_like('tkategori.nama_kat',$search)
        ->get()
        ->result();
        return $data;  

    }    
}
