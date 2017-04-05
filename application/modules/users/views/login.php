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
			<p>Vous avez oublié votre <a href = "<?php echo site_url('users/reset_password');?>">mot de passe ?</a></p>
			<?php echo form_fieldset_close();?>
		<?php echo form_close();?>
	</div>
</div>
