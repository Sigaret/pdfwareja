<?php

class Upload_user extends CI_Controller{

    function __construct()
    {
        parent::__construct();

        $this->load->model('m_upload');
        // $this->load->library('form_validation');
        //$this->upload->initialize($config);
        if(empty($this->session->userdata('email'))){
            redirect('login');
        }

    }
    

    public function index()
    {
        $dataU['user'] = $this->db->get_where('tuser',['email'=>$this->session->userdata('email')])->row_array();
        $dataK=$this->m_upload->data_kategori();
        $kategori=array(
            'kategori' => $dataK
        ); 

        $config['upload_path'] = 'assets/berkas/';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload',$config);
        $this->upload->initialize($config);

        $this->form_validation->set_rules('judul','Title','required');
        $this->form_validation->set_rules('abstrak','Abstract','required');    
        
        
        if( $this->form_validation->run() == FALSE || !($this->upload->do_upload('file'))){                     
                $errors = $this->upload->display_errors(); 
                $data = array('er' => $errors);
                $this->load->view("user/v_upload",$kategori+$data+$dataU);   
        }else{       
                $tgl_up =date("Y-m-d-H-i-s");                                  
                $data= $this->upload->data();
                // var_dump ($data);
                extract($data);

                $id_ser=$this->session->userdata('id_user');
                
               $data = array(
                 "judul_b" => $this->input->post('judul',true),
                 "abstrak" => $this->input->post('abstrak',true),
                 "file" => $file_name,
                 "tgl_uploaded" => $tgl_up,
                 "tags" => $this->input->post('skill',true),
                 "id_kategori" => $this->input->post('kategori',true),
                 "id_user"      => $id_ser
               );
                $this->m_upload->tambah($data);
                $this->session->set_flashdata('flash','Behasil Di Tambahkan');
                 redirect('user/home_user','refresh');            
            // echo "<script>document.writeln(tags);</script>";

            // convert pdf to image    
            // $path = base_url();                    
            // $imagick = new Imagick();

            // $imagick->setResolution(150, 150);
                        
            // $imagick->readImage( getcwd().'/assets/berkas/44277417-25-kisah-para-nabi.pdf[0]');
            
            // $imagick->setImageCompressionQuality(20);
            
            // $imagick->writeImages( getcwd().'/assets/thumbnail/converted_page_one.jpg',true);
            

        }        
        
    }
}