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
		if ($jumlah > 0){
			$this->db->replace('gejala', $datagejala);
		}
    }

	public function getDataGejala()
    {
        return $this->db->get('gejala')->result_array();
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id_gejala)
    {
        return $this->db->get_where($this->_table, ["id_gejala" => $id_gejala])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        // $this->ikanp = $post["id_gejala"];
		$this->ikan = $post["ikan"];
		$this->gejala = $post["gejala"];
        $this->id_ikan = $post["id_ikan"];
        // $this->date_created = $post["date_created"];
        // $this->date_modified = $post["date_modified"];
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

    public function delete($id_gejala)
    {
        
        return $this->db->delete($this->_table, array("id_gejala" => $id_gejala));
    }
}
