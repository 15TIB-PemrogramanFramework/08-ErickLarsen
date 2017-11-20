<?php $this->load->view('templates/header'); ?>


<form action="<?php echo $aksi ?>" method="POST">
	<div class="form-group">
		<label>Isi komentar </label>
		<textarea name="isi_komentar" class="form-control" placeholder="Inputkan komentar" ></textarea>
		
	</div>
	
	<input type="hidden" name="username_member" value="<?php echo $this->session->userdata('username');?>">
	<button class="btn btn-primary" type="submit"> Komentar </button>
</form>


<?php $this->load->view('templates/footer'); ?>