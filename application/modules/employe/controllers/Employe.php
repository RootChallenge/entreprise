<?php
	class Employe extends MX_Controller
	{
		public function __construct()
		{
			parent::__construct();
			
			$this->load->model('Employe_model');
		}

		public function index()
		{
			$this->load->view('header');
			$this->load->view('index');
			$this->load->view('footer');
		}
		
		public function add()
		{
			$this->load->library('form_validation');
			
			//$this->form_validation->set-rules('', '', '');
			
			if($this->form_validation->run() === FALSE)
			{
				$this->load->view('header');
				$this->load->view('add');
				$this->load->view('footer');
			}
			else
			{
				
			}
		}
	}
?>
