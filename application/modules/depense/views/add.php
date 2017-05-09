						<div class="row main">
							<div class="col-md-12">
								<div class="main-login main-center">
								<h5>Renseignez les informations sur les depenses</h5>
			<form class="" method="post" action="#">
										
					<div class = "form-group">
						<?php echo form_label('Libellé de depense : <b class = "text-danger">*</b>', 'depense_lib');?>
						<?php echo form_input('depense_lib', set_value('depense_lib'), array('class' => "form-control tooltip-input", 'required' => true, 'placeholder' => 'depense_lib ', 'title' => 'Veuillez saisir le libelle du conge'));?>
						<?php echo form_error('depense_lib');?>
					</div>
					<div class = "form-group">
						<?php echo form_label('Date de depense : <b class = "text-danger">*</b>', 'depense_date');?>
						<?php echo form_input('depense_date', set_value('depense_date'), array('class' => "form-control tooltip-input datepicker-tiret-us", 'required' => true, 'placeholder' => 'depense_date ', 'title' => 'Veuillez saisir la date de depense'));?>
						<?php echo form_error('depense_date');?>
					</div>
					
					<div class = "form-group">
						<?php echo form_label('Montant : <b class = "text-danger">*</b>', 'depense_mt');?>
						<?php echo form_input('depense_mt', set_value('depense_mt'), array('class' => "form-control tooltip-input", 'required' => 'depense_mt ', 'title' => 'Veuillez saisir la date de depense'));?>
						<?php echo form_error('depense_mt');?>
					</div>

				<div class="form-group ">
					<?php echo form_submit('submit', 'Valider', array('class' => 'btn btn-primary btn-block'));?>
				</div>
										
			</form>
		</div>
	</div>
</div><!-- Fin row main -->