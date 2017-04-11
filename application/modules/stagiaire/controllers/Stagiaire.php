<?php
	/**
	*
	*/
	class Stagiaire extends MX_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('Stagiaire_model');	
		}


		public function index()
		{
			$data ['liste_stagiaire']= $this->Stagiaire_model->get_all();
			
			$this->load->view('header');
			$this->load->view('stagiaire/index', $data);
			$this->load->view('footer');
		}

		public function add(){
			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<p class = "error">', '</p>');
			
			$this->form_validation->set_rules('stagiaire_nom', 'nom du stagiaire', 'trim|required');
			$this->form_validation->set_rules('stagiaire_prenom', 'prénom ', 'trim|required');
			$this->form_validation->set_rules('stagiaire_tel', 'téléphone', 'trim|required|');
			$this->form_validation->set_rules('stagiaire_email', 'email du stagiaire', 'trim|required');
			$this->form_validation->set_rules('stagiaire_adresse', 'adresse ', 'trim|required');
			if($this->form_validation->run() === FALSE)
			{
				$this->load->view('header');
				$this->load->view('stagiaire/add');
				$this->load->view('footer');
			}
			else
			{
				$stagiaire_nom = strtoupper(($this->input->post('stagiaire_nom')));
				$stagiaire_prenom = ucwords($this->input->post('stagiaire_prenom'));
				$stagiaire_tel = ($this->input->post('stagiaire_tel'));
				$stagiaire_email = ($this->input->post('stagiaire_email'));
				$stagiaire_adresse = ($this->input->post('stagiaire_adresse'));
				$params = array(
								'stagiaire_nom' => $stagiaire_nom,
								'stagiaire_prenom' => $stagiaire_prenom,
								'stagiaire_tel' => $stagiaire_tel,
								'stagiaire_email' => $stagiaire_email,
								'stagiaire_adresse' => $stagiaire_adresse,
								
				 );	
				 $stagiaire_id = $this->Stagiaire_model->insert($params);
				 if($stagiaire_id){
					 /***************************** log file ****************************/
						$session = $this->session->userdata('auth');
						//$data = date('d/m/Y H:i:s').'|Ajout de stagiaire  '.$stagiaire_nom.'|'.$session->users_email;
						//write_file('assets/.journal', $data."\n", 'a+');
					/******************************************************************/
					 $this->session->set_flashdata('success', 'Le stagiaire a été ajouté avec succès');
					 redirect('stagiaire');
				 }
				 else{
					   $this->session->set_flashdata('error', 'Une erreur est survenue lors de l\'ajout du stagiaire');
					   redirect('stagiaire');
				 }
			}
	}
	

		public function update($stagiaire_id){
		$stagiaire = $this->Stagiaire_model->get($stagiaire_id);
		if($stagiaire){
			$data['liste_stagiaire'] = $stagiaire;
			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<p class = "error">', '</p>');
			$this->form_validation->set_rules('stagiaire_nom', 'nom ', 'trim|required');
			$this->form_validation->set_rules('stagiaire_prenom', 'prénom ', 'trim|required');
			$this->form_validation->set_rules('stagiaire_tel', 'téléphone ', 'trim|required');
			$this->form_validation->set_rules('stagiaire_email', 'email ', 'trim|required');
			$this->form_validation->set_rules('stagiaire_adresse', 'adresse ', 'trim|required');
			if($this->form_validation->run() === FALSE)
			{
				
				$this->load->view('header');
				$this->load->view('stagiaire/update', $data);
				$this->load->view('footer');
			}
			else
			{
				
				$stagiaire_nom = strtoupper($this->input->post('stagiaire_nom'));
				$stagiaire_prenom = ucwords($this->input->post('stagiaire_prenom'));
				$stagiaire_tel = ($this->input->post('stagiaire_tel'));
				$stagiaire_email= ($this->input->post('stagiaire_email'));
				$stagiaire_adresse = ($this->input->post('stagiaire_adresse'));
				
				$params = array(
								'stagiaire_nom' => $stagiaire_nom,
								'stagiaire_prenom' => $stagiaire_prenom,
								'stagiaire_tel' => $stagiaire_tel,
								'stagiaire_email' => $stagiaire_email,
								'stagiaire_adresse' => $stagiaire_adresse,
								
				 );	
				 $update = $this->Stagiaire_model->update($stagiaire_id, $params);
				 
				 if($update){
					 /***************************** log file ****************************/
						$session = $this->session->userdata('auth');
						//$data = date('d/m/Y H:i:s').'|Modification du stagiaire qui a pour ID #'.$stagiaire_id.'('.$stagiaire->stagiaire_nom.')|'.$session->users_email;
						//write_file('assets/.journal', $data."\n", 'a+');
					/******************************************************************/
					 $this->session->set_flashdata('success', 'Le stagiaire a été modifié avec succès');
					 redirect('stagiaire');
				 }
				 else{
					   $this->session->set_flashdata('error', 'Une erreur est survenue lors de la modification du stagiaire');
					   redirect('stagiaire');
				 }
			}
		}
		else{
			$this->session->set_flashdata('error', 'Le stagiaire que vous voulez modifier n\'existe pas');
			redirect('stagiaire');
		}
	}
		public function delete($stagiaire_id){
		$stagiaire = $this->Stagiaire_model->get($stagiaire_id);
		if($stagiaire){
				 $delete = $this->Stagiaire_model->delete($stagiaire_id);
				 if($delete){
					 /***************************** log file ****************************/
						$session = $this->session->userdata('auth');
						//$data = date('d/m/Y H:i:s').'|Suppression de qui a pour ID #'.$formateur_id.'('.$formateur.')|'.$session->users_email;
						//write_file('assets/.journal', $data."\n", 'a+');
					/******************************************************************/
					 $this->session->set_flashdata('success', 'Le Stagiaire a été supprimé avec succès');
					 redirect('stagiaire');
				 }
				 else{
					   $this->session->set_flashdata('error', 'Une erreur est survenue lors de la suppression d\'un stagiaire');
					   redirect('stagiaire');
				 }
		}
		else{
			$this->session->set_flashdata('error', 'Le stagiaire que vous voulez supprimer n\'existe pas');
			redirect('stagiaire');
		}
	}

		
		
  }
?>