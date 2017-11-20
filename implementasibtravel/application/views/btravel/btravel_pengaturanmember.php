<?php $this->load->view('templates/header'); ?>


<form action="<?php echo $aksi ?>" method="POST">
	<div class="form-group">
		<label>Password : </label>
		<input type="text" name="password_member" class="form-control" placeholder="Inputkan nama" required value="<?php echo $password_member; ?>">
	</div>
	<input type="hidden" name="username_member" value="<?php echo $username_member ?> ">
	<button class="btn btn-primary" type="submit"> <?php echo $button; ?> </button>
</form>


<?php $this->load->view('templates/footer'); ?>