<?php 
/**
* 
*/
class Btravelmember extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Btravel_model_member');
	}

	function index()
	{
		$data['member']=$this->Btravel_model_member->ambil_data_member();
		$this->load->view('btravel/Btravel_admin_listmember',$data);
	}

	function pengaturan()
	{
		redirect(site_url('Btravel'));
	}

	function update($id)
	{
		$member = $this->Btravel_model_member->ambil_data_id($id);
		$data=array(
			'aksi' => site_url('Btravelmember/update_aksi'),
			'password_member' => set_value('password_member',$member->password_member),
			'email_member' => set_value('email_member',$member->email_member),
			'button' => 'Update',
			);
		$this->load->view('admin/Settingmemberpengaturan',$data);
	}

	function update_aksi()
	{
		$data=array(
			'password_member' => md5($this->input->post('password_member')),
			'email_member' => $this->input->post('email_member'),
			);

		$username=$this->input->post('username_member');
		$this->Btravel_model_member->edit_data($username,$data);
		redirect(site_url('Btravelmember/update/'.$username));
	}

	function delete($id)
	{
		$this->Btravel_model_member->hapus_data($id);
		redirect(site_url('Btraveladmin/settingmemberlist'));
	}

}
?>