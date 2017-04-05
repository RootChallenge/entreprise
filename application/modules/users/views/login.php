<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Application de Gestion de facturation pour Media SCAN">
    <meta name="author" content="RCA SOFT">

    <title>Gestion de facturation facturation Media SCAN</title>

    <link href="<?php echo base_url('assets/css/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet" type = "text/css" >
	<link href="<?php echo base_url('assets/datatables/datatables.bootstrap.css');?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/css/bootstrap-datepicker3.standalone.min.css');?>" rel="stylesheet" type = "text/css">
    <link href="<?php echo base_url('assets/css/styles.css');?>" rel="stylesheet" type = "text/css">
  </head>
  <body>
	  <div class="container">
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
			<div class = "row">
				<div class = "col-md-offset-4 col-md-4 col-md-offset-4">
					<?php echo form_open('', array('class' => 'well'));?>
						<?php echo form_fieldset('Veuillez vous authentifier');?>
						<div class = "form-group">
							<?php echo form_label('Nom d\'utilisateur :', 'users_username');?>
							<?php echo form_input('users_username', set_value('users_username'), array('class' => "form-control tooltip-input", 'required' => true, 'placeholder' => 'Nom d\'utilisateur', 'title' => 'Veuillez saisir votre nom d\'utilisateur'));?>
							<?php echo form_error('users_username');?>
						</div>
						<div class = "form-group">
							<?php echo form_label('Mot de passe :', 'users_password');?>
							<?php echo form_password('users_password', null, array('class' => "form-control tooltip-input",  'required' => true, 'placeholder' => 'Mot de passe', 'title' => 'Veuillez saisir votre mot de passe personnel'));?>
							<?php echo form_error('users_password');?>
						</div>
						<div class = "form-group">
							<?php echo form_submit('submit', 'Valider', array('class' => 'btn btn-primary btn-block'));?>
						</div>
						<!--<p>Vous avez oublié votre <a href = "<?php echo site_url('auth/reset_password');?>">Mot de passe ?</a></p>-->
						<?php echo form_fieldset_close();?>
					<?php echo form_close();?>
				</div>
			</div>
		</div><!-- ./container-->
		<script src="<?php echo base_url('assets/js/jquery.js');?>"></script>
		<script src="<?php echo base_url('assets/css/bootstrap/js/bootstrap.min.js');?>"></script>
		<script src="<?php echo base_url('assets/datatables/jquery.datatables.fr.js') ?>"></script>
		<script src="<?php echo base_url('assets/datatables/datatables.bootstrap.js') ?>"></script>
		<script src="<?php echo base_url('assets/js/bootstrap-datepicker.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js/bootstrap-datepicker.fr.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js/script.js');?>"></script>
	</body>
</html>
