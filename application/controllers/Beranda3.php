<?php 
	class Beranda3 extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('ModelBeranda3');
		}
		public function p()
		{
			$p = $this->uri->segment(3);
			$data['title'] = "Warga Dashboard";
			$data['folder'] = "beranda3";
			if (empty($p)) {
				$p = "beranda3";
			}
			$data['p'] = $p;
            
			$this->load->view('index',$data);
		}
	}
