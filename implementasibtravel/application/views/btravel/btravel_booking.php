<?php $this->load->view('templates/header'); ?>


<form action="<?php echo $aksi ?>" method="POST">
	<div class="form-group">
		<label>Atas nama : </label>
		<input type="text" name="atas_nama" class="form-control" placeholder="Inputkan atas nama">
	</div>
	<div class="form-group">
		<label>Jenis pembayaran : </label>
		<input type="text" name="jenis_pembayaran" class="form-control" placeholder="Inputkan jenis pembayaran">
	</div>
	<input type="hidden" name="id_paket" value="<?php echo $id_paket ?> ">
	<input type="hidden" name="username_member" value="<?php echo $this->session->userdata('username');?> ">
	<button class="btn btn-primary" type="submit"> <?php echo $button; ?> </button>
</form>


<?php $this->load->view('templates/footer'); ?>