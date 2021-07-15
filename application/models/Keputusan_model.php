<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Keputusan_model extends CI_Model
{

	private $_table = "uji";
	public $ikan;
	public $gejala;
	public $penyakitp;

	public function rules()
	{
		return [
			[
				'field' => 'ikan',
				'label' => 'ikan',
				'rules' => 'required'
			]
		];
	}

	public function ikan()
	{
		$query = $this->db->query("SELECT * FROM ikan ORDER BY ikan ASC");
		return $query->result();
	}

	public function import_data($datahasil)
	{
		$jumlah = count($datahasil);
		if ($jumlah > 0) {
			$this->db->replace('uji', $datahasil);
		}
	}

	public function getDataHasil()
	{
		return $this->db->get('uji')->result_array();
	}

	public function list()
	{
		return $this->db->select('ikan.ikan,gejala.gejala, penyakitp.penyakitp')
			->from('ikan')
			->join('keputusan ON ikan.ikan = keputusan.ikan')
			->join('gejala ON gejala.gejala = keputusan.gejala')
			->join('penyakitp ON penyakitp.penyakitp = keputusan.penyakitp')
			->get()
			->result();
	}

	public function insert_entry($data)
	{
		$this->db->insert('uji', $data);
	}

	public function delete($id_keputusan)
	{

		return $this->db->delete($this->_table, array("ikan" => $id_keputusan));
	}
	// public function save()
	// {
	// 	// $post = $this->input->post();

	// 	// $this->penyakitp = $post('penyakitp');
	// 	// $ikan = $this->input->post('ikan');
	// 	// $data = array('ikan' => $ikan);
	// 	// $this->db->insert('added_data', $data);

	// 	$ikan = $this->input->post('ikan');
	// 	$gejala = $this->input->post('gejala');
	// 	$penyakitp = $this->input->post('penyakitp');
	// 	$data = array(
	// 		'ikan' => $ikan,
	// 		'gejala' => serialize($gejala),
	// 		'penyakitp' => $penyakitp

	// 	);

	// $post = $this->input->post('keputusan');
	// $this->ikan = $post["ikan"];
	// // $this->gejala = $post["gejala"];
	// $gejala = $this->input->post('gejala');
	// for ($i=0; $i < sizeof($gejala); $i++){
	// 	$data = array('gejala' => $gejala[$i]);
	// 	$this->db->insert('added_data', $data);
	// }
	// $this->penyakitp = $post["penyakitp"];
	// $this->db->insert($this->_table, $this);
	// $this->db->update($this->_table, $this, array("penyakitp" => $post["penyakitp"]));


	// $penyakitp = $this->input->post('penyakitp');
	// $data = array('penyakitp' => $penyakitp);
	// $this->db->insert('added_data', $data);

	// $_ikan = $this->input->post('_penyakitp');

	// $this->session->set_flashdata('msg', "Data berhasil ditambah");
	// $this->session->set_flashdata('msg_class', 'alert-success');
	// return redirect('Admin/keputusan');
}
