						<div class="row main">
							<div class="col-md-12">
								<div class="main-login main-center">
								<h5>Renseignez les informations sur les conges</h5>
			<form class="" method="post" action="#">
										
					<div class = "form-group">
						<?php echo form_label('Libellé de congé : <b class = "text-danger">*</b>', 'conge_lib');?>
						<?php echo form_input('conge_lib', set_value('conge_lib'), array('class' => "form-control tooltip-input", 'required' => true, 'placeholder' => 'conge_lib ', 'title' => 'Veuillez saisir le libelle du conge'));?>
						<?php echo form_error('conge_lib');?>
					</div>
					<div class = "form-group">
						<?php echo form_label('Date de debut : <b class = "text-danger">*</b>', 'date_debut');?>
						<?php echo form_input('date_debut', set_value('date_debut'), array('class' => "form-control tooltip-input datepicker-tiret-us", 'required' => true, 'placeholder' => 'date_debut ', 'title' => 'Veuillez saisir la date du conge'));?>
						<?php echo form_error('date_debut');?>
					</div>
					
					<div class = "form-group">
						<?php echo form_label('Date de Fin : <b class = "text-danger">*</b>', 'date_fin');?>
						<?php echo form_input('date_fin', set_value('date_fin'), array('class' => "form-control tooltip-input datepicker-tiret-us", 'required' => 'date_fin ', 'title' => 'Veuillez saisir la date de fin du conge'));?>
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

				<div class="form-group ">
					<?php echo form_submit('submit', 'Valider', array('class' => 'btn btn-primary btn-block'));?>
				</div>
										
			</form>
		</div>
	</div>
</div><!-- Fin row main -->