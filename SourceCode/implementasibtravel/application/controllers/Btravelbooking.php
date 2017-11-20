<?php 
/**
* 
*/
class Btravelbooking extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Btravel_model_booking');
	}

	function index()
	{
		//print_r($this->Prodi_model->ambil_data());
		$data['listbooking']=$this->Btravel_model_booking->ambil_data_booking();

		$this->load->view('btravel/Btravel_listbooking',$data);
	}

	function indexuser($username)
	{
		
		//print_r($this->Prodi_model->ambil_data());
		$data['listbooking1']=$this->Btravel_model_booking->ambil_data_username($username);

		$this->load->view('admin/Settingbookinglist',$data);
	}

	function update($id)
	{
		$btravel = $this->Btravel_model->ambil_data_id($id);
		$data=array(
			'aksi' => site_url('Btravel/update_aksi'),
			'nama_paket' => set_value('namapaket',$btravel->nama_paket),
			'harga_paket' => set_value('hargapaket',$btravel->harga_paket),
			'rincian_paket' => set_value('rincianpaket',$btravel->rincian_paket),
			'id_paket' => set_value('id_paket',$btravel->id_paket),
			'button' => 'Update',
			);
		$this->load->view('btravel/Btravel_admin_form',$data);
	}

	function update_aksi_proses($id)
	{
		$data=array(
			'status' => 'Lunas'
			);

		$id_booking=$id;
		$this->Btravel_model_booking->edit_data($id_booking,$data);
		redirect(site_url('Btraveladmin/settingbookinglist'));
	}


	function delete($id)
	{
		$this->Btravel_model_booking->hapus_data($id);
		redirect(site_url('Btraveladmin/settingbookinglist'));
	}


}
?>