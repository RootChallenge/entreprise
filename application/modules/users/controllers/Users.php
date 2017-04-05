<?php if (!defined('BASEPATH'))  exit('No direct script access allowed');

	/**
	 * Copyright (C) 2016 Tony NGUEREZA
	 *
	 * This program is free software; you can redistribute it and/or
	 * modify it under the terms of the GNU General Public License
	 * as published by the Free Software Foundation; either version 2
	 * of the License, or (at your option) any later version.
	 *
	 * This program is distributed in the hope that it will be useful,
	 * but WITHOUT ANY WARRANTY; without even the implied warranty of
	 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	 * GNU General Public License for more details.
	 *
	 * You should have received a copy of the GNU General Public License
	 * along with this program; if not, write to the Free Software
	 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
	 */


	/**
	* the usersentification class
	*
	* this class is used to manage the user usersentification. It extends
	* the MX_Controller to permit the use of HMVC
	*
	* @package users
	*
	* @usersor Tony NGUEREZA <nguerezatony@gmail.com>
	*/

	class Users extends MX_Controller
	{

		/**
		* the class constructor
		*
		* @access public
		* @return void
		*/
		public function __construct(){

			//called the parent constructor
			parent::__construct();
			//load the users model class
			$this->load->model('Users_model');

			//load the group model class
			$this->load->model('Group_model');

			//load the users group model class
			$this->load->model('Users_group_model');
		}


		/**
		* the default method called if no method is given
		*
		* @access public
		* @return void
		*/
		public function index(){
			has_access('user');

			$data['liste_users'] = $this->Users_model->get_all();
			$this->load->view('header');
			$this->load->view('index', $data);
			$this->load->view('footer');
		}



		public function add(){
			has_access('user');

			$data['liste_group'] = $this->Group_model->get_all();
			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<p class = "error">', '</p>');

			$this->form_validation->set_rules('users_username', 'nom d\'utilisateur', 'trim|required|min_length[3]|alpha_dash|is_unique[users.users_username]');
			$this->form_validation->set_rules('users_email', 'E-mail', 'trim|required|valid_email|is_unique[users.users_email]');
			$this->form_validation->set_rules('users_nom', 'nom', 'trim|required|min_length[3]');
			$this->form_validation->set_rules('users_prenom', 'prénom', 'trim|required|min_length[3]');


			if($this->form_validation->run() === FALSE)
			{
				$this->load->view('header');
				$this->load->view('add', $data);
				$this->load->view('footer');
			}
			else
			{
				$users_username = $this->input->post('users_username');
				$users_email =  $this->input->post('users_email');
				$group_ids =  $this->input->post('group_ids');
				$users_password =  'passer';
				$users_nom =  strtoupper($this->input->post('users_nom'));
				$users_prenom =  ucfirst(strtolower($this->input->post('users_prenom')));
				$users_password_hach = md5($users_password);

				if(empty($group_ids)){
					$this->session->set_flashdata('error', 'Vous devez selectionner au moins un groupe pour cet utilisateur');
					$this->load->view('header');
					$this->load->view('add', $data);
					$this->load->view('footer');
				}
				else{

					$params = array(
						'users_username' => $users_username,
						'users_email' => $users_email,
						'users_password' => $users_password_hach,
						'users_nom' => $users_nom,
						'users_prenom' => $users_prenom
					);

					$users_id = $this->Users_model->insert($params);

					if($users_id)
					{
						$this->Users_group_model->delete_by('users_id', $users_id);
						foreach($group_ids as $group_id){
							$this->Users_group_model->insert(array('users_id' => $users_id, 'group_id' => $group_id));
						}
						$this->session->set_flashdata('success', 'Le compte utilisateur a été créé avec succès le mot de passe par défaut est <b>'.$users_password.'</b>');
						redirect('users');
					}
					else
					{
						$this->session->set_flashdata('error', 'Une erreur est survenue lors de la création du compte');
						$this->load->view('header');
						$this->load->view('add', $data);
						$this->load->view('footer');
					}
				}

			}

		}

		public function register(){
			/*
			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<p class = "error">', '</p>');

			$this->form_validation->set_rules('users_username', 'nom d\'utilisateur', 'trim|required|min_length[3]|alpha_dash|is_unique[users.users_username]');
			$this->form_validation->set_rules('users_email', 'E-mail', 'trim|required|valid_email|is_unique[users.users_email]');
			$this->form_validation->set_rules('users_nom', 'nom', 'trim|required|min_length[3]');
			$this->form_validation->set_rules('users_prenom', 'prénom', 'trim|required|min_length[3]');
			$this->form_validation->set_rules('users_password', 'mot de passe', 'trim|required|min_length[6]');
			$this->form_validation->set_rules('users_password_confirm', 'confirmation mot de passe', 'trim|required|matches[users_password]');


			if($this->form_validation->run() === FALSE)
			{
				$this->load->view('header');
				$this->load->view('register');
				$this->load->view('footer');
			}
			else
			{
				$users_username = $this->input->post('users_username');
				$users_email =  $this->input->post('users_email');
				$users_password =  $this->input->post('users_password');
				$users_nom =  strtoupper($this->input->post('users_nom'));
				$users_prenom =  ucfirst(strtolower($this->input->post('users_prenom')));
				$users_password_hach = md5($users_password);

				$exists = $this->Users_model->get_by(array(
						'users_nom' => $users_nom,
						'users_prenom' => $users_prenom
				));
				if($exists){
					$this->session->set_flashdata('error', 'Ce compte existe déjà dans notre base de données');
					$this->load->view('header');
					$this->load->view('register');
					$this->load->view('footer');
				}
				else{
					$params = array(
						'users_username' => $users_username,
						'users_email' => $users_email,
						'users_password' => $users_password_hach,
						'users_nom' => $users_nom,
						'users_prenom' => $users_prenom
					);

					$users_id = $this->Users_model->insert($params);

					if($users_id)
					{
						$this->session->set_flashdata('success', 'Votre compte utilisateur a été créé avec succès');
						redirect(base_url());
					}
					else
					{
						$this->session->set_flashdata('error', 'Une erreur est survenue lors de la création du compte');
						$this->load->view('header');
						$this->load->view('register');
						$this->load->view('footer');
					}
				}
			}
			*/
		}

		/**
		* the usersentification method to loggeg the user
		*
		* @access public
		* @return void
		*/
		public function login(){
			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<p class = "error">', '</p>');

			$this->form_validation->set_rules('users_username', 'nom d\'utilisateur', 'trim|required');
			$this->form_validation->set_rules('users_password', 'mot de passe', 'required');
			if($this->form_validation->run() === FALSE)
			{
				$this->load->view('header');
				$this->load->view('login');
				$this->load->view('footer');
			}
			else
			{
				$users_username = $this->input->post('users_username');
				$users_password =  $this->input->post('users_password');
				$users_password_hash = md5($users_password);

				 if(!$this->Users_model->get_by('users_username', $users_username)){
					$this->session->set_flashdata('error', 'Ce nom d\'utilisateur n\'existe pas veuillez rééssayer');
					$this->load->view('header');
					$this->load->view('login');
					$this->load->view('footer');
				 }
				 else if(!$this->Users_model->get_by(array('users_username' => $users_username, 'users_password' => $users_password_hash))){
					$this->session->set_flashdata('error', 'Votre mot de passe est incorrect');
					$this->load->view('header');
					$this->load->view('login');
					$this->load->view('footer');
				 }
				 else{
					 $user = $this->Users_model->get_by('users_username', $users_username);
					 $permissions = $this->Users_model->get_all_permissions($user->users_id);
					 $user->permissions = $permissions;
					 $this->session->set_userdata('users', $user);

					 $session = $this->session->userdata('users');
					redirect(base_url());
				 }
			}
		}

		public function profil(){
			check();
			$session = $this->session->userdata('users');
			$data['users'] = $this->Users_model->get($session->users_id);

			$this->load->view('header');
//			$this->load->view('profil', $data);
			$this->load->view('footer');
		}

		public function reset_password(){
			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<p class = "error">', '</p>');

			$this->form_validation->set_rules('users_email', 'e-mail', 'trim|required|valid_email');
			if($this->form_validation->run() === FALSE)
			{
				$this->load->view('header');
				$this->load->view('reset_password');
				$this->load->view('footer');
			}
			else
			{
				$users_email = $this->input->post('users_email');

				 if(!$this->Users_model->get_by('users_email', $users_email)){
					$this->session->set_flashdata('error', 'Cette adresse E-mail n\'existe pas veuillez rééssayer');
					$this->load->view('header');
					$this->load->view('reset_password');
					$this->load->view('footer');
				 }
				 else{
					 $this->load->helper('string');
					 $this->load->library('email');

					 $user = $this->Users_model->get_by('users_email', $users_email);
					 $password = random_string(); //8 caractères alphanum
					 $password_hash = md5($password);

					 $config['mailtype'] = 'html';

					$this->email->initialize($config);

					$username = $user->users_username;
					$nom = $user->users_nom;
					$prenom = $user->users_prenom;
					$email = $user->users_email;

					$message = "<p>Bonjour <b>$nom $prenom</b> vous avez demandé à recevoir votre mot de passe par E-mail.<br />
								Voici votre nouveau mot de passe : <b>$password</b><br />
								Pour rappel voici vos informations <br />
								Nom d'utilisateur : <b>$username</b><br />
								Nom : <b>$nom</b><br />
								Prénom : <b>$prenom</b><br />
								Email : <b>$email</b><br />

								<b>NB:</b> Pour raison de securité, une fois connecté veuillez changer ce mot de passe .<br />
								Pour vous connecter allez à l'adresse ".anchor('users/login')." ou sur le site ".anchor(base_url())."</p>";


					$this->email->from('info@rca-soft.net')
								->to($email)
								->subject('Récuperation de mot de passe sur le site '.base_url())
								->message($message);

					if($this->email->send()){
						$this->Users_model->update($user->users_id, array('users_password' => $password_hash));
						$this->session->set_flashdata('info', 'Votre nouveau mot de passe vient être envoyé par E-mail. Veuillez verifier dans votre boîte d\'adresse');
					}
					redirect('users/login');
				 }
			}
		}

		public function edit(){
			check();
			$session = $this->session->userdata('users');
			$data['users'] = $this->Users_model->get($session->users_id);

			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<p class = "error">', '</p>');

			$this->form_validation->set_rules('users_username', 'nom d\'utilisateur', 'trim|required|min_length[3]|alpha_dash');
			$this->form_validation->set_rules('users_email', 'E-mail', 'trim|required|valid_email');
			$this->form_validation->set_rules('users_nom', 'nom', 'trim|required|min_length[3]');
			$this->form_validation->set_rules('users_prenom', 'prénom', 'trim|required|min_length[3]');


			if($this->form_validation->run() === FALSE)
			{
				$this->load->view('header');
				$this->load->view('edit', $data);
				$this->load->view('footer');
			}
			else
			{
				$users_username = $this->input->post('users_username');
				$users_email =  $this->input->post('users_email');
				$users_password =  $this->input->post('users_password');
				$users_nom =  strtoupper($this->input->post('users_nom'));
				$users_prenom =  ucfirst(strtolower($this->input->post('users_prenom')));
				$users_password_hach = md5($users_password);

				$params = array(
					'users_username' => $users_username,
					'users_email' => $users_email,
					'users_nom' => $users_nom,
					'users_prenom' => $users_prenom,
				);

				if(!empty($users_password)){
					$params['users_password'] = $users_password_hach;
				}

				$update = $this->Users_model->update($session->users_id, $params);

				if($update)
				{
					$user = $this->Users_model->get($session->users_id);
					$this->session->set_flashdata('success', 'Votre compte a été modifié avec succès');
					$this->session->unset_userdata('users');
					$this->session->set_userdata('users', $user);
					redirect(base_url());
				}
				else
				{
					$this->session->set_flashdata('error', 'Une erreur est survenue lors de la modification de votre compte');
					$this->load->view('header');
					$this->load->view('edit', $data);
					$this->load->view('footer');
				}

			}

		}


		public function update($users_id){
			has_access('user');
			$session = $this->session->userdata('users');

			$user = $this->Users_model->get($users_id);
			if(!$user){
				$this->session->set_flashdata('error', 'Cet utilisateur n\'existe pas');
				redirect('users');
			}

			$users_group = $this->Users_group_model->get_many_by('users_id', $users_id);
			$liste_users_group = array();
			foreach($users_group as $g){
				$liste_users_group[] = $g->group_id;
			}
			$data['liste_users_group'] = $liste_users_group;
			$data['liste_group'] = $this->Group_model->get_all();
			$data['users'] = $user;

			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<p class = "error">', '</p>');

			$this->form_validation->set_rules('users_username', 'nom d\'utilisateur', 'trim|required|min_length[3]|alpha_dash');
			$this->form_validation->set_rules('users_email', 'E-mail', 'trim|required|valid_email');
			$this->form_validation->set_rules('users_nom', 'nom', 'trim|required|min_length[3]');
			$this->form_validation->set_rules('users_prenom', 'prénom', 'trim|required|min_length[3]');


			if($this->form_validation->run() === FALSE)
			{
				$this->load->view('header');
				$this->load->view('update', $data);
				$this->load->view('footer');
			}
			else
			{
				$users_username = $this->input->post('users_username');
				$users_email =  $this->input->post('users_email');
				$users_password =  $this->input->post('users_password');
				$users_password_hach = md5($users_password);
				$group_ids =  $this->input->post('group_ids');
				$users_nom =  strtoupper($this->input->post('users_nom'));
				$users_prenom =  ucfirst(strtolower($this->input->post('users_prenom')));

				if(empty($group_ids)){
					$this->session->set_flashdata('error', 'Vous devez selectionner au moins un groupe pour cet utilisateur');
					$this->load->view('header');
					$this->load->view('update', $data);
					$this->load->view('footer');
				}
				else{
					$params = array(
						'users_username' => $users_username,
						'users_email' => $users_email,
						'users_nom' => $users_nom,
						'users_prenom' => $users_prenom,
					);

					if(!empty($users_password)){
						$params['users_password'] = $users_password_hach;
					}

					$update = $this->Users_model->update($users_id, $params);

					if($update)
					{
						$this->Users_group_model->delete_by('users_id', $users_id);
						foreach($group_ids as $group_id){
							$this->Users_group_model->insert(array('users_id' => $users_id, 'group_id' => $group_id));
						}
						$this->session->set_flashdata('success', 'Le compte a été modifié avec succès');
						if($users_id == $user->users_id){
							$this->session->set_flashdata('success', 'Votre compte a été modifié avec succès');
						}
						$user = $this->Users_model->get($session->users_id);
						$this->session->unset_userdata('users');
						$this->session->set_userdata('users', $user);
						redirect(base_url());
					}
					else
					{
						$this->session->set_flashdata('error', 'Une erreur est survenue lors de la modification du compte');
						$this->load->view('header');
						$this->load->view('update', $data);
						$this->load->view('footer');
					}
				}
			}

		}


		public function delete($users_id){
			has_access('user');

			$session = $this->session->userdata('users');
			$users = $this->Users_model->get($users_id);
			if(!$users){
				$this->session->set_flashdata('error', 'Cet utilisateur n\'existe pas');
				redirect('users');
			}
			else if($users_id == $session->users_id){
				$this->session->set_flashdata('error', 'Vous ne pouvez pas supprimer votre propre compte');
				redirect('users');
			}

			$delete = $this->Users_model->delete($users_id);

			if($delete){
				$this->session->set_flashdata('success', 'Le compte utilisateur a été supprimé avec succès');
				redirect('users');
			}
		}

		public function group(){
			has_access('group');

			$data['liste_groups'] = $this->Group_model->get_all();
			$this->load->view('header');
			$this->load->view('group/index', $data);
			$this->load->view('footer');

		}


		public function add_group(){
			has_access('group');

			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<p class = "error">', '</p>');

			$this->form_validation->set_rules('group_name', 'nom du groupe', 'trim|required|min_length[2]|is_unique[group.group_name]');


			if($this->form_validation->run() === FALSE)
			{
				$this->load->view('header');
				$this->load->view('group/add');
				$this->load->view('footer');
			}
			else{
				$group_name = $this->input->post('group_name');
				$group_permissions =  $this->input->post('group_permissions');


				$params = array(
					'group_name' => $group_name,
				);

				if(!empty($group_permissions)){
					foreach($group_permissions as $permission){
						$params[$permission] = 1;
					}
				}

				$group_id = $this->Group_model->insert($params);

				if($group_id)
				{
					$this->session->set_flashdata('success', 'Le groupe a été ajouté avec succès');
					redirect('users/group');
				}
				else
				{
					$this->session->set_flashdata('error', 'Une erreur est survenue lors de l\'ajout du groupe');
					$this->load->view('header');
					$this->load->view('group/add');
					$this->load->view('footer');
				}
		}


		}

		public function update_group($group_id){
			has_access('group');

			$session = $this->session->userdata('users');

			$group = $this->Group_model->get($group_id);
			if(!$group){
				$this->session->set_flashdata('error', 'Ce groupe n\'existe pas');
				redirect('users/group');
			}

			if($group->is_system == 1){
				$this->session->set_flashdata('error', 'Vous ne pouvez pas modifier un groupe système');
				redirect('users/group');
			}
			$data['group'] = $group;
			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<p class = "error">', '</p>');

			$this->form_validation->set_rules('group_name', 'nom du groupe', 'trim|required|min_length[2]');


			if($this->form_validation->run() === FALSE)
			{
				$this->load->view('header');
				$this->load->view('group/update', $data);
				$this->load->view('footer');
			}
			else{
				$group_name = $this->input->post('group_name');
				$group_permissions =  $this->input->post('group_permissions');


				$params = array(
					'group_name' => $group_name,
				);

				foreach(get_all_permissions() as $key => $value){
					$params[$key] = 0;
				}

				if(!empty($group_permissions)){
					foreach($group_permissions as $permission){
						$params[$permission] = 1;
					}
				}

				$update = $this->Group_model->update($group_id, $params);

				if($update)
				{
					$this->session->set_flashdata('success', 'Le groupe a été modifié avec succès');
					redirect('users/group');
				}
				else
				{
					$this->session->set_flashdata('error', 'Une erreur est survenue lors de la modification du groupe');
					$this->load->view('header');
					$this->load->view('group/update', $data);
					$this->load->view('footer');
				}
			}
		}


		public function group_permissions($group_id){
			has_access('group');

			$session = $this->session->userdata('users');

			$group = $this->Group_model->get($group_id);
			if(!$group){
				$this->session->set_flashdata('error', 'Ce groupe n\'existe pas');
				redirect('users/group');
			}
			$data['group'] = $group;
			$this->load->view('header');
			$this->load->view('group/permissions', $data);
			$this->load->view('footer');

		}

		public function delete_group($group_id){
			has_access('group');

			$session = $this->session->userdata('users');

			$group = $this->Group_model->get($group_id);
			if(!$group){
				$this->session->set_flashdata('error', 'Ce groupe n\'existe pas');
				redirect('users/group');
			}

			if($group->is_system == 1){
				$this->session->set_flashdata('error', 'Vous ne pouvez pas supprimer un groupe système');
				redirect('users/group');
			}

			$delete = $this->Group_model->delete($group_id);

			if($delete){
				$this->session->set_flashdata('success', 'Le groupe utilisateur a été supprimé avec succès');
				redirect('users/group');
			}

		}

		/**
		* disconnect the user
		*
		* @access public
		* @return void
		*/
		public function logout(){
			$this->session->unset_userdata('users');
			$this->session->set_flashdata('info', 'Vous êtes deconnecté avec succès');
			redirect(base_url());
		}




	}


?>
