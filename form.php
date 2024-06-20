<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class Form extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');

    }
    public function index()
    {
        $this->load->view('v_form');
    }
    function aksi(){
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('konfir_email', 'Konfirmasi Email', 'required');

          function tambah() {
        $this->load->view('v_input');
    }

    function tambah_aksi(){
        $judul = $this->input->post('judul_buku');
        $tahun = $this->input->post('tahun_terbit');
        $pengarang = $this->input->post('nama_pengarang');

        $data = array(
            'judul_buku' => $judul,
            'tahun_terbit' => $tahun,
            'nama_pengarang' => $pengarang
        );
        $input = $this->m_data->input_data($data);
        if ($input) {
            // jika berhasil, set flashdata untuk pesan berhasil
            $this->session->set_flashdata('message', 'Data berhasil ditambahkan.');
        } else {
            // jika terjadi kesalahan, tangkap exception dan set flashdata untuk pesan kesalahan
            $this->session->set_flashdata('error', 'Gagal menambahkan data.');
        }
        redirect('web/user');
    }

        if($this->form_validation->run() != false){
            echo "Form validation oke";
        
        }else{
            $this->load->view('v_form');
        }

    }
    
}