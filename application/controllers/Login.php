<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mlogin');
	}

	public function index()
	{
		
		$this->load->view('login');
		
	}
	public function proseslogin()
	{
		$user = $this->input->post('username');
		$pass = $this->input->post('password');
		$where=array(
			'username' => $user,
			'password' => $pass 
			);

		$cek= $this->Mlogin->getuser($where);
		if ($cek->num_rows() == 1) {
			$data_session = array(
				'username' => $user,
				'status' => 'login'
				);
			$this->session->set_userdata($data_session);
			redirect('kandangcontroller','refresh');
		}
		else{
			echo "<script>alert('Username atau password salah silahkan ulangi kembali..!');</script>";
			$this->load->view('login');
		}

	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login','refresh');
	}
	
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */