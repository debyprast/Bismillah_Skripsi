<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
		$this->load->model('Ikan_model');
    }

	public function index(){
		$this->load->view('template_user/header');
		$this->load->view('template_user/sidebar');
		$this->load->view('user/index');
		$this->load->view('template_user/footer');
    }

	public function listpenyakit(){
		$data['dataikan'] = $this->Ikan_model->gejala();
		$this->load->view('template_user/header');
		$this->load->view('template_user/sidebar');
		$this->load->view('user/list_penyakit', $data);
		$this->load->view('template_user/footer');
    }

	public function listikan(){
		$data['dataikan'] = $this->Ikan_model->ikan();
		$this->load->view('template_user/header');
		$this->load->view('template_user/sidebar');
		$this->load->view('user/list_ikan', $data);
		$this->load->view('template_user/footer');
    }	
}
