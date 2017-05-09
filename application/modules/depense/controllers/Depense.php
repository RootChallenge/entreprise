<?php
	/**
	*
	*/
	class Depense extends MX_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('Depense_model');	
		}


		public function index()
		{
			$data ['liste_depense']= $this->Depense_model->get_all();
			
			$this->load->view('header');
			$this->load->view('depense/index', $data);
			$this->load->view('footer');
		}

		public function add(){
			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<p class = "error">', '</p>');
			
			$this->form_validation->set_rules('depense_lib', 'libellé de depense', 'trim|required');
			$this->form_validation->set_rules('depense_date', 'date de depense ', 'trim|required');
			$this->form_validation->set_rules('depense_mt', 'montant', 'trim|required');
			if($this->form_validation->run() === FALSE)
			{
				$this->load->view('header');
				$this->load->view('depense/add');
				$this->load->view('footer');
			}
			else
			{
				$depense_lib = strtoupper(($this->input->post('depense_lib')));
				$depense_date = ucwords($this->input->post('depense_date'));
				$depense_mt = ($this->input->post('depense_mt'));
				$tabs = array(
								'depense_lib' => $depense_lib,
								'depense_date' => $depense_date,
								'depense_mt' => $depense_mt,							
				 );
				 $depense2= $this->Depense_model->get_by($tabs);
				 if($depense2)
				 {
					$this->session->set_flashdata('error', 'Ce depense existe déjà');
					   redirect('depense');
				 }
				 else
				 {
					$params = array(
								'depense_lib' => $depense_lib,
								'depense_date' => $depense_date,
								'depense_mt' => $depense_mt,
								
				 );	
				 $depense_id = $this->Depense_model->insert($params);
				 if($depense_id){
					 /***************************** log file ****************************/
						$session = $this->session->userdata('auth');
						//$data = date('d/m/Y H:i:s').'|Ajout de depense  '.$depense_lib.'|'.$session->users_email;
						//write_file('assets/.journal', $data."\n", 'a+');
					/******************************************************************/
					 $this->session->set_flashdata('success', 'La depense a été ajouté avec succès');
					 redirect('depense');
				 }
				 else{
					   $this->session->set_flashdata('error', 'Une erreur est survenue lors de l\'ajout de depense');
					   redirect('depense');
				 }
				 }
				 
			}
	}
	

		public function update($depense_id){
		$depense = $this->Depense_model->get($depense_id);
		if($depense){
			$data['liste_depense'] = $depense;
			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<p class = "error">', '</p>');
			$this->form_validation->set_rules('depense_lib', 'libellé ', 'trim|required');
			$this->form_validation->set_rules('depense_date', 'date de depense ', 'trim|required');
			$this->form_validation->set_rules('depense_mt', 'Montant ', 'trim|required');
			if($this->form_validation->run() === FALSE)
			{
				
				$this->load->view('header');
				$this->load->view('depense/update', $data);
				$this->load->view('footer');
			}
			else
			{
				
				$depense_lib = strtoupper($this->input->post('depense_lib'));
				$depense_date = ($this->input->post('depense_date'));
				$depense_mt = ($this->input->post('depense_mt'));
				
				$params = array(
								'depense_lib' => $depense_lib,
								'depense_date' => $depense_date,
								'depense_mt' => $depense_mt,
								
				 );	
				 $update = $this->Depense_model->update($depense_id, $params);
				 
				 if($update){
					 /***************************** log file ****************************/
						$session = $this->session->userdata('auth');
						//$data = date('d/m/Y H:i:s').'|Modification du depense qui a pour ID #'.$depense_id.'('.$depense->depense_id.')|'.$session->users_email;
						//write_file('assets/.journal', $data."\n", 'a+');
					/******************************************************************/
					 $this->session->set_flashdata('success', 'La depense a été modifié avec succès');
					 redirect('depense');
				 }
				 else{
					   $this->session->set_flashdata('error', 'Une erreur est survenue lors de la modification de depense');
					   redirect('depense');
				 }
			}
		}
		else{
			$this->session->set_flashdata('error', 'La depense que vous voulez modifier n\'existe pas');
			redirect('depense');
		}
	}
		public function delete($depense_id){
		$depense = $this->Depense_model->get($depense_id);
		if($depense){
				 $delete = $this->Depense_model->delete($depense_id);
				 if($delete){
					 /***************************** log file ****************************/
						$session = $this->session->userdata('auth');
						//$data = date('d/m/Y H:i:s').'|Suppression de qui a pour ID #'.$formateur_id.'('.$formateur.')|'.$session->users_email;
						//write_file('assets/.journal', $data."\n", 'a+');
					/******************************************************************/
					 $this->session->set_flashdata('success', 'La depense a été supprimé avec succès');
					 redirect('depense');
				 }
				 else{
					   $this->session->set_flashdata('error', 'Une erreur est survenue lors de la suppression de depense');
					   redirect('depense');
				 }
		}
		else{
			$this->session->set_flashdata('error', 'cette depense  que vous voulez supprimer n\'existe pas');
			redirect('depense');
		}
	}

		
		
  }
?>