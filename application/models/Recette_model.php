<?php
	class Recette_model extends MY_Model
	{
		protected $_table = 'recette';
		protected $primary_key = 'recette_id';

		
		public function __construct()
		{
			parent::__construct();
		}
		
		
	}
?>
 