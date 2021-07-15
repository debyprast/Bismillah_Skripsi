<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penyakit_model extends CI_Model
{
	private $_table = "penyakit";
	public $id_penyakit;
	public $id_ikan;
	public $penyakitp;

	public function rules()
	{
		return [
			[
				'field' => 'penyakitp',
				'label' => 'penyakitp',
				'rules' => 'required'
			]
		];
	}

	public function import_data($datapenyakit)
	{
		$jumlah = count($datapenyakit);
		if ($jumlah > 0) {
			$this->db->replace('penyakit', $datapenyakit);
		}
	}

	public function getDataPenyakit()
	{
		return $this->db->get('penyakit')->result_array();
	}

	public function getAll()
	{
		return $this->db->get($this->_table)->result();
	}

	public function getById($id_penyakit)
	{
		return $this->db->get_where($this->_table, ["id_penyakit" => $id_penyakit])->row();
	}

	public function filterap($id)
	{
		if ($id == 0) {
			$data = $this->db->get('penyakit')->result();
		} else {
			$data = $this->db->get_where('penyakit', ['id_ikan' => $id])->result();
		}
		$dt['test1'] = $data;
		$dt['id_ikan'] = $id;
		$this->load->view('admin/tampil1', $dt);
	}

	public function save()
	{
		$post = $this->input->post();
		$this->ikanp = $post["ikanp"];
		$this->penyakitp = $post["penyakitp"];
		$this->id_ikan = $post["id_ikan"];
		// $this->date_created = $post["date_created"];
		// $this->date_modified = $post["date_modified"];
		$this->db->insert($this->_table, $this);
	}

	public function update()
	{
		$post = $this->input->post();
		//  var_dump($post);

		$this->id_penyakit = $post["id_penyakit"];
		$this->ikanp = $post["ikanp"];
		$this->penyakitp = $post["penyakitp"];
		$this->id_ikan = $post["id_ikan"];

		$this->db->update($this->_table, $this, array("id_penyakit" => $post["id_penyakit"]));
	}

	public function delete($id_penyakit)
	{

		return $this->db->delete($this->_table, array("id_penyakit" => $id_penyakit));
	}
}
