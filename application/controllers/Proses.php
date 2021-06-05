<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proses extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
		
    }

 public function proses($tampil)
 {
	if ($tampil) {
		$query = $this->db->query("SELECT id_penyakit, count(*) as jumlah from gejala_penyakit where id_ikan = 1
		 and id_gejala in (855) group by id_penyakit");
		return $query->result();
	}
	   elseif ($tampil)
	   {
		$query = $this->db->query("SELECT id_penyakit, count(*) as jumlah from gejala_penyakit where id_ikan = 1 
		and id_penyakit = 60");
		return $query->result();
	   }
	   $dt['test'] = $tampil;
	   $this->load->view('user/tampil', $tampil);
 }
}

		