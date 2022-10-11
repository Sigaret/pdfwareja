<?php

class M_viewer_pdf extends CI_Model{



    
function  tampil($id)
    {
        $u = $this->db->select('*')
                    ->from('tberkas')
                    ->join('tkategori','tberkas.id_kategori=tkategori.id_kategori')
                    ->join('tuser','tberkas.id_user=tuser.id_user')
                    ->where('tberkas.id_berkas',$id)
                    ->get()
                    ->result();
        return $u;  
    }

public function update_itung($id)
{
    $this->db->where('id_berkas', $id);
    $this->db->select('viewed'); $count = $this->db->get('tberkas')->row();
    
    $this->db->where('id_berkas',$id);
    $this->db->set('viewed', ($count->viewed + 1));
    
    $this->db->update('tberkas');
}

}
