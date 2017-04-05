<div class = "row">
	<div class = "col-md-offset-4 col-md-4 col-md-offset-4">
		<?php echo form_open('', array('class' => 'well'));?>
			<?php echo form_fieldset('Récuperation de mot de passe');?>
			<div class = "form-group">
				<?php echo form_label('E-mail :', 'users_email');?>
				<?php echo form_input('users_email', set_value('users_email'), array('class' => "form-control tooltip-input", 'required' => true, 'placeholder' => 'Adresse E-mail', 'title' => 'Veuillez saisir votre adresse E-mail'));?>
				<?php echo form_error('users_email');?>
			</div>
			<div class = "form-group">
				<?php echo form_submit('submit', 'Valider', array('class' => 'btn btn-primary btn-block'));?>
			</div>
			<p>Se connecter à <a href = "<?php echo site_url('users/login');?>">votre compte</a></p>
			<?php echo form_fieldset_close();?>
		<?php echo form_close();?>
	</div>
</div>
