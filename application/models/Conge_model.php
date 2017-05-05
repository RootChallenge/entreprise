<?php if (!defined('BASEPATH'))  exit('No direct script access allowed');
	
	class Conge_model extends MY_Model{
		
		protected $_table = 'conge';
		
		protected $primary_key = 'conge_id';
		
		
		protected $belongs_to = array('employe');
		
		
		public function __construct(){
			parent::__construct();
		}
		
	}
