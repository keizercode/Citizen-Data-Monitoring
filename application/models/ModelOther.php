<?php 
class ModelOther extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function showall($tb,$prop)
	{
		return $this->db->query("SELECT * FROM $tb $prop");
	}
	public function show($tb)
	{
		return $this->db->get($tb);
	}
	public function simpan($val)
	{
		return $this->db->insert('tb_other',$val);
	}
	public function edit($id,$val)
	{
		$this->db->where('id_other',$id);
		return $this->db->update('tb_other',$val);
	}
	public function hapus($tb,$id)
	{
		$this->db->where("id_other",$id);
		return $this->db->delete($tb);
	}
	public function no()
	{
		return $this->db->query("SELECT max(id_other) AS kode FROM tb_other");
	}

	public function get_keyword($keyword){
		return $this->db->query("SELECT * FROM tb_other WHERE product_name LIKE '%$keyword%'");
		
	}

	// public function simpan()
	// {
	// 	$id_other = $this->input->post('id_other');
	// 	$product_name = $this->input->post('product_name');
	// 	$date_update = $this->input->post('date_update');
	// 	$reason = $this->input->post('reason');
	// 	$status = $this->input->post('status');

	// 	$data = array(
	// 		'id_other' => $id_other,
	// 		'product_name' => $product_name,
	// 		'date_update' => $date_update,
	// 		'reason' => $reason,
	// 		'status'=> $status
	// 	);

	// 	$this->modelother->simpan($data);
	// 	redirect('other/p/data');
	// }
}
?>