<?php 
$this->load->view('templates/headerAdmin');
?>
<div class="row">
	<div class="col-md-12 text-right">
	</div>	
	<br>
</div>
<div class="row">
	<table border="1" id="example" class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Username</th>
				<th>Password</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($member as $key => $value) {
				?>
				<tr>
					<td><?php echo $value->username_member; ?></td>
					<td><?php echo $value->password_member; ?></td>
					<td>
						<a href="<?php echo site_url('btravelmember/delete/'.$value->username_member); ?> " class="btn btn-danger">
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