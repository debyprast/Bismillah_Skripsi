<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proses extends CI_Controller {

	// public $expire_for_cookie = 1440;
	function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
		$this->load->model('Keputusan_model');
		
    }

    
   
	public function save()
	{
		// $post = $this->input->post();

		// $this->penyakitp = $post('penyakitp');
		// $ikan = $this->input->post('ikan');
		// $data = array('ikan' => $ikan);
		// $this->db->insert('added_data', $data);

		$ikan = $this->input->post('ikan');
		$gejala = $this->input->post('gejala');
		$penyakitp = $this->input->post('penyakitp');
		$data = array(
			'ikan' => $ikan,
			'gejala' => serialize($gejala),
			'penyakitp' => $penyakitp

		);
		$this->Keputusan_model->insert_entry($data);
        redirect('admin/datagejalapenyakit');
	}
	

//  public function proses($tampil)
//  {
// 	if ($tampil) {
// 		$query = $this->db->query("SELECT id_penyakit, count(*) as jumlah from gejala_penyakit where id_ikan = 1
// 		 and id_gejala in (855) group by id_penyakit");
// 		return $query->result();
// 	}
// 	   elseif ($tampil)
// 	   {
// 		$query = $this->db->query("SELECT id_penyakit, count(*) as jumlah from gejala_penyakit where id_ikan = 1 
// 		and id_penyakit = 60");
// 		return $query->result();
// 	   }
// 	   $dt['test'] = $tampil;
// 	   $this->load->view('user/tampil', $tampil);
//  }


}

		