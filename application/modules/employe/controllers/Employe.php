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
			$data['liste_employé'] = $this->Employe_model->get_all(); 
			
			$this->load->view('header');
			$this->load->view('index', $data);
			$this->load->view('footer');
		}
		
		public function add()
		{
			$this->load->library('form_validation');
			
			$this->form_validation->set_rules('nom', 'Nom', 'trim|required');
			$this->form_validation->set_rules('prenom', 'Prenom', 'trim|required');
			$this->form_validation->set_rules('adresse', 'Adresse', 'trim|required');
			$this->form_validation->set_rules('telephone', 'Telephone', 'trim|required');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
			$this->form_validation->set_rules('poste', 'Poste', 'trim|required');
			
			if($this->form_validation->run() === FALSE)
			{
				$this->load->view('header');
				$this->load->view('add');
				$this->load->view('footer');
			}
			else
			{
				$nom = strtoupper($this->input->post('nom'));
				$prenom = ucwords($this->input->post('prenom'));
				$adresse = $this->input->post('adresse');
				$telephone = $this->input->post('telephone');
				$email = $this->input->post('email');
				$poste = $this->input->post('poste');
				
				$params = array(
					'employe_nom' => $nom,
					'employe_prenom' => $prenom,
					'employe_adresse' => $adresse,
					'employe_tel' => $telephone,
					'employe_email' => $email,
					'employe_poste' => $poste,
				);
				
				$employe_id = $this->Employe_model->insert($params);
				
				
					$this->session->set_flashdata('success','Employé ajouté avec succes');
					redirect('employe');
			}
		}
	}
?>
