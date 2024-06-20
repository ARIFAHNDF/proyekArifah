<?php
defined('BASEPATH') OR exit ('No direct script acces allowed');
class Ngoding extends CI_Controller {
    public function index()
    {
        $this->load->library('mypustaka');
        $this->mypustaka->nama_saya();
        echo "<br>";
        $this->mypustaka->nama_kamu("Arifah");
    }
}