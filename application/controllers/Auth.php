<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	private $_admin		=	"admin";
	private $_user		=	"user";

	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
		$this->load->library('form_validation');
	}
	public function index()
	{
		redirect(base_url('loginuser'));
	}

	public function admin() // VIEW LOGIN ADMIN
	{
		if (($this->session->userdata('username'))) { // Jika ada session admin tidak boleh login lagi
			redirect(base_url('admin'));
		} elseif ($this->session->userdata('username')) {
			redirect(base_url('user'));
		} else {
			$data['judul']	=	'Login Admin';
			$this->load->view('auth/header', $data);
			$this->load->view('auth/login_admin');
			$this->load->view('auth/footer');
		}
	}

	public function user() // VIEW LOGIN user
	{
		if (($this->session->userdata('username'))) { // Jika ada session admin tidak boleh login lagi
			redirect(base_url('admin'));
		} elseif ($this->session->userdata('username')) {
			redirect(base_url('user'));
		} else {
			$data['judul']	=	'Login user';
			$this->load->view('auth/header', $data);
			$this->load->view('auth/login_user');
			$this->load->view('auth/footer');
		}
	}

	public function register(){
		$this->load->view('auth/header');
		$this->load->view('auth/register');
		$this->load->view('auth/footer');
    }

	public function regist()
    {
        $tambah = $this->Model_jadwal;
        $validation = $this->form_validation;
        $validation->set_rules($tambah->rules());

        if ($validation->run()) {
            $tambah->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        } else {
            $this->session->set_flashdata('Gagal', 'Tidak Berhasil disimpan');
        }
        $data["kelas"] = $this->Model_kelas->getAll();
        $data["jurusan"] = $this->Model_jurusan->getAll();
        $data["jadwal"] = $this->Model_jadwal->getAll();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/jadwal', $data);
        $this->load->view('template_admin/footer');
        
    }

	public function login_admin()
	{
		$this->form_validation->set_rules('username', 'Username Admin', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->admin();
		} else {
			$username	=	$this->input->post('username');
			$password	=	$this->input->post('password');
			$where 		=	"username";
			$cek		= 	$this->login_model->cek_login($this->_admin, $where, $username, $password);

			if ($cek) { // jika username ada
				foreach ($cek as $row) {
					$this->session->set_userdata('username', $row->username);
					redirect(base_url("admin"));
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger">
				username Password salah</div>');
				$this->admin();
			}
		}
	}

	public function login_user()
	{
		$this->form_validation->set_rules('username', 'username user', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->user();
		} else {
			$username	=	$this->input->post('username');
			$password	=	$this->input->post('password');
			$where 		=	"username";
			$cek		= 	$this->login_model->cek_login($this->_user, $where, $username, $password);
			if ($cek) {
				// DATANYA ADA
				foreach ($cek as $row) {
					$this->session->set_userdata('username', $row->username);
					redirect(base_url("user")); // localhost/controlleruser
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger">
				Nomor Induk user / Password salah</div>');
				$this->user();
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
