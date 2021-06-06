<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ikan_model extends CI_Model
{
	private $_table = "dataikan";
    public $id_ikan, $ikan;

    public function rules()
    {
        return [
            [
                'field' => 'ikan',
                'label' => 'Nama ikan',
                'rules' => 'required'
            ]
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id_ikan)
    {
        return $this->db->get_where($this->_table, ["id_ikan" => $id_ikan])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        // $this->id_ikan = $post["id_ikan"];
        $this->ikan = $post["ikan"];

        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        //  var_dump($post);
        $this->id_ikan = $post["id_ikan"];
        $this->ikan = $post["ikan"];

        $this->db->update($this->_table, $this, array("id_ikan" => $post["id_ikan"]));
    }

    public function delete($id_ikan)
    {

        return $this->db->delete($this->_table, array("id_ikan" => $id_ikan));
    }
    public function ikan()
    {
		$query = $this->db->query("SELECT * FROM ikan ORDER BY ikan ASC");
		return $query->result();
	
	}

	public function gejala()
    {
		$query = $this->db->query("SELECT * FROM gejala ORDER BY ikan ASC");
		return $query->result();

	}

	
}
