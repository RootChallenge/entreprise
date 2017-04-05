<div class = "row">
	<div class = "col-md-offset-3 col-md-6 col-md-offset-3">
		<?php echo form_open('', array('class' => 'well'));?>
			<?php echo form_fieldset('Créer un compte gratuitement');?>
		<div class = 'row'>
			<div class = "col-md-6">
				<div class = "form-group">
					<?php echo form_label('Nom d\'utilisateur : <b class = "text-danger">*</b>', 'users_username');?>
					<input  value = "<?php echo set_value('users_username');?>" type="text" name = "users_username" class="form-control tooltip-input" placeholder="Nom d'utilisateur..." required title = "Entrez le nom d'utilisateur." />
					<?php echo form_error('users_username');?>
				</div>
				<div class = "form-group">
					<?php echo form_label('Adresse E-mail : <b class = "text-danger">*</b>', 'users_email');?>
					<input  value = "<?php echo set_value('users_email');?>" type="email" name = "users_email" class="form-control tooltip-input" placeholder="Adresse E-mail..." required title = "Entrez l'adresse E-mail." />
					<?php echo form_error('users_email');?>
				</div>
			</div>
			<div class = "col-md-6">
				<div class = "form-group">
					<?php echo form_label('Nom de famille : <b class = "text-danger">*</b>', 'users_nom');?>
					<input  value = "<?php echo set_value('users_nom');?>" type="text" name = "users_nom" class="form-control tooltip-input" placeholder="Nom de famille..." required title = "Entrez le nom de famille." />
					<?php echo form_error('users_nom');?>
				</div>

				<div class = "form-group">
					<?php echo form_label('Prénom : <b class = "text-danger">*</b>', 'users_prenom');?>
					<input  value = "<?php echo set_value('users_prenom');?>" type="text" name = "users_prenom" class="form-control tooltip-input" placeholder="Prénom ..." required title = "Entrez le prénom." />
					<?php echo form_error('users_prenom');?>
				</div>
			</div>
			<div class = 'col-md-6'>
				<div class = "form-group">
					<?php echo form_label('Mot de passe : <b class = "text-danger">*</b>', 'users_password');?>
					<input  value = "" type="password" name = "users_password" class="form-control tooltip-input" placeholder="Mot de passe..." required title = "Entrez votre mot de passe." />
					<?php echo form_error('users_password');?>
				</div>
			</div>
			<div class = 'col-md-6'>
				<div class = "form-group">
					<?php echo form_label('Confirmation de mot de passe : <b class = "text-danger">*</b>', 'users_password_confirm');?>
					<input  value = "" type="password" name = "users_password_confirm" class="form-control tooltip-input" placeholder="Confirmation mot de passe ..." required title = "Entrez de nouveau votre mot de passe." />
					<?php echo form_error('users_password_confirm');?>
				</div>
			</div>
		</div>
		<div class = "form-group">
			<?php echo form_submit('submit', 'Valider', array('class' => 'btn btn-primary'));?>
		</div>
		<?php echo form_fieldset_close();?>
		<?php echo form_close();?>
	</div>
</div>
