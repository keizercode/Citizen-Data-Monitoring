<?php 
class ModelHaki extends CI_Model
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
		return $this->db->insert('tb_haki',$val);
	}
	public function edit($id,$val)
	{
		$this->db->where('id_haki',$id);
		return $this->db->update('tb_haki',$val);
	}
	public function hapus($tb,$id)
	{
		$this->db->where("id_haki",$id);
		return $this->db->delete($tb);
	}
	public function no()
	{
		return $this->db->query("SELECT max(id_haki) AS kode FROM tb_haki");
	}

	public function get_keyword($keyword){
		$this->db->select('*');
		$this->db->from('tb_haki');
		$this->db->like('brand',$keyword);
		$this->db->or_like('notes',$keyword);
		return $this->db->get();		
	}

}
?>