<?php

    if(!function_exists('config')){
        function config($key){
			$obj = & get_instance();
			$obj->load->model('Config_model');
			$config = $obj->Config_model->get_all_config();
			if(is_object($config) && isset($config->{$key})){
				return $config->{$key};
			}
			throw new Exception('no config found or invalid config key : '.$key);
        }
    }



?>
