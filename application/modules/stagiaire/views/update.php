<div class = "row">
	<div class = "col-md-offset-4 col-md-4 col-md-offset-4">
		<?php echo form_open('', array('class' => 'well'));?>
			<?php echo form_fieldset('Modifier un stagiaire');?>
			
			<div class = "form-group">
				<?php echo form_label('Nom de stagiaire : <b class = "text-danger">*</b>', 'stagiaire_nom');?>
				<?php echo form_input('stagiaire_nom', set_value('stagiaire_nom')?set_value('stagiaire_nom'):$liste_stagiaire->stagiaire_nom, array('class' => "form-control tooltip-input", 'required' => true, 'placeholder' => 'Nom ...', 'title' => 'Veuillez saisir le nom '));?>
				<?php echo form_error('stagiaire_nom');?>
			</div>
			<div class = "form-group">
				<?php echo form_label('Prénom de stagiaire : <b class = "text-danger">*</b>', 'stagiaire_prenom');?>
				<?php echo form_input('stagiaire_prenom', set_value('stagiaire_prenom')?set_value('stagiaire_prenom'):$liste_stagiaire->stagiaire_prenom, array('class' => "form-control tooltip-input", 'required' => true, 'placeholder' => 'Prénom ...', 'title' => 'Veuillez saisir le prénom '));?>
				<?php echo form_error('stagiaire_prenom');?>
			</div>
			
			
			<div class = "form-group">
				<?php echo form_label('Téléphone : <b class = "text-danger">*</b>', 'stagiaire_tel');?>
				<?php echo form_input('stagiaire_tel', set_value('stagiaire_tel')?set_value('stagiaire_tel'):$liste_stagiaire->stagiaire_tel, array('class' => "form-control tooltip-input", 'required' => true, 'placeholder' => 'Téléphone ...', 'title' => 'Veuillez saisir le téléphone'));?>
				<?php echo form_error('stagiaire_tel');?>
			</div>
			
			<div class = "form-group">
				<?php echo form_label('Email : <b class = "text-danger">*</b>', 'stagiaire_email');?>
				<?php echo form_input('stagiaire_email', set_value('stagiaire_email')?set_value('stagiaire_email'):$liste_stagiaire->stagiaire_email, array('class' => "form-control tooltip-input", 'required' => true, 'placeholder' => 'Téléphone ...', 'title' => 'Veuillez saisir l\'email'));?>
				<?php echo form_error('stagiaire_email');?>
			</div>
			
			<div class = "form-group">
				<?php echo form_label('Adresse : <b class = "text-danger">*</b>', 'stagiaire_adresse');?>
				<?php echo form_input('stagiaire_adresse', set_value('stagiaire_adresse')?set_value('stagiaire_adresse'):$liste_stagiaire->stagiaire_adresse, array('class' => "form-control tooltip-input", 'required' => true, 'placeholder' => 'adresse ...', 'title' => 'Veuillez saisir l\adresse'));?>
				<?php echo form_error('stagiaire_adresse');?>
			</div>
			
			
			<div class = "form-group">
				<?php echo form_submit('submit', 'Valider', array('class' => 'btn btn-primary btn-block'));?>
			</div>
			<?php echo form_fieldset_close();?>
		<?php echo form_close();?>
	</div>
	<p class = "text-center"><a href="<?php echo site_url('stagiaire'); ?>" class="btn btn-sm btn-primary"><i class = "glyphicon glyphicon-th-list"></i> stagiaire</a></p>
</div>