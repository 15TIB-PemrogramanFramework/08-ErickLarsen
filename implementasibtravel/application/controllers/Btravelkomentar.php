<?php 
/**
* 
*/
class Btravelkomentar extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Btravel_model_komentar');
	}

	function index()
	{
		//print_r($this->Prodi_model->ambil_data());
		$data['komentar']=$this->Btravel_model_komentar->ambil_data();
		$this->load->view('btravel/Btravel_list_komentar',$data);
		}

	function tambah()
	{
		$data=array(
			'aksi' => site_url('Btravelkomentar/tambah_aksi'),
			'username_member' => set_value('username_member'),
			'isi_komentar' => set_value('isi_komentar'),
			'id_komentar' => set_value('id_komentar'),
			'button' => 'Komentar',
			);
		$this->load->view('btravel/Btravel_komentar',$data);
	}

	function tambah_aksi()
	{
		$data=array(
			'username_member' => $this->input->post('username_member'),
			'isi_komentar' => $this->input->post('isi_komentar'),
			);
		$this->Btravel_model_komentar->tambah_data($data);
		redirect(site_url('Btravel/contact'));
	}	



	function delete($id)
	{
		$this->Btravel_model_komentar->hapus_data($id);
		redirect(site_url('Btraveladmin/settingkomentarlist'));
	}


}
?>