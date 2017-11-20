<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('btravel_model');
	}

	public function index()
	{
		if($this->session->userdata('logined') && $this->session->userdata('logined') == true)
		{
			redirect('btravel');
		}
		
		if(!$this->input->post())
		{
			$this->load->view('btravel/btravel_login');
		}
		else
		{
			$cek_login = $this->btravel_model->cek_login(
				$this->input->post('username'),
				$this->input->post('password')
				);
			if(!empty($cek_login))
			{
				$this->session->set_userdata('username',$cek_login->username_member);
				$this->session->set_userdata('logined',true);
				redirect('btravel');
			}
			else
			{
				redirect("btravelgagallogin");
			}
		}
		
	} 
	
	public function logout()
	{
		$this->session->unset_userdata('logined');
		$this->session->unset_userdata('username');
		
		redirect("login");
	} 
}

?>
