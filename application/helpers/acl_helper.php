<?php
	if(!function_exists('has_access')){
		function has_access($name){
			$access = is_allowed($name);
			$obj = & get_instance();
			if(!$access){
				$obj->session->set_flashdata('error', 'Vous n\'avez pas les permissions nécessaires pour acceder à cette page');
				redirect(base_url());
			}

		}
	}

	if(!function_exists('is_allowed')){
		function is_allowed($name){
			check();
			$access = false;
			$obj = & get_instance();
			$session = $obj->session->userdata('users');
			$obj->load->model('Users_model');
			$permissions = $obj->Users_model->get_all_permissions($session->users_id);
			foreach($permissions as $permission){
				if(isset($permission[$name]) && $permission[$name] == 1){
					$access = true;
					break;
				}
			}
			return $access;
		}
	}


	if(!function_exists('get_permission_label')){
		function get_permission_label($name, $default = null){
			$permissions = get_all_permissions();
			return isset($permissions[$name])?$permissions[$name]:$default;

		}
	}


	if(!function_exists('get_all_permissions')){
		function get_all_permissions(){
			$permissions = array(
									'user' => 'Gestion des utilisateurs',
									'group' => 'Gestion des groupes utilisateurs',
								
								);
			return $permissions;
		}
	}


	if(!function_exists('check')){
		function check(){
			$isLogin = false;
			$obj = & get_instance();
			$users = $obj->session->userdata('users');
			$isLogin = !empty($users)
			&& isset($users->users_username)
			&& isset($users->users_id)
			&& isset($users->users_email);

			if(!$isLogin){
				$obj->session->set_flashdata('info', 'Vous devez vous connecter pour acceder à cette page');
				redirect('users/login');
			}
		}
	}
?>
