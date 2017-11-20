<?php 
/**
* 
*/
class Btravel_model_booking extends CI_Model	{
	public $nama_table_paket = 'paket';
	public $nama_table_member = 'member';
	public $nama_table_booking = 'booking';
	public $id = 'id_booking';
	public $username = 'username_member';
	public $order = 'ASC';

	function __construct()
	{
		parent::__construct();
	}

	function ambil_data_booking()
	{
		$this->db->select('booking.id_booking, paket.nama_paket, booking.username_member, booking.atas_nama, booking.jenis_pembayaran, booking.status');
        $this->db->from('booking');
        $this->db->join('paket', 'booking.id_paket = paket.id_paket');
    	return $this->db->get()->result();
	
	}

	function ambil_data_username($username)
	{
		/**
		$this->db->where($this->username,$username);
		return $this->db->get($this->nama_table_booking)->result();
		**/
		$this->db->select('booking.id_booking, paket.nama_paket, booking.username_member, booking.atas_nama, booking.jenis_pembayaran, booking.status');
        $this->db->from('booking');
        $this->db->join('paket', 'booking.id_paket = paket.id_paket');
        $this->db->where($this->username,$username);
		return $this->db->get()->result();
	
	}

	function hapus_data($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->delete($this->nama_table_booking);
	}


	function edit_data($id,$data)
	{
		$this->db->where($this->id,$id);
		return $this->db->update($this->nama_table_booking,$data);
	}
}
 ?>