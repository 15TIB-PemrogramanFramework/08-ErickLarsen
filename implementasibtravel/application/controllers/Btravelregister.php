<?php 
/**
* 
*/
class Btravelregister extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Btravel_model_register');
	}

	function index()
	{
		$this->load->view('btravel/Btravel_register',$data);
	}


	function tambah()
	{
		$data=array(
			'aksi' => site_url('Btravelregister/tambah_aksi'),
			'username_member' => set_value('username'),
			'email_member' => set_value('email'),
			'password_member' => set_value('password')
		);
		$this->load->view('btravel/Btravel_register',$data);
	}

	function tambah_aksi()
	{
		$data=array(
			'username_member' => $this->input->post('username'),
			'email_member' => $this->input->post('email'),
			'password_member' => md5($this->input->post('password'))
			);
		
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');

		$this->form_validation->set_rules(
			'username', 'Username',
			'is_unique[member.username_member]|is_unique[admin.username_admin]',
			array(
				'required'      => 'You have not provided %s.',
				'is_unique'     => 'This %s already exists.'
			)
		);
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			redirect(site_url('Btravel/home'));
		}
		else
		{
			$this->Btravel_model_register->tambah_data($data);
			redirect(site_url('Login'));
		}
	}

}


?>