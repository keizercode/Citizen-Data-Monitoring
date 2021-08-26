<?php 
	class ModelBeranda3 extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}
		public function user()
		{
			return $this->db->query("SELECT * FROM tb_user");
		}
		
	}
 ?>