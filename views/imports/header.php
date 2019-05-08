<?php 
//Loading url helper
$this->load->helper('url');
?>
<html>
<head>
    <title>CodeX</title>
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>assets/css/united/bootstrap.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type='text/javascript' src="<?php echo base_url(); ?>assets/js/united/bootstrap.min.js"></script>
    <style type="text/css">
      div > .panel-primary
      {
        padding-bottom: 15px;
      }
    </style>
</head>
<body>
<div class="navbar navbar-default">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">CI Tutorial</a>
  </div>
  <div class="navbar-collapse collapse navbar-responsive-collapse">
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?php echo base_url(); ?>">Register</a></li>
    </ul>
  </div>
</div>
<div class="container-fluid">
