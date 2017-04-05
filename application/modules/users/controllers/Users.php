<?php
	class Users extends MX_Controller
	{
		public function __construct()
		{
			parent::__construct();
		}

		public function login()
		{
			$this->load->view('header');
			$this->load->view('login');
			$this->load->view('footer');
		}
	}
?>
