<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		check_login_session();
	}

	public function index()
	{
		$data['title'] = "Dashboard";
		
		$this->template->load('_template', 'dashboard', $data);
	}
}
