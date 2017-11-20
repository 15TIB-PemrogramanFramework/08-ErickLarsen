<?php 
/**
* 
*/
class Prodi extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Prodi_model');
	}

	function index()
	{
		//print_r($this->Prodi_model->ambil_data());
		$data['prodi']=$this->Prodi_model->ambil_data();
		$this->load->view('prodi/prodi_list',$data);
		}

	function tambah()
	{
		$data=array(
			'aksi' => site_url('prodi/tambah_aksi'),
			'nama' => set_value('nama'),
			'jurusan' => set_value('jurusan'),
			'akreditasi' => set_value('akreditasi'),
			'id_prodi' => set_value('id_prodi'),
			'button' => 'Tambah',
			);
		$this->load->view('prodi/prodi_form',$data);
	}

	function tambah_aksi()
	{
		$data=array(
			'nama_prodi' => $this->input->post('nama'),
			'jurusan_prodi' => $this->input->post('jurusan'),
			'akreditas_prodi' => $this->input->post('akreditasi'),
			);
		$this->Prodi_model->tambah_data($data);
		redirect(site_url('prodi'));
	}

	function delete($id)
	{
		$this->Prodi_model->hapus_data($id);
		redirect(site_url('prodi'));
	}

	function update($id)
	{
		$prodi = $this->Prodi_model->ambil_data_id($id);
		$data=array(
			'aksi' => site_url('prodi/update_aksi'),
			'nama' => set_value('nama',$prodi->nama_prodi),
			'jurusan' => set_value('jurusan',$prodi->jurusan_prodi),
			'akreditasi' => set_value('akreditasi',$prodi->akreditas_prodi),
			'id_prodi' => set_value('id_prodi',$prodi->id_prodi),
			'button' => 'Edit',
			);
		$this->load->view('prodi/prodi_form',$data);
	}

	function update_aksi()
	{
		$data=array(
			'nama_prodi' => $this->input->post('nama'),
			'jurusan_prodi' => $this->input->post('jurusan'),
			'akreditas_prodi' => $this->input->post('akreditasi'),
			);

		$id_prodi=$this->input->post('id_prodi');
		$this->Prodi_model->edit_data($id_prodi,$data);
		redirect(site_url('prodi'));
	}
}
 ?>