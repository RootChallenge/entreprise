<?php
	class Paiement_model extends MY_Model
	{
		protected $_table = 'paiement';
		protected $primary_key = 'paiement_id';
		protected $belongs_to = array('employe'=> array('primary_key'=>'employe_id'));

		
		public function __construct()
		{
			parent::__construct();
		}
		
		
	}
?>
 