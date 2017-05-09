<div class = "row">
	<div class = "col-md-offset-4 col-md-4 col-md-offset-4">
		<?php echo form_open('', array('class' => 'well'));?>
			<?php echo form_fieldset('Modifier une depense');?>
			
			<div class = "form-group">
				<?php echo form_label('libellé de depense : <b class = "text-danger">*</b>', 'depense_lib');?>
				<?php echo form_input('depense_lib', set_value('depense_lib')?set_value('depense_lib'):$liste_depense->depense_lib, array('class' => "form-control tooltip-input", 'required' => true, 'placeholder' => 'libellé de depense ...', 'title' => 'Veuillez saisir une depense '));?>
				<?php echo form_error('depense_lib');?>
			</div>
			<div class = "form-group">
				<?php echo form_label('date de depense : <b class = "text-danger">*</b>', 'depense_date');?>
				<?php echo form_input('depense_date', set_value('depense_date')?set_value('depense_date'):$liste_depense->depense_date, array('class' => "form-control tooltip-input datepicker-tiret-us", 'required' => true, 'placeholder' => 'Date depense ...', 'title' => 'Veuillez saisir la date de depense '));?>
				<?php echo form_error('depense_date');?>
			</div>
			
			
			<div class = "form-group">
				<?php echo form_label('Montant : <b class = "text-danger">*</b>', 'depense_mt');?>
				<?php echo form_input('depense_mt', set_value('depense_mt')?set_value('depense_mt'):$liste_depense->depense_mt, array('class' => "form-control tooltip-input", 'required' => true, 'placeholder' => 'libellé de montant ...', 'title' => 'Veuillez saisir une depense '));?>
				<?php echo form_error('depense_mt');?>
			</div>
			
			<div class = "form-group">
				<?php echo form_submit('submit', 'Valider', array('class' => 'btn btn-primary btn-block'));?>
			</div>
			<?php echo form_fieldset_close();?>
		<?php echo form_close();?>
	</div>
	<p class = "text-center"><a href="<?php echo site_url('depense'); ?>" class="btn btn-sm btn-primary"><i class = "glyphicon glyphicon-th-list"></i> depense</a></p>
</div>