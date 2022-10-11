<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_modul extends CI_Model {
    
    function data()
    {
        $us=$this->db->select('*')
                 ->from('tberkas')
                 ->join('tkategori','tberkas.id_kategori=tkategori.id_kategori')
                 ->join('tuser','tberkas.id_user=tuser.id_user')
                 ->where('tkategori.nama_kat','Modul')
                 ->order_by('tgl_uploaded','DESC')
                 ->get()
                 ->result();
        return $us;    
    }
}    