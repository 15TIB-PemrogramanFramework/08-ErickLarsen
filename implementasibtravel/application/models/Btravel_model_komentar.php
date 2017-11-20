<?php 
/**
* 
*/
class Btravel_model_komentar extends CI_Model	{
	public $nama_table_komentar = 'komentar';
	public $id = 'id_komentar';
	public $order = 'ASC';

	function __construct()
	{
		parent::__construct();
	}

	function ambil_data()
	{
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->nama_table_komentar)->result();
	}

	function tambah_data($data)
	{
		return $this->db->insert($this->nama_table_komentar,$data);
	}

	function hapus_data($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->delete($this->nama_table_komentar);
	}

	function hitungkomentar()
	{
		$this->db->select('count(id_komentar)');
        $this->db->from('komentar');
		$query = $this->db->get();
		return $query->row();
	}
}
 ?>