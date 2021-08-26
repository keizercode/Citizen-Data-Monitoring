<?php
class Category extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('ModelCategory');
	}
	public function p()
	{
		$p = $this->uri->segment(3);
		$data['folder'] = "category";
		$data['p'] = $p;
		$data['title'] = "Category Data";
		$keyword = $this->input->post('keyword');

		if ($p == "data") {
			if (strlen($keyword) <= '0') {
				$index = ' ';
				$data['val'] = $this->db->query("SELECT * FROM tb_category")->result();
				$this->load->view('index', $data);
			} else {
				$data['val'] = $this->ModelCategory->get_keyword($keyword)->result();
				$this->load->view('index', $data);
			}
		} elseif ($p == "input") {
			$id = $this->uri->segment(4);
			if (empty($id)) {
				//No otomatis
				$data['title'] = "input Data Category";
				$data['btn'] = "SIMPAN";
				$data['url'] = "category/simpan";
				$this->load->view('index', $data);
			} else {
				$data['title'] = "Edit data category";
				$data['btn'] = "EDIT";
				$data['url'] = "category/edit";
				$data['val'] = $this->ModelCategory->showall("tb_category", "WHERE no = '$id' ");
				$this->load->view('index', $data);
			}
		}
	}
	public function simpan()
	{
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']        		= 5120;


		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('image')) {

			$id_category = $this->input->post('id_category');
			$no = $this->input->post('no');
			$l1 = $this->input->post('l1');
			$l2 = $this->input->post('l2');
			$l3 = $this->input->post('l3');
			$l4 = $this->input->post('l4');
			$l5 = $this->input->post('l5');
			$l6 = $this->input->post('l6');
			$l7 = $this->input->post('l7');
			$l8 = $this->input->post('l8');
			$l9 = $this->input->post('l9');
			$l10 = $this->input->post('l10');

			$data = array(
				'id_category' => $id_category,
				'no' => $no,
				'l1' => $l1,
				'l2' => $l2,
				'l3' => $l3,
				'l4' => $l4,
				'l5' => $l5,
				'l6' => $l6,
				'l7' => $l7,
				'l8' => $l8,
				'l9' => $l9,
				'l10' => $l10
			);
			$this->ModelCategory->simpan($data);
			redirect('category/p/data');
		} else {
			$image_data = $this->upload->data();
			$imgdata = file_get_contents($image_data['full_path']);
			$file_encode = base64_encode($imgdata);

			$id_category = $this->input->post('id_category');
			$no = $this->input->post('no');
			$l1 = $this->input->post('l1');
			$l2 = $this->input->post('l2');
			$l3 = $this->input->post('l3');
			$l4 = $this->input->post('l4');
			$l5 = $this->input->post('l5');
			$l6 = $this->input->post('l6');
			$l7 = $this->input->post('l7');
			$l8 = $this->input->post('l8');
			$l9 = $this->input->post('l9');
			$l10 = $this->input->post('l10');

			$data = array(
				'id_category' => $id_category,
				'no' => $no,
				'l1' => $l1,
				'l2' => $l2,
				'l3' => $l3,
				'l4' => $l4,
				'l5' => $l5,
				'l6' => $l6,
				'l7' => $l7,
				'l8' => $l8,
				'l9' => $l9,
				'l10' => $l10

			);
		}

		$this->ModelCategory->simpan($data);
		redirect('category/p/data');
	}
	public function edit()
	{
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']        		= 5120;


		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('image')) {

			$id = $this->input->post('no');
			$id_category = $this->input->post('id_category');
			$l1 = $this->input->post('l1');
			$l2 = $this->input->post('l2');
			$l3 = $this->input->post('l3');
			$l4 = $this->input->post('l4');
			$l5 = $this->input->post('l5');
			$l6 = $this->input->post('l6');
			$l7 = $this->input->post('l7');
			$l8 = $this->input->post('l8');
			$l9 = $this->input->post('l9');
			$l10 = $this->input->post('l10');

			$data = array(
				'id_category' => $id_category,
				'l1' => $l1,
				'l2' => $l2,
				'l3' => $l3,
				'l4' => $l4,
				'l5' => $l5,
				'l6' => $l6,
				'l7' => $l7,
				'l8' => $l8,
				'l9' => $l9,
				'l10' => $l10
			);
			$this->ModelCategory->edit($id, $data);
			redirect('category/p/data');
		} else {
			$image_data = $this->upload->data();
			$imgdata = file_get_contents($image_data['full_path']);
			$file_encode = base64_encode($imgdata);

			$id = $this->input->post('no');
			$id_category = $this->input->post('id_category');
			$l1 = $this->input->post('l1');
			$l2 = $this->input->post('l2');
			$l3 = $this->input->post('l3');
			$l4 = $this->input->post('l4');
			$l5 = $this->input->post('l5');
			$l6 = $this->input->post('l6');
			$l7 = $this->input->post('l7');
			$l8 = $this->input->post('l8');
			$l9 = $this->input->post('l9');
			$l10 = $this->input->post('l10');


			$data = array(
				'id_category' => $id_category,
				'l1' => $l1,
				'l2' => $l2,
				'l3' => $l3,
				'l4' => $l4,
				'l5' => $l5,
				'l6' => $l6,
				'l7' => $l7,
				'l8' => $l8,
				'l9' => $l9,
				'l10' => $l10
			);
		}

		$this->ModelCategory->edit($id, $data);
		redirect('category/p/data');
	}
	public function hapus($id)
	{
		$this->ModelCategory->hapus('tb_category', $id);
		redirect('category/p/data');
	}
	public function search()
	{
		$data['keyword'] = $this->input->post('keyword');
		$data['data'] = $this->category_m->get_keyword($keyword);
		echo $this->input->post('keyword');
	}
}
