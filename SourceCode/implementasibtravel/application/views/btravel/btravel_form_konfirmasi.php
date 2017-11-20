<?php $this->load->view('templates/header'); ?>


<form action="<?php echo $aksi ?>" method="POST" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nama konfirmasi</label>
		<input type="text" name="nama_konfirmasi" class="form-control" placeholder="Inputkan nama konfirmasi" required value="<?php echo $nama_konfirmasi; ?>">
	</div>
	<div class="form-group">
		<label>Butki Transfer : </label>
		<input type="file" name="filefoto" class="form-control" placeholder="Inputkan bukti transfer">
	</div>
	<input type="hidden" name="id_booking" required value="<?php echo $id_booking	; ?>">
	<button class="btn btn-primary" type="submit"> <?php echo $button; ?> </button>
</form>


<?php $this->load->view('templates/footer'); ?>