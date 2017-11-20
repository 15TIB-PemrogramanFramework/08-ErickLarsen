<?php 
/**
* 
*/
class Btravel extends CI_Controller
{

	var $limit=10;
	var $offset=10;
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Btravel_model');
	}

	function index()
	{
		//print_r($this->Prodi_model->ambil_data());
		$data['btravel']=$this->Btravel_model->ambil_data();
		$this->load->view('btravel/Btravel_list',$data);
	}

    function home()
    {
        $this->load->view('member/Home');
    }

    function about()
    {
        $this->load->view('member/About');
    }

    function paket()
    {
        $data['btravel']=$this->Btravel_model->ambil_data();
        $this->load->view('member/Paket',$data);
    }

    function contact()
    {
        $this->load->view('member/Contact');
    }

    


	function tambah()
	{
		$data=array(
			'aksi' => site_url('Btravel/tambah_aksi'),
			'nama_paket' => set_value('namapaket'),
			'harga_paket' => set_value('hargapaket'),
			'rincian_paket' => set_value('rincianpaket'),
			'id_paket' => set_value('id_paket'),
			'button' => 'Tambah',
		);
		$this->load->view('admin/Settingpaketlist_tambah',$data);
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
        			'nama_paket' => $this->input->post('namapaket'),
        			'harga_paket' => $this->input->post('hargapaket'),
        			'rincian_paket' => $this->input->post('rincianpaket')                  
        		);
        		$this->Btravel_model->tambah_data($data);
        		redirect(site_url('Btraveladmin/settingpaketlist'));
        	}
        	else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
        		$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Insert data gagal !!</div></div>");
                redirect(site_url('Btravel/tambah')); //jika gagal maka akan ditampilkan form upload
            }
        }

        $data = array(
        	'nama_paket' => $this->input->post('namapaket'),
        	'harga_paket' => $this->input->post('hargapaket'),
        	'rincian_paket' => $this->input->post('rincianpaket')                  
        );
        $this->btravel_model->tambah_data($data);
        redirect(site_url('btraveladmin/listpaket'));
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
            'gambar' => set_value('gambar',$btravel->gambar),
    		'button' => 'Update',
    	);
    	$this->load->view('admin/Settingpaketlist_edit',$data);
    }

    function update_aksi()
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
        			'nama_paket' => $this->input->post('namapaket'),
        			'harga_paket' => $this->input->post('hargapaket'),
        			'rincian_paket' => $this->input->post('rincianpaket')                  
        		);
        		$id_paket=$this->input->post('id_paket');
    			$this->Btravel_model->edit_data($id_paket,$data);
    			redirect(site_url('Btraveladmin/settingpaketlist'));
        	}
        	else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
        		$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Insert data gagal !!</div></div>");
                redirect(site_url('Btraveladmin/settingpaketlist')); //jika gagal maka akan ditampilkan form upload
            }
        }


    	
    }

    function update_aksi_member()
    {
    	$data=array(
    		'password_member' => $this->input->post('password_member'),
    	);

    	$username=$this->input->post('username_member');
    	$this->Btravel_model_member->edit_data($username,$data);
    	redirect(site_url('Btravelmember/pengaturan'));
    }

    function delete($id)
    {
    	$this->Btravel_model->hapus_data($id);
    	redirect(site_url('Btraveladmin/settingpaketlist'));
    }


    function booking($id)
    {
    	$btravel = $this->Btravel_model->ambil_data_booking_idpaket($id);
    	$data=array(
    		'aksi' => site_url('Btravel/booking_aksi'),
    		'id_paket' => set_value('id_paket',$btravel->id_paket),
    		'username_member' => set_value('username_member'),
    		'atas_nama' => set_value('atas_nama'),
    		'jenis_pembayaran' => set_value('jenis_pembayaran'),
    		'note' => set_value('note'),
    		'id_booking' => set_value('id_booking'),
    		'button' => 'Booking',
    	); 
    	$this->load->view('member/Booking',$data);
    }

    function booking_aksi()
    {
    	$data=array(
    		'id_paket' => $this->input->post('id_paket'),
    		'username_member' => $this->input->post('username_member'),
    		'atas_nama' => $this->input->post('atas_nama'),
    		'jenis_pembayaran' => $this->input->post('jenis_pembayaran'),
    		'status' => 'Proses',
    	);
    	$this->Btravel_model->booking_data($data);
    	redirect(site_url('Btravel/paket'));
    }



}
?>