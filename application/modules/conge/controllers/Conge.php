<?php
	/**
	*
	*/
	class Conge extends MX_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('Conge_model');
			//load the type de formation model class
			$this->load->model('Employe_model');
		}
		public function index()
		{	
			$data ['liste_conge']= $this->Conge_model
									->with('employe')
									->get_all();
			
			$this->load->view('header');
			$this->load->view('conge/index', $data);
			$this->load->view('footer');
		}

		public function add(){
			$data['liste_employé'] = $this->Employe_model->get_all();
			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<p class = "error">', '</p>');
			
			$this->form_validation->set_rules('conge_lib', 'libelle du conge', 'trim|required');
			$this->form_validation->set_rules('date_debut', 'date debut ', 'trim|required');
			$this->form_validation->set_rules('date_fin', 'date_fin', 'trim|required');
			$this->form_validation->set_rules('employe_id', 'employé en congé', 'trim|required');
			
			if($this->form_validation->run() === FALSE)
			{
				$this->load->view('header');
				$this->load->view('conge/add' ,$data);
				$this->load->view('footer');
			}
			else
			{
				$conge_lib = strtoupper(($this->input->post('conge_lib')));
				$date_debut = ($this->input->post('date_debut'));
				$date_fin = ($this->input->post('date_fin'));
				$employe_id = ($this->input->post('employe_id'));
				$tabs = array(
								'conge_lib' => $conge_lib,
								'date_debut' => $date_debut,
								'date_fin' => $date_fin,
								'employe_id' => $employe_id,
								
				 );
				 $conge2= $this->Conge_model->get_by($tabs);
				 if($conge2)
				 {
					$this->session->set_flashdata('error', 'Ce congé existe déjà');
					   redirect('conge');
				 }
				 else
				 {
					$params = array(
								'conge_lib' => $conge_lib,
								'date_debut' => $date_debut,
								'date_fin' => $date_fin,
								'employe_id' => $employe_id,
								
				 );	
				 $conge_id = $this->Conge_model->insert($params);
				 if($conge_id){
					 /***************************** log file ****************************/
						$session = $this->session->userdata('auth');
						//$data = date('d/m/Y H:i:s').'|Ajout de conge  '.$congee_lib.'|'.$session->users_email;
						//write_file('assets/.journal', $data."\n", 'a+');
					/******************************************************************/
					 $this->session->set_flashdata('success', 'Le conge a été ajouté avec succès');
					 redirect('conge');
				 }
				 else{
					   $this->session->set_flashdata('error', 'Une erreur est survenue lors de l\'ajout du conge');
					   redirect('conge');
				 }
				 }
				 
			}
	}
	

		public function update($conge_id){
		$data['liste_employé'] = $this->Employe_model->get_all();
		$conge = $this->Conge_model->get($conge_id);
		if($conge){
			$data['liste_conge'] = $conge;
			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<p class = "error">', '</p>');
			$this->form_validation->set_rules('conge_lib', 'libelle', 'trim|required');
			$this->form_validation->set_rules('date_debut', 'date debut ', 'trim|required');
			$this->form_validation->set_rules('date_fin', 'date fin ', 'trim|required');
			$this->form_validation->set_rules('employe_id', 'employé en congé', 'trim|required');
			if($this->form_validation->run() === FALSE)
			{
				
				$this->load->view('header');
				$this->load->view('conge/update' ,$data);
				$this->load->view('footer');
			}
			else
			{
				
				$conge_lib = strtoupper($this->input->post('conge_lib'));
				$date_debut= ($this->input->post('date_debut'));
				$date_fin = ($this->input->post('date_fin'));
				$employe_id = ($this->input->post('employe_id'));
				
				$params = array(
								'conge_lib' => $conge_lib,
								'date_debut' => $date_debut,
								'date_fin' => $date_fin,
								'employe_id' => $employe_id,
								
				 );	
				 $update = $this->Conge_model->update($conge_id, $params);
				 
				 if($update){
					 /***************************** log file ****************************/
						$session = $this->session->userdata('auth');
						//$data = date('d/m/Y H:i:s').'|Modification du stagiaire qui a pour ID #'.$stagiaire_id.'('.$stagiaire->stagiaire_nom.')|'.$session->users_email;
						//write_file('assets/.journal', $data."\n", 'a+');
					/******************************************************************/
					 $this->session->set_flashdata('success', 'Le conge a été modifié avec succès');
					 redirect('conge');
				 }
				 else{
					   $this->session->set_flashdata('error', 'Une erreur est survenue lors de la modification du conge');
					   redirect('conge');
				 }
			}
		}
		else{
			$this->session->set_flashdata('error', 'Le conge que vous voulez modifier n\'existe pas');
			redirect('conge');
		}
	}
		public function delete($conge_id){
		$conge = $this->Conge_model->get($conge_id);
		if($conge){
				 $delete = $this->Conge_model->delete($conge_id);
				 if($delete){
					 /***************************** log file ****************************/
						$session = $this->session->userdata('auth');
						//$data = date('d/m/Y H:i:s').'|Suppression de qui a pour ID #'.$formateur_id.'('.$formateur.')|'.$session->users_email;
						//write_file('assets/.journal', $data."\n", 'a+');
					/******************************************************************/
					 $this->session->set_flashdata('success', 'Le conge a été supprimé avec succès');
					 redirect('conge');
				 }
				 else{
					   $this->session->set_flashdata('error', 'Une erreur est survenue lors de la suppression d\'un conge');
					   redirect('conge');
				 }
		}
		else{
			$this->session->set_flashdata('error', 'Le conge que vous voulez supprimer n\'existe pas');
			redirect('conge');
		}
	}

		
		
  }
?>