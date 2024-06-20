<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class Download extends CI_Controller {

    public function __construct()
    {
        parent ::__construct();
        $this->load->helper(array('url', 'download'));
    }
    public function index()
    {
        $this->load->view('v_download');

    }
    function lakukan_download(){
        force_download('assets/gambar/images1.png',NULL);
    }
}