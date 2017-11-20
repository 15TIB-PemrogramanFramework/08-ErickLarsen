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
				<th>ID paket</th>
				<th>Username member</th>
				<th>Atas nama</th>
				<th>Jenis pembayaran</th>
				<th>Status</th>
				<th>Aksi</th>

			</tr>
		</thead>
		<tbody>
			<?php foreach ($listbooking as $key => $value) {
				?>
				<tr>
					<td><?php echo $value->id_booking; ?></td>
					<td><?php echo $value->id_paket; ?></td>
					<td><?php echo $value->username_member; ?></td>
					<td><?php echo $value->atas_nama; ?></td>
					<td><?php echo $value->jenis_pembayaran; ?></td>
					<td><?php echo $value->status; ?></td>
					<td>
						<a href="<?php echo site_url('btravelbooking/update_Aksi_proses/'.$value->id_booking); ?> " class="btn btn-warning">
							<b>LUNAS</b>
						</a>
						<a href="<?php echo site_url('btravelbooking/delete/'.$value->id_booking); ?> " class="btn btn-danger">
							<i class="fa fa-trash"></i>
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