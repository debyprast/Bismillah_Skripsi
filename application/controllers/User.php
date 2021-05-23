<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
		$this->load->model('Ikan_model');
		$this->load->model('Ikan_model');
		if (!($this->session->userdata('username'))) {
            redirect(base_url('loginuser'));
            // redirect($this->index());
        }
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

	public function hasilarwana(){
		$this->load->view('template_user/header');
		$this->load->view('template_user/sidebar');
		$this->load->view('user/ikan_arwana');
		$this->load->view('template_user/footer');
    }

	public function hasilcupang(){
		$this->load->view('template_user/header');
		$this->load->view('template_user/sidebar');
		$this->load->view('user/ikan_cupang');
		$this->load->view('template_user/footer');
    }

	public function hasilkoi(){
		$this->load->view('template_user/header');
		$this->load->view('template_user/sidebar');
		$this->load->view('user/ikan_koi');
		$this->load->view('template_user/footer');
    }


	
}
