<?php
	class Produit extends MX_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('Produit_model');
			$this->load->model('Categorie_produit_model');
		}

		public function index()
		{
			$data['liste_produit']= $this->Produit_model->get_all();
			$this->load->view('header');
			$this->load->view('Produit/index', $data);
			$this->load->view('footer');
		}
		
		public function	add()
		{
			$this->load->library('form_validation');			
			$this->form_validation->set_error_delimiters('<p class = "error">', '</p>');
			$this->form_validation->set_rules('produit_nom', 'Nom du produit', 'trim|required');
			$this->form_validation->set_rules('produit_prix', 'Prix du Produit', 'trim|required');
			$this->form_validation->set_rules('categorie_produit_id', 'Catégorie du produit', 'trim|required');
			
			$data['liste_categorie'] = $this->Categorie_produit_model->get_all();			
			if($this->form_validation->run() === FALSE)
			{
				$this->load->view('header');
				$this->load->view('produit/add', $data);
				$this->load->view('footer');
			}
			else
			{
				$produit_nom= $this->input->post('produit_nom');
				$produit_prix= $this->input->post('produit_prix');
				$categorie_produit_id=$this->input->post('categorie_produit_id');
				
				$tab = array('produit_nom'=>$produit_nom);
				$produit=$this->Produit_model->get_by($tab);
				
				if($produit)
				{
					$this->session->set_flashdata('danger','Ce produit existe déjà');
					redirect('produit');
				}
				else
				{
					$params = array('produit_nom'=>$produit_nom,
									'produit_prix'=>$produit_prix,
									'categorie_produit_id'=>$categorie_produit_id);
									
					$produit_id=$this->Produit_model->insert($params);
					if($produit_id)
						{
							$this->session->set_flashdata('success','L\'ajout a été éffectué avec succès');
							redirect('produit');
						}
						else
						{
							$this->session->set_flashdata('error','Une erreur est survenue lors de l\'ajout ');
							redirect('produit');
						}
				}
				
			}
		}
		public function remove($produit_id)
		{
			$produit = $this->Produit_model->get($produit_id);

			// check if the employe exists before trying to delete it
			if(isset($produit->produit_id))
			{
				$this->Produit_model->delete($produit_id);
				$this->session->set_flashdata('success','Produit supprimé avec succès');
				redirect('produit');
			}
			else
				show_error('The data you are trying to delete does not exist.');
		}
	}
?>
