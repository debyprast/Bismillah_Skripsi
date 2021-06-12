<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Keputusan_model extends CI_Model {

	private $_table = "gejala_penyakit";
    public $id_ikan;
	public $id_gejala;
    public $id_penyakit;

	public function rules()
    {
        return [
            [
                'field' => 'id_ikan',
                'label' => 'id_ikan',
                'rules' => 'required'
            ]
        ];
    }

	public function import_data($datahasil)
    {
		$jumlah = count($datahasil);
		if ($jumlah > 0){
			$this->db->replace('gejala_penyakit', $datahasil);
		}
    }

	public function getDataHasil()
    {
        return $this->db->get('gejala_penyakit')->result_array();
    }
	
	public function list(){
		return $this->db->select('ikan.id_ikan,gejala.id_gejala, penyakit.id_penyakit')
						->from('ikan')
						->join('gejala_penyakit ON ikan.id_ikan = gejala_penyakit.id_ikan')
						->join('gejala ON gejala.id_gejala = gejala_penyakit.id_gejala')
						->join('penyakit ON penyakit.id_penyakit = gejala_penyakit.id_penyakit')
						->get()
						->result();
	}

	public function save(){
		// $post = $this->input->post();
	
		// $this->id_penyakit = $post('id_penyakit');
		$id_ikan = $this->input->post('id_ikan');
		for ($i=0; $i < sizeof($id_ikan); $i++){
			$data = array('id_ikan' => $id_ikan[$i]);
			$this->db->insert('added_data', $data);
			$this->db->insert($this->_table, $this); 
		}
	
		$id_gejala = $this->input->post["id_gejala"];
		for ($i=0; $i < sizeof($id_gejala); $i++){
			$data = array('id_gejala' => $id_gejala[$i]);
			$this->db->insert('added_data', $data);
			$this->db->insert($this->_table, $this);
		}
	
		$id_penyakit = $this->input->post('id_penyakit');
		for ($i=0; $i < sizeof($id_penyakit); $i++){
			$data = array('id_penyakit' => $id_penyakit[$i]);
			$this->db->insert('added_data', $data);
			$this->db->insert($this->_table, $this);
		}
		// $id_ikan = $this->input->post('id_penyakit');
	
		$this->session->set_flashdata('msg', "Data berhasil ditambah");
		$this->session->set_flashdata('msg_class', 'alert-success');
		return redirect('Admin/keputusan');
		}
}
