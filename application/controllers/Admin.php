<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
        $this->load->model('Penyakit_model');
		$this->load->model('Gejala_model');
		$this->load->model('Ikan_model');
		$this->load->model('Hasil_model');
		
        if (!($this->session->userdata('username'))) {
            redirect(base_url('loginadmin'));
            // redirect($this->index());
        }
    }

	public function index(){
		$data['judul'] = "Wellcome To Administrator";
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/index', $data);
		$this->load->view('template_admin/footer');
    }

	public function tambahikan(){
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/tambah_ikan');
		$this->load->view('template_admin/footer');
    }

	public function tambahpenyakit(){
		$data['dataikan'] = $this->Ikan_model->ikan();
		$data['datapenyakit'] = $this->Penyakit_model->getDataPenyakit();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/tambah_penyakit', $data);
		$this->load->view('template_admin/footer');
    }

	public function tambahpenyakit1()
    {
        $tambah = $this->Penyakit_model;
        $validation = $this->form_validation;
        $validation->set_rules($tambah->rules());

        if ($validation->run()) {
            $tambah->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        
		$data['datapenyakit'] = $this->Penyakit_model->getDataPenyakit();
        $data['dataikan'] = $this->Ikan_model->ikan();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/data_penyakit', $data);
        $this->load->view('template_admin/footer');
        
    }

	public function deletepenyakit($id_penyakit=null)
    {
        if (!isset($id_penyakit)) show_404();
        
        if ($this->Penyakit_model->delete($id_penyakit)) {
			$data['datapenyakit'] = $this->Penyakit_model->getDataPenyakit();
			$data['dataikan'] = $this->Ikan_model->ikan();
            $this->load->view('template_admin/header');
            $this->load->view('template_admin/sidebar');
            $this->load->view('admin/data_penyakit', $data);
            $this->load->view('template_admin/footer');
        }
	}

	public function editpenyakit($id_penyakit=null)
    {
        $var = $this->Penyakit_model;
        $validation = $this->form_validation;
        $validation->set_rules($var->rules());

        if ($validation->run()) {
            $var->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
			$data['dataikan'] = $this->Ikan_model->ikan();
			$data["penyakit"] = $var->getById($id_penyakit);
			if (!$data["penyakit"]) show_404();
        $this->load->view("template_admin/header");
        $this->load->view("template_admin/sidebar");
        $this->load->view("admin/edit_penyakit", $data);
        $this->load->view("template_admin/footer");
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
		$data['datahasil'] = $this->Hasil_model->getDataHasil();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/data_gejalapenyakit',$data);
		$this->load->view('template_admin/footer');
    }

	public function keputusan(){
		$data['dataikan'] = $this->Ikan_model->ikan();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/keputusan', $data);
		$this->load->view('template_admin/footer');
    }
}
