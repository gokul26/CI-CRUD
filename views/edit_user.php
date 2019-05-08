<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<h1><?php echo $title; ?></h1>
<?php echo validation_errors(); ?>
<?php echo form_open_multipart('register/update'); ?>
<div class="form-group">
    <input type="hidden" name="id" value="<?php echo $posts['id']?>">
	<label>Name</label>
	<input type="text" name="name" value="<?php echo $posts['name']; ?>" class="form-control">
</div>
<div class="form-group">
	<label>Email</label>
	<input type="text" name="email" value="<?php echo $posts['email']; ?>" class="form-control">
</div>
<div class="form-group">
	<label>Username</label>
	<input type="text" name="username" value="<?php echo $posts['username']; ?>" class="form-control">
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