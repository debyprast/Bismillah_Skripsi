<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Filter extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
		
    }

 public function filterag($id)
 {
	if ($id == 0) {
		$data = $this->db->get('gejala')->result();
	   }
	   else
	   {
		$data = $this->db->get_where('gejala', ['id_ikan'=>$id])->result();
	   }
	   $dt['test'] = $data;
	   $dt['id_ikan'] = $id;
	   $this->load->view('admin/tampil', $dt);
 }

 public function filterap($id)
 {
	if ($id == 0) {
		$data = $this->db->get('penyakit')->result();
	   }
	   else
	   {
		$data = $this->db->get_where('penyakit', ['id_ikan'=>$id])->result();
	   }
	   $dt['test1'] = $data;
	   $dt['id_ikan'] = $id;
	   $this->load->view('admin/tampil1', $dt);
 }

 public function filterug($id)
 {
	if ($id == 0) {
		$data = $this->db->get('gejala')->result();
	   }
	   else
	   {
		$data = $this->db->get_where('gejala', ['id_ikan'=>$id])->result();
	   }
	   $dt['test'] = $data;
	   $dt['id_ikan'] = $id;
	   $this->load->view('user/tampil', $dt);
	}
}

