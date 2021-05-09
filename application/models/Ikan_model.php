<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ikan_model extends CI_Model
{
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
