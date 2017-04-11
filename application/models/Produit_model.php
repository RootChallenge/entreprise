<?php
	class Produit_model extends MY_Model
	{
		protected $_table = 'produit';
		protected $primary_key = 'produit_id';
		protected $belongs_to = array('categorie_produit'=> array('primary_key'=>'categorie_produit_id'));

		
		public function __construct()
		{
			parent::__construct();
		}
		
		
	}
?>
 