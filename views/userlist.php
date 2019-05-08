<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<h1><?php echo $title; ?></h1>
<?php echo validation_errors(); ?>
<?php echo form_open_multipart('register/create'); ?>
<div class="form-group">
	<label>Name</label>
	<input type="text" name="name" class="form-control">
</div>
<div class="form-group">
	<label>Email</label>
	<input type="text" name="email" class="form-control">
</div>
<div class="form-group">
	<label>Username</label>
	<input type="text" name="username" class="form-control">
</div>
<div class="form-group">
	<label>Upload Picture</label>
	<input type="file" name="profilepic">
</div>
<div class="form-group">
	<button type="submit" class="btn btn-primary btn-block">Register</button>
</div>
<?php echo form_close(); ?>
</div>
</div>