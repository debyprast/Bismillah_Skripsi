<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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

	public function login(){
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('login/masuk');
		$this->load->view('template_admin/footer');
    }

	
}
