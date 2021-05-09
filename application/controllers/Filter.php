<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Filter extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
		// $this->load->model('Penyakit_model');
		// $this->load->model('Gejala_model');
        // if (!$this->session->userdata('email')) {
		// 	redirect(base_url('Auth/loginadmin'));
		// }else{
            
        // }
    }

 public function filter($id)
 {
	if ($id == 0) {
		$data = $this->db->get('gejala')->result();
	   }
	   else
	   {
		$data = $this->db->get_where('gejala', ['ikan_id'=>$id])->result();
	   }
	   $dt['test'] = $data;
	   $this->load->view('user/tampil', $dt);
 }
}

