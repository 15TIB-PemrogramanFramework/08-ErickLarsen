<?php 
$this->load->view('templates/header');
?>
<div class="row">
	<div class="col-md-12 text-right">
	</div>	
</div>
<div class="row">
	<table border="1" id="example" class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>ID</th>
				<th>ID paket</th>
				<th>Atas nama</th>
				<th>Jenis pembayaran</th>
				<th>Aksi</th>

			</tr>
		</thead>
		<tbody>
			<?php foreach ($listbooking1 as $key => $value) {
				?>
				<tr>
					<td><?php echo $value->id_booking; ?></td>
					<td><?php echo $value->id_paket; ?></td>
					<td><?php echo $value->atas_nama; ?></td>
					<td><?php echo $value->jenis_pembayaran; ?></td>
					<td>
						<a href="<?php echo site_url('btravelkonfirmasi/tambah/'.$value->id_booking); ?> " class="btn btn-danger">
							<b>Konfirmasi</b>
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