						<div class="row main">
							<div class="col-md-12">
								<div class="main-login main-center">
								<h5>Renseignez les informations de stagiaire</h5>
			<form class="" method="post" action="#">
										
					<div class = "form-group">
						<?php echo form_label('Nom Stagiaire : <b class = "text-danger">*</b>', 'stagiaire_nom');?>
						<?php echo form_input('stagiaire_nom', set_value('stagiaire_nom'), array('class' => "form-control tooltip-input", 'required' => true, 'placeholder' => 'nom ', 'title' => 'Veuillez saisir le Stagiaire'));?>
						<?php echo form_error('stagiaire_nom');?>
					</div>
					<div class = "form-group">
						<?php echo form_label('prenom Stagiaire : <b class = "text-danger">*</b>', 'stagiaire_prenom');?>
						<?php echo form_input('stagiaire_prenom', set_value('stagiaire_prenom'), array('class' => "form-control tooltip-input", 'required' => true, 'placeholder' => 'prenom ', 'title' => 'Veuillez saisir le prenom Stagiaire'));?>
						<?php echo form_error('stagiaire_prenom');?>
					</div>
					
					<div class = "form-group">
						<?php echo form_label('Téléphone Stagiaire : <b class = "text-danger">*</b>', 'stagiaire_tel');?>
						<?php echo form_input('stagiaire_tel', set_value('stagiaire_tel'), array('class' => "form-control tooltip-input", 'required' => true, 'placeholder' => 'stagiaire_tel ', 'title' => 'Veuillez saisir le telephone Stagiaire'));?>
						<?php echo form_error('stagiaire_tel');?>
					</div>
					
					<div class = "form-group">
						<?php echo form_label('Email Stagiaire : <b class = "text-danger">*</b>', 'stagiaire_email');?>
						<?php echo form_input('stagiaire_email', set_value('stagiaire_email'), array('class' => "form-control tooltip-input", 'required' => true, 'placeholder' => 'email ', 'title' => 'Veuillez saisir l\'email Stagiaire'));?>
						<?php echo form_error('stagiaire_email');?>
					</div>
					
					<div class = "form-group">
						<?php echo form_label('Adresse de Stagiaire : <b class = "text-danger">*</b>', 'stagiaire_adresse');?>
						<?php echo form_input('stagiaire_adresse', set_value('stagiaire_adresse'), array('class' => "form-control tooltip-input", 'required' => true, 'placeholder' => 'adresse ', 'title' => 'Veuillez saisir l\'adresse Stagiaire'));?>
						<?php echo form_error('stagiaire_adresse');?>
					</div>

				<div class="form-group ">
					<?php echo form_submit('submit', 'Valider', array('class' => 'btn btn-primary btn-block'));?>
				</div>
										
			</form>
		</div>
	</div>
</div><!-- Fin row main -->