<?php
class ModelCategory extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}
	public function showall($tb, $prop)
	{
		return $this->db->query("SELECT * FROM $tb $prop");
	}
	public function show($tb)
	{
		return $this->db->get($tb);
	}
	public function simpan($val)
	{
		return $this->db->insert('tb_category', $val);
	}
	public function edit($id, $val)
	{
		$this->db->where('no', $id);
		return $this->db->update('tb_category', $val);
	}
	public function hapus($tb, $id)
	{
		$this->db->where("no", $id);
		return $this->db->delete($tb);
	}
	public function no()
	{
		return $this->db->query("SELECT max(no) AS kode FROM tb_category");
	}

	public function get_keyword($keyword)
	{
		$this->db->select('*');
		$this->db->from('tb_category');
		$this->db->like('l1', $keyword);
		$this->db->or_like('l2', $keyword);
		$this->db->or_like('l3', $keyword);
		$this->db->or_like('l4', $keyword);
		$this->db->or_like('l5', $keyword);
		$this->db->or_like('l6', $keyword);
		$this->db->or_like('l7', $keyword);
		$this->db->or_like('l8', $keyword);
		$this->db->or_like('l9', $keyword);

		return $this->db->get();
	}
}
