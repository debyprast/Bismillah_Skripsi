<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        // if (!$this->session->userdata('email')) {
		// 	redirect(base_url('Auth/loginadmin'));
		// }else{
            
        // }
    }

	public function listpenyakit(){
		$this->load->view('template_user/header');
		$this->load->view('template_user/sidebar');
		$this->load->view('user/list_penyakit');
		$this->load->view('template_user/footer');
    }

	
}
