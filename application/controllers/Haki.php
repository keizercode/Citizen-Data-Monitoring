<?php 
class Haki extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('ModelHaki');
	}
	public function p()
	{
		$p = $this->uri->segment(3);
		$data['folder'] = "haki";
		$data['p'] = $p;
		$data['title'] = "Data Haki";
		$keyword = $this->input->post('keyword');

		if ($p == "data") {
				$data['val'] = $this->db->query("SELECT * FROM tb_haki")->result();
				$this->load->view('index',$data);	
		}elseif($p == "input"){
			$id = $this->uri->segment(4);
			if (empty($id)) {
					//No otomatis
				$data['title'] = "input Data haki";
				$data['btn'] = "SIMPAN";
				$data['url'] = "haki/simpan";
				$this->load->view('index',$data);
			}else{
				$data['title'] = "Edit data haki";
				$data['btn'] = "EDIT";
				$data['url'] = "haki/edit";
				$data['val'] = $this->ModelHaki->showall("tb_haki","WHERE id_haki = '$id' ");
				$this->load->view('index',$data);
			}
		}
	}
	public function simpan()
	{
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']        		= 5120;


		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('supported_file'))
		{

			$id_haki = $this->input->post('id_haki');
			$product_type = $this->input->post('product_type');
			$category = $this->input->post('category');
			$notes = $this->input->post('notes');
			$brand = $this->input->post('brand');
			$price = $this->input->post('price');

			$data = array(
				'id_haki' => $id_haki,
				'product_type' => $product_type,
				'brand' => $brand,
				'notes' => $notes,
				'price' => $price,
				'category' => $category
			);
			$this->ModelHaki->simpan($data);
			redirect('haki/p/data');
		}
		else
		{
			$image_data = $this->upload->data();
			$imgdata = file_get_contents($image_data['full_path']);
			$file_encode=base64_encode($imgdata);

			$id_haki = $this->input->post('id_haki');
			$product_type = $this->input->post('product_type');
			$category = $this->input->post('category');
			$notes = $this->input->post('notes');
			$brand = $this->input->post('brand');
			$price = $this->input->post('price');

			$data = array(
				'id_haki' => $id_haki,
				'product_type' => $product_type,
				'brand' => $brand,
				'notes' => $notes,
				'price' => $price,
				'supported_file'=> $file_encode,
				'category' => $category
			);
		}

		$this->ModelHaki->simpan($data);
		redirect('haki/p/data');
	}

	public function edit()
	{
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']        		= 5120;


		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('supported_file'))
		{

			$id = $this->input->post('id_haki');
			$product_type = $this->input->post('product_type');
			$category = $this->input->post('category');
			$notes = $this->input->post('notes');
			$brand = $this->input->post('brand');
			$price = $this->input->post('price');

			$data = array(
				'product_type' => $product_type,
				'brand' => $brand,
				'price' => $price,
				'notes' => $notes,
				'category' => $category
			);

			$this->ModelHaki->edit($id,$data);
			redirect('haki/p/data');

		}
		else
		{
			$image_data = $this->upload->data();
			$imgdata = file_get_contents($image_data['full_path']);
			$file_encode=base64_encode($imgdata);

			$id = $this->input->post('id_haki');
			$product_type = $this->input->post('product_type');
			$category = $this->input->post('category');
			$price = $this->input->post('price');
			$notes = $this->input->post('notes');
			$brand = $this->input->post('brand');

			$data = array(
				'product_type' => $product_type,
				'brand' => $brand,
				'notes' => $notes,
				'price' => $price,
				'supported_file'=> $file_encode,
				'category' => $category
			);
		}

		$this->ModelHaki->edit($id,$data);
		redirect('haki/p/data');
	}	public function hapus($id)
	{
		$this->ModelHaki->hapus('tb_haki',$id);
		redirect('haki/p/data');
	}
	public function search(){
		$data['keyword'] = $this->input->post('keyword');
		$data['data']=$this->haki_m->get_keyword($keyword);
		echo $this->input->post('keyword');
	}





}
