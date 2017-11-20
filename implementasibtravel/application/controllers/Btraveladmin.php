<?php 
/**
* 
*/
class Btraveladmin extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Btravel_model');
		$this->load->model('Btravel_model_booking');
		$this->load->model('Btravel_model_komentar');
		$this->load->model('Btravel_model_member');
		$this->load->model('Btravel_model_konfirmasi');
	}

	function index()
	{
		$this->load->view('btravel/Btravel_admin');
	}

	function listpaket()
	{
		$data['btravel']=$this->Btravel_model->ambil_data();
		$this->load->view('btravel/Btravel_admin_listpaket',$data);
	}

	function listbooking()
	{
		$data['listbooking']=$this->Btravel_model_booking->ambil_data_booking();
		$this->load->view('btravel/Btravel_admin_listbooking',$data);
	}

	function listkomentar()
	{
		$data['komentar']=$this->Btravel_model_komentar->ambil_data();
		$this->load->view('btravel/Btravel_admin_listkomentar',$data);
	}

	function listmember()
	{
		$data['member']=$this->Btravel_model_member->ambil_data_member();
		$this->load->view('btravel/Btravel_admin_listmember',$data);
	}

	function listkonfirmasi()
	{
		$data['konfirmasi']=$this->Btravel_model_konfirmasi->ambil_data();
		$this->load->view('btravel/Btravel_admin_listkonfirmasi',$data);
	}

	function settinghome()
    {
        $this->load->view('admin/Settinghome');
    }

    function settingbookinglist()
    {
    	$data['listbooking']=$this->Btravel_model_booking->ambil_data_booking();
    	$this->load->view('admin/Settingbookinglist',$data);
    }

    function settingkomentarlist()
    {
    	$data['komentar']=$this->Btravel_model_komentar->ambil_data();
    	$this->load->view('admin/Settingkomentarlist',$data);
    }

    function settingmemberlist()
    {
    	$data['member']=$this->Btravel_model_member->ambil_data_member();
    	$this->load->view('admin/Settingmemberlist',$data);
    }

    function settingkonfirmasilist()
    {
    	$data['konfirmasi']=$this->Btravel_model_konfirmasi->ambil_data();
    	$this->load->view('admin/Settingkonfirmasilist',$data);
    }

    function settingpaketlist()
    {
    	$data['btravel']=$this->Btravel_model->ambil_data();
    	$this->load->view('admin/Settingpaketlist',$data);
    }

    function settingpaketlisttambah()
    {
    	$this->load->view('admin/Settingpaketlist_tambah');
    }




}
?>