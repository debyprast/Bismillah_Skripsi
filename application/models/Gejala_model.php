<?php
defined('BASEPATH') or exit('No direct script access allowed');

class gejala_model extends CI_Model
{
    public function import_data($datagejala)
    {
		$jumlah = count($datagejala);
		if ($jumlah > 0){
			$this->db->replace('gejala', $datagejala);
		}
    }

	public function getDataGejala()
    {
        return $this->db->get('gejala')->result_array();
    }
}
