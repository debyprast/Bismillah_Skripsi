<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gejala_model extends CI_Model
{
	private $_table = "gejala";
	public $id_gejala;
	public $id_ikan;
	public $gejala;

	public function rules()
	{
		return [
			[
				'field' => 'gejala',
				'label' => 'gejala',
				'rules' => 'required'
			]
		];
	}

	public function import_data($datagejala)
	{
		$jumlah = count($datagejala);
		if ($jumlah > 0) {
			$this->db->replace('gejala', $datagejala);
		}
	}

	public function getDataGejala()
	{
		return $this->db->get('gejala')->result_array();
	}

	public function getById($id_gejala)
	{
		return $this->db->get_where($this->_table, ["id_gejala" => $id_gejala])->row();
	}

	public function save()
	{
		$post = $this->input->post();
		$this->ikan = $post["ikan"];
		$this->gejala = $post["gejala"];
		$this->id_ikan = $post["id_ikan"];
		$this->db->insert($this->_table, $this);
	}

	public function update()
	{
		$post = $this->input->post();
		//  var_dump($post);

		$this->id_gejala = $post["id_gejala"];
		$this->ikan = $post["ikan"];
		$this->gejala = $post["gejala"];
		$this->id_ikan = $post["id_ikan"];

		$this->db->update($this->_table, $this, array("id_gejala" => $post["id_gejala"]));
	}

	public function delete($ikan)
	{

		return $this->db->delete($this->_table, array("ikan" => $ikan));
	}
}
