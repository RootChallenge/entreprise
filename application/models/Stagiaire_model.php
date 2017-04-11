<?php
	class Stagiaire_model extends MY_Model
	{
		protected $_table = 'stagiaire';
		protected $primary_key = 'stagiaire_id';
	
		public function __construct()
		{
			parent::__construct();
			
		}
		
	}
?>