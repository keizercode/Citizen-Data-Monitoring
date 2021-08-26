<?php 
	class Beranda extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('ModelBeranda');
		}
		public function p()
		{
			$p = $this->uri->segment(3);
			$data['title'] = "Warga Dashboard";
			$data['folder'] = "beranda";
			if (empty($p)) {
				$p = "beranda";
			}
			$data['p'] = $p;
			$this->load->view('index',$data);
		}
	}
