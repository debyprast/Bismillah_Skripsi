<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        // if (!$this->session->userdata('email')) {
		// 	redirect(base_url('Auth/loginadmin'));
		// }else{
            
        // }
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
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/tambah_penyakit');
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
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/data_penyakit');
		$this->load->view('template_admin/footer');
    }

	public function datagejala(){
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/data_gejala');
		$this->load->view('template_admin/footer');
    }

	public function importcsv(){
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/data_penyakit');
		$this->load->view('template_admin/footer');
    }

	public function datagejalapenyakit(){
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/data_gejalapenyakit');
		$this->load->view('template_admin/footer');
    }
}
