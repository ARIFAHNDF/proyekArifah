<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');
        $this->load->helper('url');
        $this->load->library('session');
    }

    public function index()
    {
        $data['user'] = $this->m_data->ambil_data()->result();
        $this->load->view('v_tampil', $data);
    }

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

    function hapus($id) {
        $where = array('id_buku' => $id);
        $delete = $this->m_data->hapus_data($where);

        if ($delete) {
            // jika berhasil, set flashdata untuk pesan berhasil
            $this->session->set_flashdata('message', 'Data ID ' . $id . ' berhasil dihapus.');
        } else {
            // jika terjadi kesalahan, tangkap exception dan set flashdata untuk pesan kesalahan
            $this->session->set_flashdata('error', 'Gagal menghapus data ID: ' . $id);
        }
        redirect('web/user');
    }
    function edit($id){
        $data['user']       =   $this->m_data->getById($id);
        $this->load->view('v_edit',$data);
    }
    function update(){
        $id     = $this->input->post('id_buku');
        $judul  = $this->input->post('judul_buku');
        $tahun   = $this->input->post('tahun_terbit');
        $pengarang   = $this->input->post('nama_pengarang');
        

        $data = array(
            'judul_buku'     =>$judul,
            'tahun_terbit'     =>$tahun,
            'nama_pengarang'     =>$pengarang
        );
        $update = $this->m_data->update_data($data, $id);
        if ($update){
            //jika berhasil, set flashdata untuk pesan berhasil
            $this->session->set_flashdata('message','data berhasil di ubah.');
        }else{
            // jika terjadi kesalahan,tangkap exception dan set flashdata untuk pesan kesalahan
            $this->session->set_flashdata('error','gagal mengubah data');
        }
        redirect('web/user');
    }
}
