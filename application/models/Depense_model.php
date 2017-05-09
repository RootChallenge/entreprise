<?php
	class Depense_model extends MY_Model
	{
		protected $_table = 'depense';
		protected $primary_key = 'depense_id';
	
		public function __construct()
		{
			parent::__construct();
			
		}
		
	}
?>