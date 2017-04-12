<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Application de Gestion d'entreprise">
		<meta name="author" content="RCA SOFT">

		<title>Gestion d'entreprise</title>
		
		<link href="<?php echo base_url('assets/css/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet" type = "text/css" >
		<link href="<?php echo base_url('assets/datatables/datatables.bootstrap.css');?>" rel="stylesheet" />
		<link href="<?php echo base_url('assets/css/bootstrap-datepicker3.standalone.min.css');?>" rel="stylesheet" type = "text/css">
		<link href="<?php echo base_url('assets/css/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" type = "text/css">
		<link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet" type = "text/css">
	</head>
	
	<body>
		<div class="row">
			<div class="col-md-offset-1 col-md-10 col-md-offset-1">
				<div class="contenu">
					<div class="header-banner">
						<img src="<?php echo site_url('assets/img/banner.jpg'); ?>" height="100" width="100%">
					</div>
					
					<div class="header">
						<div class="navbar navbar" role="banner">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							  <span class="sr-only">Toggle navigation</span>
							  <span class="icon-bar"></span>
							  <span class="icon-bar"></span>
							  <span class="icon-bar"></span>
							</button>
							<nav class="collapse navbar-collapse" role="navigation" id = "navbar">
								<ul class="nav navbar-nav pull-right">
									<li><a href="<?php echo site_url('users/login'); ?>"><i class = "glyphicon glyphicon-log-in"></i> Connexion</a></li>
									<li><a href="#"><i class = "glyphicon glyphicon-flag"></i> Contactez-nous</a></li>
								</ul>
							</nav>
						</div>
					</div>
					
					<?php
						if($this->session->flashdata('success')){
							echo "<p class = 'alert alert-success'><i class = 'glyphicon glyphicon-ok-sign'></i> ".$this->session->flashdata('success')."</p>";
						}
						if($this->session->flashdata('info')){
							echo "<p class = 'alert alert-info'><i class = 'glyphicon glyphicon-info-sign'></i> ".$this->session->flashdata('info')."</p>";
						}
						if($this->session->flashdata('error')){
							echo "<p class = 'alert alert-danger'><i class = 'glyphicon glyphicon-remove-sign'></i> ".$this->session->flashdata('error')."</p>";
						}
						if($this->session->flashdata('warning')){
							echo "<p class = 'alert alert-warning'><i class = 'glyphicon glyphicon-ban-circle'></i> ".$this->session->flashdata('warning')."</p>";
						}
					  ?>
					
					<br>
			
			