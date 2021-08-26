<?php 
class Other extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('ModelOther');
	}
	public function p()
	{
		$p = $this->uri->segment(3);
		$data['folder'] = "other";
		$data['p'] = $p;
		$data['title'] = "Other Data";
		$keyword = $this->input->post('keyword');

		if ($p == "data") {
			if (strlen($keyword) <= '2') {
				$index = 'none';
				$data['val'] = $this->db->query("SELECT * FROM tb_other WHERE id_other = '$index'")->result();
				$this->load->view('index',$data);	
			}else{
				$data['val'] = $this->ModelOther->get_keyword($keyword)->result();	
				$this->load->view('index',$data);	
			}
		}elseif($p == "input"){
			$id = $this->uri->segment(4);
			if (empty($id)) {
					//No otomatis
				$data['title'] = "input Data other";
				$data['btn'] = "SIMPAN";
				$data['url'] = "other/simpan";
				$this->load->view('index',$data);
			}else{
				$data['title'] = "Edit data other";
				$data['btn'] = "EDIT";
				$data['url'] = "other/edit";
				$data['val'] = $this->ModelOther->showall("tb_other","WHERE id_other = '$id' ");
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
			
			$id_other = $this->input->post('id_other');
			$type = $this->input->post('type');
			$product_name = $this->input->post('product_name');
			$date_update = $this->input->post('date_update');
			$reason = $this->input->post('reason');
			$status = $this->input->post('status');

			$data = array(
				'id_other' => $id_other,
				'type' => $type,
				'product_name' => $product_name,
				'date_update' => $date_update,
				'reason' => $reason,
				'status'=> $status
			);
			$this->ModelOther->simpan($data);
			redirect('other/p/data');


		}
		else
		{
			$image_data = $this->upload->data();
			$imgdata = file_get_contents($image_data['full_path']);
			$file_encode=base64_encode($imgdata);

			$id_other = $this->input->post('id_other');
			$type = $this->input->post('type');
			$product_name = $this->input->post('product_name');
			$date_update = $this->input->post('date_update');
			$reason = $this->input->post('reason');
			$status = $this->input->post('status');

			$data = array(
				'id_other' => $id_other,
				'type' => $type,
				'product_name' => $product_name,
				'date_update' => $date_update,
				'reason' => $reason,
				'status'=> $status,
				'image' => $file_encode
			);
		}

		$this->ModelOther->simpan($data);
		redirect('other/p/data');
	}
	public function edit()
	{
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']        		= 5120;


		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('image'))
		{

			$id = $this->input->post('id_other');						
			$type = $this->input->post('type');
			$product_name = $this->input->post('product_name');
			$date_update = $this->input->post('date_update');
			$reason = $this->input->post('reason');
			$status = $this->input->post('status');

			$data = array(
				'product_name' => $product_name,
				'date_update' => $date_update,
				'reason' => $reason,
				'type' => $type,
				'status'=> $status,
			);
			$this->ModelOther->edit($id,$data);
			redirect('other/p/data');

		}
		else
		{
			$image_data = $this->upload->data();
			$imgdata = file_get_contents($image_data['full_path']);
			$file_encode=base64_encode($imgdata);

			$id = $this->input->post('id_other');
			$type = $this->input->post('type');
			$product_name = $this->input->post('product_name');
			$date_update = $this->input->post('date_update');
			$reason = $this->input->post('reason');
			$status = $this->input->post('status');

			$data = array(
				'product_name' => $product_name,
				'type' => $type,
				'date_update' => $date_update,
				'reason' => $reason,
				'status'=> $status,
				'image' => $file_encode
			);
		}

		$this->ModelOther->edit($id,$data);
		redirect('other/p/data');
	}
	public function hapus($id)
	{
		$this->ModelOther->hapus('tb_other',$id);
		redirect('other/p/data');
	}
	public function search(){
		$data['keyword'] = $this->input->post('keyword');
		$data['data']=$this->other_m->get_keyword($keyword);
		echo $this->input->post('keyword');
	}


}
?>