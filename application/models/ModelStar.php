<?php 
class Modelstar extends CI_Model
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
		return $this->db->insert('tb_starseller',$val);
	}
	public function edit($id,$val)
	{
		$this->db->where('no',$id);
		return $this->db->update('tb_starseller',$val);
	}
	public function hapus($tb,$id)
	{
		$this->db->where("no",$id);
		return $this->db->delete($tb);
	}
	public function no()
	{
		return $this->db->query("SELECT max(no) AS kode FROM tb_starseller");
	}

	public function get_keyword($keyword){
		$this->db->select('*');
		$this->db->from('tb_starseller');
		$this->db->like('product_name',$keyword);
		$this->db->or_like('merk',$keyword);
		$this->db->or_like('nama_lain',$keyword);
		$this->db->or_like('type',$keyword);
		return $this->db->get();		
	}


}
?>