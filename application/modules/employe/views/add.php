<div class = "row">
	<div class = "col-md-offset-4 col-md-4 col-md-offset-4">
		<?php echo form_open('', array('class' => 'well'));?>
			<?php echo form_fieldset('Ajouter un  stagiaire');?>
						<div class="row main">
							<div class="col-md-12">
								<div class="main-login main-center">
								<h5>Renseignez les informations de l'employé</h5>
									<?php echo form_open('', array('class' => ''));?>
										
										<div class="form-group">
											<label for="name" class="cols-sm-2 control-label">Nom</label>
											<div class="cols-sm-10">
												<div class="input-group">
													<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
													<input type="text" class="form-control" name="nom" id="nom"  placeholder="Nom de l'employé"/>
												</div>
											</div>
										</div>

										<div class="form-group">
											<label for="email" class="cols-sm-2 control-label">Prénom</label>
											<div class="cols-sm-10">
												<div class="input-group">
													<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
													<input type="text" class="form-control" name="prenom" id="prenom"  placeholder="Prénom de l'employé"/>
												</div>
											</div>
										</div>

										<div class="form-group">
											<label for="username" class="cols-sm-2 control-label">Adresse</label>
											<div class="cols-sm-10">
												<div class="input-group">
													<span class="input-group-addon"><i class="fa fa-home fa" aria-hidden="true"></i></span>
													<input type="text" class="form-control" name="adresse" id="adresse"  placeholder="Adresse de l'employé"/>
												</div>
											</div>
										</div>

										<div class="form-group">
											<label for="password" class="cols-sm-2 control-label">Téléphone</label>
											<div class="cols-sm-10">
												<div class="input-group">
													<span class="input-group-addon"><i class="fa fa-phone fa-lg" aria-hidden="true"></i></span>
													<input type="text" class="form-control" name="telephone" id="telephone"  placeholder="Téléphone de l'employé"/>
												</div>
											</div>
										</div>

										<div class="form-group">
											<label for="confirm" class="cols-sm-2 control-label">Email</label>
											<div class="cols-sm-10">
												<div class="input-group">
													<span class="input-group-addon"><i class="fa fa-envelope fa-lg" aria-hidden="true"></i></span>
													<input type="email" class="form-control" name="email" id="email"  placeholder="Email de l'employé"/>
												</div>
											</div>
										</div>
										
										<div class="form-group">
											<label for="confirm" class="cols-sm-2 control-label">Poste de l'employé</label>
											<div class="cols-sm-10">
												<div class="input-group">
													<span class="input-group-addon"><i class="fa fa-user fa-lg" aria-hidden="true"></i></span>
													<input type="text" class="form-control" name="poste" id="poste"  placeholder="Poste de l'employé"/>
												</div>
											</div>
										</div>

										<div class="form-group ">
											<input type="submit" value="Valider" name="submit" id="button" class="btn btn-primary btn-lg btn-block login-button">
										</div>
										
									
								<?php echo form_close();?>
								</div>
							</div>
						</div><!-- Fin row main -->
					
				</div>