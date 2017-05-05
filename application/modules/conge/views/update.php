<div class = "row">
	<div class = "col-md-offset-4 col-md-4 col-md-offset-4">
		<?php echo form_open('', array('class' => 'well'));?>
			<?php echo form_fieldset('Modifier un stagiaire');?>
			
			<div class = "form-group">
				<?php echo form_label('libellé du conge : <b class = "text-danger">*</b>', 'conge_lib');?>
				<?php echo form_input('conge_lib', set_value('conge_lib')?set_value('conge_lib'):$liste_conge->conge_lib, array('class' => "form-control tooltip-input", 'required' => true, 'placeholder' => 'libellé du conge ...', 'title' => 'Veuillez saisir un conge '));?>
				<?php echo form_error('conge_lib');?>
			</div>
			<div class = "form-group">
				<?php echo form_label('date de debut : <b class = "text-danger">*</b>', 'date_debut');?>
				<?php echo form_input('date_debut', set_value('date_debut')?set_value('date_debut'):$liste_conge->date_debut, array('class' => "form-control tooltip-input datepicker-tiret-us", 'required' => true, 'placeholder' => 'Date debut ...', 'title' => 'Veuillez saisir la date de debut '));?>
				<?php echo form_error('date_debut');?>
			</div>
			
			
			<div class = "form-group">
				<?php echo form_label('Date de fin : <b class = "text-danger">*</b>', 'date_fin');?>
				<?php echo form_input('date_fin', set_value('date_fin')?set_value('date_fin'):$liste_conge->date_fin, array('class' => "form-control tooltip-input datepicker-tiret-us", 'required' => true, 'placeholder' => 'Date fin du conge ...', 'title' => 'Veuillez saisir la date de fin conge'));?>
				<?php echo form_error('date_fin');?>
			</div>
			
			<div class = "form-group">
				<?php echo form_label('Choisir un Employé : <b class = "text text-danger">*</b>', 'employe_id');?>
				<select name = "employe_id" class = "input-sm form-control tooltip-input" required>
					<?php foreach($liste_employé as $employe):?>
						<option value = "<?php echo $employe->employe_id;?>"><?php echo $employe->employe_nom;?></option>
					<?php endforeach;?>
				</select>
				<?php echo form_error('employe_id');?>
			</div>
			
			<div class = "form-group">
				<?php echo form_submit('submit', 'Valider', array('class' => 'btn btn-primary btn-block'));?>
			</div>
			<?php echo form_fieldset_close();?>
		<?php echo form_close();?>
	</div>
	<p class = "text-center"><a href="<?php echo site_url('conge'); ?>" class="btn btn-sm btn-primary"><i class = "glyphicon glyphicon-th-list"></i> conge</a></p>
</div>