<?php 
/**
* 
*/
class Btravel_model_member extends CI_Model	{
	public $nama_table_member = 'member';
	public $nama_table_booking = 'booking';
	public $nama_table_komentar = 'komentar';
	public $id = 'username_member';
	public $order = 'ASC';

	function __construct()
	{
		parent::__construct();
	}

	function ambil_data_member()
	{
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->nama_table_member)->result();
	}

	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->nama_table_member)->row();
	}

	function hapus_data($id)
	{
		$this->db->where($this->id,$id);
		$this->db->delete($this->nama_table_member);

		$this->db->where($this->id,$id);
		$this->db->delete($this->nama_table_booking);

		$this->db->where($this->id,$id);
		return $this->db->delete($this->nama_table_komentar);
	}

	function edit_data($id,$data)
	{
		$this->db->where($this->id,$id);
		return $this->db->update($this->nama_table_member,$data);
	

}
}
 ?>