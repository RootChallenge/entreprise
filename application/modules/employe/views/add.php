<div class = "row">
	<div class = "col-md-offset-4 col-md-4 col-md-offset-4">
		<?php echo form_open('', array('class' => 'well'));?>
			<?php echo form_fieldset('Ajouter un  stagiaire');?>
						<div class="row main">
							<div class="col-md-12">
								<div class="main-login main-center">
								<h5>Renseignez les informations de l'employé</h5>
									<form class="" method="post" action="#">
										
										<div class="form-group">
											<label for="name" class="cols-sm-2 control-label">Nom</label>
											<div class="cols-sm-10">
												<div class="input-group">
													<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
													<input type="text" class="form-control" name="name" id="name"  placeholder="Nom de l'employé"/>
												</div>
											</div>
										</div>

										<div class="form-group">
											<label for="email" class="cols-sm-2 control-label">Prénom</label>
											<div class="cols-sm-10">
												<div class="input-group">
													<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
													<input type="text" class="form-control" name="email" id="email"  placeholder="Prénom de l'employé"/>
												</div>
											</div>
										</div>

										<div class="form-group">
											<label for="username" class="cols-sm-2 control-label">Adresse</label>
											<div class="cols-sm-10">
												<div class="input-group">
													<span class="input-group-addon"><i class="fa fa-home fa" aria-hidden="true"></i></span>
													<input type="text" class="form-control" name="username" id="username"  placeholder="Adresse de l'employé"/>
												</div>
											</div>
										</div>

										<div class="form-group">
											<label for="password" class="cols-sm-2 control-label">Téléphone</label>
											<div class="cols-sm-10">
												<div class="input-group">
													<span class="input-group-addon"><i class="fa fa-phone fa-lg" aria-hidden="true"></i></span>
													<input type="password" class="form-control" name="password" id="password"  placeholder="Téléphone de l'employé"/>
												</div>
											</div>
										</div>

										<div class="form-group">
											<label for="confirm" class="cols-sm-2 control-label">Email</label>
											<div class="cols-sm-10">
												<div class="input-group">
													<span class="input-group-addon"><i class="fa fa-envelope fa-lg" aria-hidden="true"></i></span>
													<input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Email de l'employé"/>
												</div>
											</div>
										</div>
										
										<div class="form-group">
											<label for="confirm" class="cols-sm-2 control-label">Poste de l'employé</label>
											<div class="cols-sm-10">
												<div class="input-group">
													<span class="input-group-addon"><i class="fa fa-user fa-lg" aria-hidden="true"></i></span>
													<input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Poste de l'employé"/>
												</div>
											</div>
										</div>

										<div class="form-group ">
											<a href="http://deepak646.blogspot.in" target="_blank" type="button" id="button" class="btn btn-primary btn-lg btn-block login-button">Valider</a>
										</div>
										
									</form>
								</div>
							</div>
						</div><!-- Fin row main -->
					
				</div>