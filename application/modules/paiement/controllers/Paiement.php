<?php
	class Paiement extends MX_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('Paiement_model');
			$this->load->model('Employe_model');
		}

		public function index()
		{
			$data['liste_paiement']= $this->Paiement_model->get_all();
			$this->load->view('header');
			$this->load->view('Paiement/index', $data);
			$this->load->view('footer');
		}
		
		public function	add()
		{
			$this->load->library('form_validation');			
			$this->form_validation->set_error_delimiters('<p class = "error">', '</p>');
			$this->form_validation->set_rules('paiement_montant', 'Montant du Paiement', 'trim|required');
			$this->form_validation->set_rules('paiement_motif', 'Motif du Paiement', 'trim|required');
			$this->form_validation->set_rules('paiement_prime', 'Prime du Paiement', 'trim|required');
			$this->form_validation->set_rules('employe_id', 'Nom de l\'employe', 'trim|required');
			
			$data['liste_employe'] = $this->Employe_model->get_all();			
			if($this->form_validation->run() === FALSE)
			{
				$this->load->view('header');
				$this->load->view('Paiement/add', $data);
				$this->load->view('footer');
			}
			else
			{
				$paiement_montant= $this->input->post('paiement_montant');
				$paiement_motif= $this->input->post('paiement_motif');
				$paiement_prime= $this->input->post('paiement_prime');
				$employe_id=$this->input->post('employe_id');
				
				
					$params = array('paiement_montant'=>$paiement_montant,
									'paiement_motif'=>$paiement_motif,
									'paiement_prime'=>$paiement_prime,
									'employe_id'=>$employe_id);
									
					$paiement_id=$this->Paiement_model->insert($params);
					if($paiement_id)
						{
							$this->session->set_flashdata('success','L\'ajout a été éffectué avec succès');
							redirect('paiement');
						}
						else
						{
							$this->session->set_flashdata('error','Une erreur est survenue lors de l\'ajout ');
							redirect('paiement');
						}
				
				
			}
		}
		
		public function update($paiement_id)
		{
			$paiement= $this->Paiement_model->get_by('paiement_id', $paiement_id);
			
			if($paiement)
			{
				$this->load->library('form_validation');			
				$this->form_validation->set_error_delimiters('<p class = "error">', '</p>');
				$this->form_validation->set_rules('paiement_montant', 'Montant du Paiement', 'trim|required');
				$this->form_validation->set_rules('paiement_motif', 'Motif du Paiement', 'trim|required');
				$this->form_validation->set_rules('paiement_prime', 'Prime du Paiement', 'trim|required');
				$this->form_validation->set_rules('employe_id', 'Nom de l\'employe', 'trim|required');
				
				$data['liste_paiement'] = $this->Paiement_model->get_by('paiement_id', $paiement_id);			
				$data['liste_employe'] = $this->Employe_model->get_all();			
				if($this->form_validation->run() === FALSE)
				{
					$this->load->view('header');
					$this->load->view('Paiement/update', $data);
					$this->load->view('footer');
				}
				
				else
				{
					$paiement_montant= $this->input->post('paiement_montant');
					$paiement_motif= $this->input->post('paiement_motif');
					$paiement_prime= $this->input->post('paiement_prime');
					$employe_id=$this->input->post('employe_id');
				
				
					$params = array('paiement_montant'=>$paiement_montant,
									'paiement_motif'=>$paiement_motif,
									'paiement_prime'=>$paiement_prime,
									'employe_id'=>$employe_id);
					
					$paiement2= $this->Paiement_model->update($paiement_id, $params);
					
					if($paiement2)
					{
						$this->session->set_flashdata('success','La modification a été éffectué avec succès');
							redirect('paiement');
					}
					else
					{
						$this->session->set_flashdata('error','Une erreur est survenue lors de la modification ');
							redirect('paiement');
					}
				}
			}
			else
			{
				show_error('The data you are trying to delete does not exist.');
			}
		}
		
		
		public function remove($paiement_id)
		{
			$paiement = $this->Paiement_model->get($paiement_id);

			// check if the employe exists before trying to delete it
			if(isset($paiement->paiement_id))
			{
				$this->Paiement_model->delete($paiement_id);
				$this->session->set_flashdata('success','Paiement supprimé avec succès');
				redirect('paiement');
			}
			else
				show_error('The data you are trying to delete does not exist.');
		}
	}
?>
