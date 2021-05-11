<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Filter extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
		
    }

 public function filter($id)
 {
	if ($id == 0) {
		$data = $this->db->get('gejala')->result();
	   }
	   else
	   {
		$data = $this->db->get_where('gejala', ['idikan'=>$id])->result();
	   }
	   $dt['test'] = $data;
	   $dt['idikan'] = $id;
	   $this->load->view('user/tampil', $dt);
 }
}

