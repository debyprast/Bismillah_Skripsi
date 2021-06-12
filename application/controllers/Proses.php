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

 public function tambahkeputusan()
    {
        $tambah = $this->Keputusan_model;
        $validation = $this->form_validation;
        $validation->set_rules($tambah->rules());

        if ($validation->run()) {
            $tambah->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $data['datahasil'] = $this->Keputusan_model->getDataHasil();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/data_gejalapenyakit', $data);
        $this->load->view('template_admin/footer');
        
    }
}

		