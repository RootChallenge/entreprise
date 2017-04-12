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

				$tab = array('employe_nom'=>$nom, 'employe_prenom' => $prenom);
				$employe = $this->Employe_model->get_by($tab);

				if($employe)
				{
					$this->session->set_flashdata('error','Cet employé existe déjà');
					redirect('employe');
				}
				else
				{

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

		public function update($employe_id)
		{
			$employe = $this->Employe_model->get_by(array("employe_id"=>$employe_id));
			if($employe)
			{
				$this->load->library('form_validation');
				$this->form_validation->set_error_delimiters('<p class = "error">', '</p>');

				$this->form_validation->set_rules('nom', 'Nom', 'trim|required');
				$this->form_validation->set_rules('prenom', 'Prenom', 'trim|required');
				$this->form_validation->set_rules('adresse', 'Adresse', 'trim|required');
				$this->form_validation->set_rules('telephone', 'Telephone', 'trim|required');
				$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
				$this->form_validation->set_rules('poste', 'Poste', 'trim|required');


				if($this->form_validation->run() === FALSE)
				{
					$data['employe'] = $this->Employe_model->get($employe_id);

					$this->load->view('header');
					$this->load->view('employe/update', $data);
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

					$employe_id = $this->Employe_model->update($employe_id, $params);


						$this->session->set_flashdata('success','Employé modifié avec succes');
						redirect('employe');

				}
			}
		}

		public function remove($employe_id)
		{
			$employe = $this->Employe_model->get($employe_id);

			// check if the employe exists before trying to delete it
			if(isset($employe->employe_id))
			{
				$this->Employe_model->delete($employe_id);
				$this->session->set_flashdata('success','Employé supprimé avec succès');
				redirect('employe');
			}
			else
				show_error('The data you are trying to delete does not exist.');
		}

	}
?>
