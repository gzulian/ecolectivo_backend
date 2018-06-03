<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}
	public function index()
	{
		$this->load->view('template/header', null, FALSE);
		$this->load->view('admin/index', null, FALSE);
		$this->load->view('template/footer', null, FALSE);
	}
	public function driver()
	{
		$this->load->view('template/header', null, FALSE);
		$this->load->view('admin/driver', null, FALSE);
		$this->load->view('template/footer', null, FALSE);
	}
	public function car()
	{
		$this->load->view('template/header', null, FALSE);
		$this->load->view('admin/car', null, FALSE);
		$this->load->view('template/footer', null, FALSE);
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */