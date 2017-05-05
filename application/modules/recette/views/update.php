<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
		
			<center>
				<ol class="breadcrumb">
				  <li><a href="<?php echo base_url(); ?>">Accueil</a></li>
				  <li><a href="<?php echo site_url('paiement/'); ?>">Gestion des Recettes</a></li>
				  <li class="active">Ajouter une recette</li>
				</ol>
			</center><br>
			
			<div class="row">
			
				<div class="col-md-3">
					<ul class="nav nav-pills nav-stacked">
						<li class="active"><a href="#"><i class="fa fa-home fa-fw"></i>Home</a></li>
						<li><a href="<?php echo site_url('paiement/add'); ?>"><i class="fa fa-pencil-square-o fa-fw"></i>Ajouter une recette</a></li>
						<li><a href="http://www.jquery2dotnet.com"><i class="fa fa-file-o fa-fw"></i>Pages</a></li>
						<li><a href="http://www.jquery2dotnet.com"><i class="fa fa-bar-chart-o fa-fw"></i>Charts</a></li>
						<li><a href="http://www.jquery2dotnet.com"><i class="fa fa-table fa-fw"></i>Table</a></li>
						<li><a href="http://www.jquery2dotnet.com"><i class="fa fa-tasks fa-fw"></i>Forms</a></li>
						<li><a href="http://www.jquery2dotnet.com"><i class="fa fa-calendar fa-fw"></i>Calender</a></li>
						<li><a href="http://www.jquery2dotnet.com"><i class="fa fa-book fa-fw"></i>Library</a></li>
						<li><a href="http://www.jquery2dotnet.com"><i class="fa fa-pencil fa-fw"></i>Applications</a></li>
						<li><a href="http://www.jquery2dotnet.com"><i class="fa fa-cogs fa-fw"></i>Settings</a></li>
					</ul>
				</div>
				
				<div class="col-md-9">
					
						<center><h3> Ajouter une recette </h3></center>
						<hr>
						<br>
					
					
					
					
						<div class="row main">
							<div class="col-md-12">
								<div class="main-login main-center">
								<h5>Renseignez les informations du paiement</h5>
									<form class="" method="post" action="#">
										
										<div class="form-group">
											<label for="name" class="cols-sm-2 control-label">Montant de la recette</label>
											<div class="cols-sm-10">
												<div class="input-group">
													<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
													<input type="text" class="form-control" name="montant" value="<?php echo $liste_recette->montant;?>" id="paiement_nom"  placeholder="Montant du paiement"/>
												</div>
											</div>
										</div>

										<div class="form-group">
											<label for="email" class="cols-sm-2 control-label">Motif de la recette</label>
											<div class="cols-sm-10">
												<div class="input-group">
													<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
													<input type="text" class="form-control" name="description" value="<?php echo $liste_recette->description;?>" id="paiement_prix"  placeholder="Motif du paiement"/>
												</div>
											</div>
										</div>
										

										

										<div class="form-group ">
											<?php echo form_submit('submit', 'Valider', array('class' => 'btn btn-default btn-lg btn-block login-button'));?>
											</div>
										
									</form>
								</div>
							</div>
						</div><!-- Fin row main -->
					
				</div>
				
			</div>
			
		</div>
	</div>
</div>