<?php
	class Recette extends MX_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('Recette_model');
		}

		public function index()
		{
			$data['liste_recette']= $this->Recette_model->get_all();
			$this->load->view('header');
			$this->load->view('Recette/index', $data);
			$this->load->view('footer');
		}
		
		public function	add()
		{
			$this->load->library('form_validation');			
			$this->form_validation->set_error_delimiters('<p class = "error">', '</p>');
			$this->form_validation->set_rules('montant', 'Montant du Paiement', 'trim|required');
			$this->form_validation->set_rules('description', 'Motif du Paiement', 'trim|required');
			
						
			if($this->form_validation->run() === FALSE)
			{
				$this->load->view('header');
				$this->load->view('Recette/add');
				$this->load->view('footer');
			}
			else
			{
				$montant= $this->input->post('montant');
				$description= $this->input->post('description');
				
				
					$params = array('montant'=>$montant,
									'description'=>$description);
									
					$paiement_id=$this->Recette_model->insert($params);
					if($paiement_id)
						{
							$this->session->set_flashdata('success','L\'ajout a été éffectué avec succès');
							redirect('recette');
						}
						else
						{
							$this->session->set_flashdata('error','Une erreur est survenue lors de l\'ajout ');
							redirect('recette');
						}
				
				
			}
		}
		
		public function update($recette_id)
		{
			$recette= $this->Recette_model->get_by('recette_id', $recette_id);
			
			if($recette)
			{
				$this->load->library('form_validation');			
				$this->form_validation->set_error_delimiters('<p class = "error">', '</p>');
				$this->form_validation->set_rules('montant', 'Montant du Paiement', 'trim|required');
				$this->form_validation->set_rules('description', 'Motif du Paiement', 'trim|required');
				
				$data['liste_recette'] = $this->Recette_model->get_by('recette_id', $recette_id);			
				if($this->form_validation->run() === FALSE)
				{
					$this->load->view('header');
					$this->load->view('Recette/update', $data);
					$this->load->view('footer');
				}
				
				else
				{
					$montant= $this->input->post('montant');
					$description= $this->input->post('description');	
				
				
					$params = array('montant'=>$montant,
									'description'=>$description);
					
					$recette2= $this->Recette_model->update($recette_id, $params);
					
					if($recette2)
					{
						$this->session->set_flashdata('success','La modification a été éffectué avec succès');
							redirect('recette');
					}
					else
					{
						$this->session->set_flashdata('error','Une erreur est survenue lors de la modification ');
							redirect('recette');
					}
				}
			}
			else
			{
				show_error('The data you are trying to delete does not exist.');
			}
		}
		
		
		public function remove($recette_id)
		{
			$recette = $this->Recette_model->get($recette_id);

			// check if the employe exists before trying to delete it
			if(isset($recette->recette_id))
			{
				$this->Recette_model->delete($recette_id);
				$this->session->set_flashdata('success','recette supprimée avec succès');
				redirect('recette');
			}
			else
				show_error('The data you are trying to delete does not exist.');
		}
	}
?>
