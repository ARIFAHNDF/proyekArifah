<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paging extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('m_paging');
    }

    public function index() 
    {
        $jumlah_data = $this->m_paging->jumlah_data();
        $this->load->library('pagination');

        $config['base_url'] = base_url().'web/user/paging/';
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 10;
      
        $from =$this->uri->segment(2) ;
        $this->pagination->initialize($config);

        $data['user'] = $this->m_paging->data_paging($config['per_page'], $from);

        $this->load->view('v_data', $data);
    }
}
