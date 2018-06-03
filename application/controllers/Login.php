<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login/index');
	}
	function logout() {
		//session_start();
		session_destroy();
		$this->session->unset_userdata('logged_in');
		//session_destroy(); //destruye la sesión, o sea el arreglo de sesión logged_in
		redirect('login', 'refresh');
	}
	function recover() {
		$this->load->view('login/recover', null, FALSE);
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */