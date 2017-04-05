<div class = "row">
	<div class = "col-md-offset-3 col-md-6 col-md-offset-3">
		<?php echo form_open('', array('class' => 'well'));?>
			<?php echo form_fieldset('Ajouter un utilisateur');?>
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
					<?php echo form_label('Groupes de l\'utilisateur : <b class = "text-danger">*</b>', 'group_ids');?>
					<ul class="list-group">
						<?php foreach($liste_group as $group):?>
						<li class="list-group-item">
							<?php echo $group->group_name;?> :
							<div class="btn-switch pull-right">
								<input id = "<?php echo $group->group_id;?>" name = "group_ids[]" type="checkbox" value = "<?php echo $group->group_id;?>" class = "tooltip-input" title = 'Activer pour choisir ce groupe' />
								<label for = "<?php echo $group->group_id;?>" class="label-success"></label>
							</div>
						</li>
						<?php endforeach;?>
					</ul>
				</div>
			</div>
		</div>
			
			
			<div class = "form-group">
				<?php echo form_submit('submit', 'Valider', array('class' => 'btn btn-primary'));?>
			</div>
			<?php echo form_fieldset_close();?>
		<?php echo form_close();?>
	</div>
	<p class = "text-center"><a href="<?php echo site_url('users'); ?>" class="btn btn-sm btn-primary"><i class = "glyphicon glyphicon-th-list"></i> Liste des utilisateurs</a></p>
</div>