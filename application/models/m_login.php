<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {
    
    function cek()
    {
         

    }

    public function register($data)
    {
        $this->db->insert('tuser',$data);
    }

}