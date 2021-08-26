<?php 
class Drugs extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('ModelDrugs');
	}
	public function p()
	{
		$p = $this->uri->segment(3);
		$data['folder'] = "drugs";
		$data['p'] = $p;
		$data['title'] = "Drugs Data";
		$keyword = $this->input->post('keyword');

		if ($p == "data") {
			if (strlen($keyword) <= '2') {
				$index = 'none';
				$data['val'] = $this->db->query("SELECT * FROM tb_drugs WHERE id_drugs = '$index'")->result();
				$this->load->view('index',$data);	
			}else{
				$data['val'] = $this->ModelDrugs->get_keyword($keyword)->result();	
				$this->load->view('index',$data);	
			}
		}elseif($p == "input"){
			$id = $this->uri->segment(4);
			if (empty($id)) {
					//No otomatis
				$data['title'] = "input Data Drugs";
				$data['btn'] = "SIMPAN";
				$data['url'] = "drugs/simpan";
				$this->load->view('index',$data);
			}else{
				$data['title'] = "Edit data drugs";
				$data['btn'] = "EDIT";
				$data['url'] = "drugs/edit";
				$data['val'] = $this->ModelDrugs->showall("tb_drugs","WHERE id_drugs = '$id' ");
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
		if ( ! $this->upload->do_upload('image'))
		{
			
			$id_drugs = $this->input->post('id_drugs');
			$no = $this->input->post('no');
			$product_name = $this->input->post('product_name');
			$type = $this->input->post('type');
			$date_update = $this->input->post('date_update');
			$reason = $this->input->post('reason');
			$status = $this->input->post('status');

			$data = array(
				'id_drugs' => $id_drugs,
				'no' => $no,
				'type' => $type,
				'product_name' => $product_name,
				'date_update' => $date_update,
				'reason' => $reason,
				'status'=> $status
			);
			$this->ModelDrugs->simpan($data);
			redirect('drugs/p/data');


		}
		else
		{
			$image_data = $this->upload->data();
			$imgdata = file_get_contents($image_data['full_path']);
			$file_encode=base64_encode($imgdata);


			$no = $this->input->post('no');
			$type = $this->input->post('type');
			$id_drugs = $this->input->post('id_drugs');
			$product_name = $this->input->post('product_name');
			$date_update = $this->input->post('date_update');
			$reason = $this->input->post('reason');
			$status = $this->input->post('status');

			$data = array(
				'id_drugs' => $id_drugs,
				'no' => $no,
				'type' => $type,
				'product_name' => $product_name,
				'date_update' => $date_update,
				'reason' => $reason,
				'status'=> $status,
				'image' => $file_encode
			);
		}

		$this->ModelDrugs->simpan($data);
		redirect('drugs/p/data');
	}
	public function edit()
	{
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']        		= 5120;


		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('image'))
		{

			$id = $this->input->post('no');
			$id_drugs = $this->input->post('id_drugs');
			$type = $this->input->post('type');
			$product_name = $this->input->post('product_name');
			$date_update = $this->input->post('date_update');
			$reason = $this->input->post('reason');
			$status = $this->input->post('status');

			$data = array(
				'product_name' => $product_name,
				'type' => $type,
				'id_drugs' => $id_drugs,
				'date_update' => $date_update,
				'reason' => $reason,
				'status'=> $status,
			);
			$this->ModelDrugs->edit($id,$data);
			redirect('drugs/p/data');

		}
		else
		{
			$image_data = $this->upload->data();
			$imgdata = file_get_contents($image_data['full_path']);
			$file_encode=base64_encode($imgdata);

			$id = $this->input->post('no');
			$id_drugs = $this->input->post('id_drugs');
			$type = $this->input->post('type');
			$product_name = $this->input->post('product_name');
			$date_update = $this->input->post('date_update');
			$reason = $this->input->post('reason');
			$status = $this->input->post('status');

			$data = array(
				'product_name' => $product_name,
				'type' => $type,
				'id_drugs' => $id_drugs,
				'date_update' => $date_update,
				'reason' => $reason,
				'status'=> $status,
				'image' => $file_encode
			);
		}

		$this->ModelDrugs->edit($id,$data);
		redirect('drugs/p/data');
	}
	public function hapus($id)
	{
		$this->ModelDrugs->hapus('tb_drugs',$id);
		redirect('drugs/p/data');
	}
	public function search(){
		$data['keyword'] = $this->input->post('keyword');
		$data['data']=$this->drugs_m->get_keyword($keyword);
		echo $this->input->post('keyword');
	}


}
