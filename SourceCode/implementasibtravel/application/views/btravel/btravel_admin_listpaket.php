<?php 
$this->load->view('templates/headerAdmin');
?>
<div class="row">
	<div class="col-md-12 text-right">
		<a href="<?php echo site_url('btravel/tambah'); ?>" class="btn btn-primary" style="margin-top:20px;margin-bottom:20px"><i class="fa fa-plus"></i> Tambah</a>
	</div>	
</div>
<div class="row">
	<table border="1" id="example" class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nama paket</th>
				<th>Harga paket</th>
				<th>Rincian</th>
				<th>Gambar</th>
				<th>Aksi</th>

			</tr>
		</thead>
		<tbody>
			<?php foreach ($btravel as $key => $value) {
				?>
				<tr>
					<td><?php echo $value->id_paket; ?></td>
					<td><?php echo $value->nama_paket; ?></td>
					<td><?php echo $value->harga_paket; ?></td>
					<td><?php echo $value->rincian_paket; ?></td>
					<td><img style="width:200px; height:auto;" width="50%" height="50%" src="<?php echo site_url()?>assets/uploads/<?php echo $value->gambar; ?>"></td>
					<td>
						<a href="<?php echo site_url('btravel/delete/'.$value->id_paket); ?> " class="btn btn-danger">
							<i class="fa fa-trash"></i>
						</a>

						<a href="<?php echo site_url('btravel/update/'.$value->id_paket); ?> " class="btn btn-warning">
							<i class="fa fa-pencil"></i>
						</a>

						<a href="<?php echo site_url('btravel/booking/'.$value->id_paket); ?>" class="btn btn-warning">
							<i class="fa fa-pencil"></i>
						</a>	

					</td>
				</tr>
				<?php } ?>

			</tbody>
		</table>
	</div>



	<?php 
	$this->load->view('templates/footer');
	?>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#example').DataTable();
		});
	</script>