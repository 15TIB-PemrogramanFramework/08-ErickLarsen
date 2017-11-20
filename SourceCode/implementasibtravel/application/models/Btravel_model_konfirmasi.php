<?php 
/**
* 
*/
class Btravel_model_konfirmasi extends CI_Model	{
	public $nama_table_konfirmasi = 'konfirmasi';
	public $id = 'id_konfirmasi';
	public $order = 'ASC';

	function __construct()
	{
		parent::__construct();
	}

	function ambil_data()
	{
		$this->db->select('konfirmasi.id_konfirmasi, paket.nama_paket, konfirmasi.username_member, konfirmasi.nama_konfirmasi, konfirmasi.gambar');
        $this->db->from('konfirmasi');
        $this->db->join('booking', 'booking.id_booking = konfirmasi.id_booking');
    	$this->db->join('paket', 'booking.id_paket = paket.id_paket');
    	return $this->db->get()->result();
		
	}

	function hapus_data($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->delete($this->nama_table_konfirmasi);
	}

	function tambah_data($data)
	{
		return $this->db->insert($this->nama_table_konfirmasi,$data);
	}

	function edit_data($id,$data)
	{
		$this->db->where($this->id,$id);
		return $this->db->update($this->nama_table_konfirmasi,$data);
	}

	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->nama_table_konfirmasi)->row();//1 data
	}
}
 ?>