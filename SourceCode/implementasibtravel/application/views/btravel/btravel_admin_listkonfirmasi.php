<?php 
$this->load->view('templates/headerAdmin');
?>
<div class="row">
	<div class="col-md-12 text-right">
	</div>	
</div>
<br>
<div class="row">
	<table border="1" id="example" class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>ID</th>
				<th>ID Booking</th>
				<th>Nama Konfirmasi</th>
				<th>Bukti Konfirmasi</th>
				<th>Aksi</th>

			</tr>
		</thead>
		<tbody>
			<?php foreach ($konfirmasi as $key => $value) {
				?>
				<tr>
					<td><?php echo $value->id_konfirmasi; ?></td>
					<td><?php echo $value->id_booking; ?></td>
					<td><?php echo $value->nama_konfirmasi; ?></td>
					<td><img style="width:200px; height:auto;"  src="<?php echo site_url()?>assets/uploads/<?php echo $value->gambar; ?>"></td>
					<td>
						<a href="<?php echo site_url('btravelkonfirmasi/delete/'.$value->id_konfirmasi); ?> " class="btn btn-danger">
							<i class="fa fa-trash"></i>
						</a>

						<a href="<?php echo site_url('btravelkonfirmasi/download/'.$value->id_konfirmasi); ?> " class="btn btn-danger">
							<i>Download</i>
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