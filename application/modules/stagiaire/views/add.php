						<div class="row main">
							<div class="col-md-12">
								<div class="main-login main-center">
								<h5>Renseignez les informations de stagiaire</h5>
									<form class="" method="post" action="#">
										
										<div class="form-group">
											<label for="stagiaire_nom" class="cols-sm-2 control-label">Nom</label>
											<div class="cols-sm-10">
												<div class="input-group">
													<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
													<input type="text" class="form-control" name="stagiaire_nom" id="name"  placeholder="Nom de stagiaire"/>
												</div>
											</div>
										</div>

										<div class="form-group">
											<label for="stagiaire_prenom" class="cols-sm-2 control-label">Prénom</label>
											<div class="cols-sm-10">
												<div class="input-group">
													<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
													<input type="text" class="form-control" name="stagiaire_prenom" id="email"  placeholder="Prénom de stagiaire"/>
												</div>
											</div>
										</div>
										
										<div class="form-group">
											<label for="stagiaire_tel" class="cols-sm-2 control-label">Téléphone</label>
											<div class="cols-sm-10">
												<div class="input-group">
													<span class="input-group-addon"><i class="fa fa-phone fa-lg" aria-hidden="true"></i></span>
													<input type="text" class="form-control" name="stagiaire_tel" id="tel"  placeholder="Téléphone de stagiaire"/>
												</div>
											</div>
										</div>
										
										<div class="form-group">
											<label for="stagiaire_email" class="cols-sm-2 control-label">Email</label>
											<div class="cols-sm-10">
												<div class="input-group">
													<span class="input-group-addon"><i class="fa fa-envelope fa-lg" aria-hidden="true"></i></span>
													<input type="text" class="form-control" name="stagiaire_email" id="email"  placeholder="Email de stagiaire"/>
												</div>
											</div>
										</div>

										<div class="form-group">
											<label for="stagiaire_adresse" class="cols-sm-2 control-label">Adresse</label>
								<div class="cols-sm-10">
												<div class="input-group">
													<span class="input-group-addon"><i class="fa fa-home fa" aria-hidden="true"></i></span>
													<input type="text" class="form-control" name="stagiaire_adresse" id="adresse"  placeholder="Adresse de stagiaire"/>
												</div>
											</div>
										</div>

										<div class="form-group ">
											<?php echo form_submit('submit', 'Valider', array('class' => 'btn btn-primary btn-block'));?>
										</div>
										
									</form>
								</div>
							</div>
						</div><!-- Fin row main -->