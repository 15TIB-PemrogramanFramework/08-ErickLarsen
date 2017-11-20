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
				<th>Username Member</th>
				<th>Isi komentar</th>
				<th>Aksi</th>

			</tr>
		</thead>
		<tbody>
			<?php foreach ($komentar as $key => $value) {
				?>
				<tr>
					<td><?php echo $value->id_komentar; ?></td>
					<td><?php echo $value->username_member; ?></td>
					<td><?php echo $value->isi_komentar; ?></td>
					<td>
						<a href="<?php echo site_url('btravelkomentar/delete/'.$value->id_komentar); ?> " class="btn btn-danger">
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