<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang_model extends CI_Model
{
    public function import_data($databarang)
    {
		$jumlah = count($databarang);
		if ($jumlah > 0){
			$this->db->replace('gejala', $databarang);
		}
    }

	public function getDataBarang()
    {
        return $this->db->get('gejala')->result_array();
    }
}
