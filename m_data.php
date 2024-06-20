<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data extends CI_Model {

    function ambil_data() {
        return $this->db->get('tbl_buku');
    }

    function input_data($data) {
        try {
            $this->db->insert('tbl_buku', $data);
            return true; //jika berhasil input data
        } catch (Exception $e) {
            log_message('error', $e->getMessage()); //catat pesan error ke log
            return false; //jika terjadi kesalahan, kembalikan false
        }
    }

    function hapus_data($where){
        try {
            // lakukan penghapusan data dengan klausa where
            $this->db->where($where);
            $this->db->delete('tbl_buku');

            // periksa apakah data berhasil dihapus atau tidak
            if ($this->db->affected_rows() > 0){
                return TRUE;
            } else {
                throw new Exception("Gagal menghapus data atau data tidak ditemukan.");
            }
        } catch (Exception $e) {
            // tangani pengecualian
            log_message('error', $e->getMessage());
            return FALSE;
        }
    }
    function getById($id){
        $query = $this->db->get_where('tbl_buku', array('id_buku' => $id));

        // periksa apakah data di temukan
        if($query->num_rows() > 0){
            // jika dat ditemukan kembalikan query dalam bentuk array
            return $query->row();
        }else {
            //jika data tidak di temukan kembalikan nilai NULL
            return NULL;
        }
    }
    function update_data($data, $id){
        try{
            $this->db->where('id_buku',$id);
            $this->db->update('tbl_buku',$data);
            return true; //jika berhasil input data
        }catch (Exception $e){
            log_message('error', $e->getMessage()); // catat pesan erorke log
            return false; // jika terjadi kesalahan kembalikan ke false
        }
    }
}
