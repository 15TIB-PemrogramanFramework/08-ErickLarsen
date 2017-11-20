<?php $this->load->view('templates/header'); ?>


<form action="<?php echo $aksi ?>" method="POST">
	<div class="form-group">
		<label>Nama paket : </label>
		<input type="text" name="namapaket" class="form-control" placeholder="Inputkan nama" required value="<?php echo $nama_paket; ?>">
	</div>
	<div class="form-group">
		<label>Harga paket : </label>
		<input type="text" name="hargapaket" class="form-control" placeholder="Inputkan jurusan" required value="<?php echo $harga_paket ; ?>">
	</div>
	<div class="form-group">
		<label>Rincian paket :</label>
		<input type="text" name="rincianpaket" class="form-control" placeholder="Inputkan akreditasi" required value="<?php echo $rincian_paket ; ?>">
	</div>
	<input type="hidden" name="id_paket" value="<?php echo $id_paket ?> ">
	<button class="btn btn-primary" type="submit"> <?php echo $button; ?> </button>
</form>


<?php $this->load->view('templates/footer'); ?>