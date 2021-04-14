<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penyakit_model extends CI_Model
{
    public function import_data($datapenyakit)
    {
		$jumlah = count($datapenyakit);
		if ($jumlah > 0){
			$this->db->replace('penyakit', $datapenyakit);
		}
    }

	public function getDataPenyakit()
    {
        return $this->db->get('penyakit')->result_array();
    }
}
