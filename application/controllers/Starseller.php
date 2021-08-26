<?php 
class Starseller extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('ModelStar');
	}
	public function p()
	{
		$p = $this->uri->segment(3);
		$data['folder'] = "starseller";
		$data['p'] = $p;
		$data['title'] = "Star Seller Data";
		$keyword = $this->input->post('keyword');

		if ($p == "data") {
			if (strlen($keyword) <= '2') {
				$index = 'none';
				$data['val'] = $this->db->query("SELECT * FROM tb_starseller WHERE no = '$index'")->result();
				$this->load->view('index',$data);	
			}else{
				$data['val'] = $this->ModelStar->get_keyword($keyword)->result();	
				$this->load->view('index',$data);	
			}
		}elseif($p == "input"){
			$id = $this->uri->segment(4);
			if (empty($id)) {
					//No otomatis
				$data['title'] = "input Data Star Seller";
				$data['btn'] = "SIMPAN";
				$data['url'] = "starseller/simpan";
				$this->load->view('index',$data);
			}else{
				$data['title'] = "Edit data Star Seller ";
				$data['btn'] = "EDIT";
				$data['url'] = "starseller/edit";
				$data['val'] = $this->ModelStar->showall("tb_starseller","WHERE no = '$id' ");
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
			$no = $this->input->post('no');
			$product_name = $this->input->post('product_name');
			$date_input = $this->input->post('date_input');
			$merk = $this->input->post('merk');
			$nama_lain = $this->input->post('nama_lain');
			$type = $this->input->post('type');
			$status = $this->input->post('status');
			$nmor_ref = $this->input->post('nmor_ref');

			$data = array(
				'no' => $no,
				'product_name' => $product_name,
				'date_input' => $date_input,
				'merk' => $merk,
				'nama_lain' => $nama_lain,
				'type' => $type,
				'status'=> $status,
				'nmor_ref'=> $nmor_ref
			);
			$this->ModelStar->simpan($data);
			redirect('starseller/p/data');


		}
		else
		{
			$image_data = $this->upload->data();
			$imgdata = file_get_contents($image_data['full_path']);
			$file_encode=base64_encode($imgdata);

			$no = $this->input->post('no');
			$product_name = $this->input->post('product_name');
			$date_input = $this->input->post('date_input');
			$merk = $this->input->post('merk');
			$nama_lain = $this->input->post('nama_lain');
			$type = $this->input->post('type');
			$status = $this->input->post('status');
			$nmor_ref = $this->input->post('nmor_ref');

			$data = array(
				'no' => $no,
				'product_name' => $product_name,
				'date_input' => $date_input,
				'merk' => $merk,
				'nama_lain' => $nama_lain,
				'type' => $type,
				'status'=> $status,
				'nmor_ref'=> $nmor_ref,
				'image' => $file_encode
			);
		}

		$this->ModelStar->simpan($data);
		redirect('starseller/p/data');
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
			$product_name = $this->input->post('product_name');
			$date_input = $this->input->post('date_input');
			$merk = $this->input->post('merk');
			$nama_lain = $this->input->post('nama_lain');
			$type = $this->input->post('type');
			$status = $this->input->post('status');
			$nmor_ref = $this->input->post('nmor_ref');

			$data = array(
				'product_name' => $product_name,
				'date_input' => $date_input,
				'merk' => $merk,
				'nama_lain' => $nama_lain,
				'type' => $type,
				'status'=> $status,
				'nmor_ref'=> $nmor_ref
			);

			$this->ModelStar->edit($id,$data);
			redirect('starseller/p/data');

		}
		else
		{
			$image_data = $this->upload->data();
			$imgdata = file_get_contents($image_data['full_path']);
			$file_encode=base64_encode($imgdata);

			$id = $this->input->post('no');
			$product_name = $this->input->post('product_name');
			$date_input = $this->input->post('date_input');
			$merk = $this->input->post('merk');
			$nama_lain = $this->input->post('nama_lain');
			$type = $this->input->post('type');
			$status = $this->input->post('status');
			$nmor_ref = $this->input->post('nmor_ref');

			$data = array(
				'product_name' => $product_name,
				'date_input' => $date_input,
				'merk' => $merk,
				'nama_lain' => $nama_lain,
				'type' => $type,
				'status'=> $status,
				'nmor_ref'=> $nmor_ref,
				'image' => $file_encode

			);
		}

		$this->ModelStar->edit($id,$data);
		redirect('starseller/p/data');
	}
	public function hapus($id)
	{
		$this->ModelStar->hapus('tb_starseller',$id);
		redirect('starseller/p/data');
	}
	public function search(){
		$data['keyword'] = $this->input->post('keyword');
		$data['data']=$this->category_m->get_keyword($keyword);
		echo $this->input->post('keyword');
	}


}
?>