<?php
	class Employe_model extends MY_Model
	{
		protected $_table = 'employe';
		protected $primary_key = 'employe_id';
	
		public function __construct()
		{
			parent::__construct();
			
		}
		
	}
?>