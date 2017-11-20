<?php 
/**
* 
*/
class Btravelkonfirmasi extends CI_Controller
{

    var $limit=10;
    var $offset=10;
    
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Btravel_model_konfirmasi');
	}

	function index()
	{
		//print_r($this->Prodi_model->ambil_data());
		$data['konfirmasi']=$this->Btravel_model_konfirmasi->ambil_data();
		$this->load->view('btravel/Btravel_admin_listkonfirmasi',$data);
	}


	function tambah($id)
	{
		$data=array(
			'aksi' => site_url('Btravelkonfirmasi/tambah_aksi'),
			'id_booking' => set_value('id_booking',$id),
            'username_member' => set_value('username_member'),
			'nama_konfirmasi' => set_value('nama_konfirmasi'),
			'id_konfirmasi' => set_value('id_konfirmasi'),
			'button' => 'Konfirmasi',
		);
		$this->load->view('admin/Settingbookinglist_konfirmasi',$data);
	}


	function tambah_aksi()
	{

		$this->load->library('upload');
        $nmfile = "".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/uploads/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '3072'; //maksimum besar file 3M
        $config['max_width']  = '5000'; //lebar maksimum 5000 px
        $config['max_height']  = '5000'; //tinggi maksimu 5000 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);
        
        if($_FILES['filefoto']['name'])
        {
        	if ($this->upload->do_upload('filefoto'))
        	{
        		$gbr = $this->upload->data();
        		$data = array(
        			'gambar' =>$gbr['file_name'],
        			'id_booking' => $this->input->post('id_booking'),
                    'username_member' => $this->input->post('username_member'),
        			'nama_konfirmasi' => $this->input->post('nama_konfirmasi')
        		);
        		$this->Btravel_model_konfirmasi->tambah_data($data);
        		redirect(site_url('Btravelbooking/indexuser/'.$this->session->userdata('username')));
        	}
        	else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
        		$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Insert data gagal !!</div></div>");
                redirect(site_url('Btravelkonfirmasi/tambah')); //jika gagal maka akan ditampilkan form upload
            }
        }
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
    	redirect(site_url('Btraveladmin/listbooking'));
    }


    function delete($id)
    {
    	$this->Btravel_model_konfirmasi->hapus_data($id);
    	redirect(site_url('Btraveladmin/settingkonfirmasilist'));
    }


    function download($id){
        if(!empty($id)){
            //load download helper
            $this->load->helper('download');
            
            //get file info from database
            $fileInfo = $this->Btravel_model_konfirmasi->ambil_data_id($id);
            
            $gambar = $fileInfo->gambar;
            //file path
            $file = 'assets/uploads/'.$gambar;            
            //download file from directory
            force_download($file, NULL);
        }
    }


}
?>