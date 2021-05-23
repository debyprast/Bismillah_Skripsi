<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('Penyakit_model');
		$this->load->model('Gejala_model');
		$this->load->library('form_validation');
		
        if (!($this->session->userdata('username'))) {
            redirect(base_url('loginadmin'));
            // redirect($this->index());
        }
    }

	public function index(){
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/index');
		$this->load->view('template_admin/footer');
    }

	public function tambahikan(){
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/tambah_ikan');
		$this->load->view('template_admin/footer');
    }

	public function tambahpenyakit(){
		$data['datapenyakit'] = $this->Penyakit_model->getDataPenyakit();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/tambah_penyakit', $data);
		$this->load->view('template_admin/footer');
    }

	public function tambahgejala(){
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/tambah_gejala');
		$this->load->view('template_admin/footer');
    }

	public function dataikan(){
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/data_ikan');
		$this->load->view('template_admin/footer');
    }

	public function datapenyakit(){
		$data['datapenyakit'] = $this->Penyakit_model->getDataPenyakit();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/data_penyakit', $data);
		$this->load->view('template_admin/footer');
    }

	public function datagejala(){
		$data['datagejala'] = $this->Gejala_model->getDataGejala();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/data_gejala', $data);
		$this->load->view('template_admin/footer');
    }

	public function datagejalapenyakit(){
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/data_gejalapenyakit');
		$this->load->view('template_admin/footer');
    }
}
