<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
	private $_table = "user";
    public $id_user, $username, $password;

    public function rules()
    {
        return [
            [
                'field' => 'username',
                'label' => 'Nama username',
                'rules' => 'required'
            ]
        ];
    }

	public function import_data($datauser)
    {
		$jumlah = count($datauser);
		if ($jumlah > 0){
			$this->db->replace('gejala', $datauser);
		}
    }

	public function getDatauser()
    {
        return $this->db->get('user')->result_array();
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id_username)
    {
        return $this->db->get_where($this->_table, ["id_username" => $id_username])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        // $this->id_username = $post["id_username"];
        $this->username = $post["username"];

        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        //  var_dump($post);
        $this->id_username = $post["id_username"];
        $this->username = $post["username"];

        $this->db->update($this->_table, $this, array("id_username" => $post["id_username"]));
    }

    public function delete($id_username)
    {

        return $this->db->delete($this->_table, array("id_username" => $id_username));
    }	
}
