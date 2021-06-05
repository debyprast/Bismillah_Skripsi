<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hasil_model extends CI_Model
{
    public function import_data($datahasil)
    {
		$jumlah = count($datahasil);
		if ($jumlah > 0){
			$this->db->replace('gejala_penyakit', $datahasil);
		}
    }

	public function getDataHasil()
    {
        return $this->db->get('gejala_penyakit')->result_array();
    }
}
