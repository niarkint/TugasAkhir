<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_dashboard extends CI_Controller {

	public function index()
	{
		$this->load->view('include/header');
		$this->load->view('dashboard/index');
		$this->load->view('include/footer');
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */