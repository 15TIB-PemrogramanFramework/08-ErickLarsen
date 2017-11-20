<?php $this->load->view('templates/headerAdmin'); ?>


<form action="<?php echo $aksi?>" method="POST" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nama paket : </label>
		<input type="text" name="namapaket" class="form-control" placeholder="Inputkan nama paket" required value="<?php echo $nama_paket; ?>">
	</div>
	<div class="form-group">
		<label>Harga paket : </label>
		<input type="text" name="hargapaket" class="form-control" placeholder="Inputkan harga paket" required value="<?php echo $harga_paket ; ?>">
	</div>
	<div class="form-group">
		<label>Rincian paket (Gunakan <#br/> untuk enter *Hilangkan tanda pagarnya) :</label>
		<textarea name="rincianpaket" class="form-control" placeholder="Inputkan rincian paket"><?php echo $rincian_paket ; ?></textarea>
	</div>
	<div class="form-group">
		<label>Gambar : </label>
		<input type="file" name="filefoto" class="form-control" placeholder="Inputkan gambar">
	</div>
	<input type="hidden" name="id_paket" value="<?php echo $id_paket ?> ">
	<button class="btn btn-primary" type="submit"> <?php echo $button; ?> </button>
</form>


<?php $this->load->view('templates/footer'); ?>