<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Paging extends CI_Model {

    public function data_paging($number, $offset)
    {
        return $this->db->get('tbl_buku', $number, $offset)->result();
    }

    public function jumlah_data()
    {
        return $this->db->get('tbl_buku')->num_rows();
    }
}
