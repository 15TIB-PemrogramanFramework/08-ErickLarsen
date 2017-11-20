<?php 
/**
* 
*/
class Prodi_model extends CI_Model	{
	public $nama_table = 'prodi';
	public $id = 'id_prodi';
	public $order = 'ASC';

	function __construct()
	{
		parent::__construct();
	}

	function ambil_data()
	{
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->nama_table)->result();
	}

	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->nama_table)->row();
	}

	function tambah_data($data)
	{
		return $this->db->insert($this->nama_table,$data);
	}

	function hapus_data($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->delete($this->nama_table);
	}

	function edit_data($id,$data)
	{
		$this->db->where($this->id,$id);
		return $this->db->update($this->nama_table,$data);
	}

	function cek_login($username,$password)
	{
		$this->db->where('nama_prodi',$username);
		$this->db->where('jurusan_prodi',$password);
		return $this->db->get($this->nama_table)->row();
	}



}
 ?>