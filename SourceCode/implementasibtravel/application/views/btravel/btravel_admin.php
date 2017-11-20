<?php 
$this->load->view('templates/headerAdmin');
?>

<?php 
	$this->load->view('templates/footer');
	?>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#example').DataTable();
		});
	</script>