<?php
defined ('BASEPATH') OR exit ('No direct script acces allowed');
class Web extends CI_Controller {
    public function __construct()
    {  
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('m_data');
        $this->load->model('m_paging');
        $this->load->library('session');

    }
    public function index()
    {
        $data['judul'] = "SELAMAT DATANG ";
        $this->load->view('v_header',$data);
        $this->load->view('v_index',$data);
        $this->load->view('v_footer',$data);
       
    }

public function user(){
         $data['judul'] = "Halaman about";
         $this->load->view('v_header',$data);
         $data['user'] = $this->m_data->ambil_data()->result();
        $this->load->view('v_tampil.php',$data);
        $this->load->view('v_footer',$data);

      
}

}