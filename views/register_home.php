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
<div>
<h2>List of Registered Users</h2>
<div class="row">
<?php foreach ($posts as $post):?>
		<div class="col-md-3">
		<div class="col-xs-6"><img style="width:100px; height:100px;" src="<?php echo site_url('assets/images/profile/'.$post['profilepic']);?>"></div>
		<div class="col-xs-6">
	<h3>
		<?php echo $post['name']; ?>
	</h3>
		<?php echo "Email-Id: ".$post['email']; ?>
	<br>
	<?php echo "Username: ".$post['username'];?>
	<p><a class="btn btn-default" href="<?php echo site_url('/register/edit/'.$post['id']); ?>">Edit</a></p>
    <p><a class="btn btn-default" href="<?php echo site_url('/register/delete/'.$post['id']); ?>">Delete</a></p>
		</div>
		</div>
<?php endforeach; ?>
</div>
</div>