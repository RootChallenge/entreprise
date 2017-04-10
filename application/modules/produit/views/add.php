<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
		
			<center>
				<ol class="breadcrumb">
				  <li><a href="<?php echo base_url(); ?>">Accueil</a></li>
				  <li><a href="<?php echo site_url('produit/'); ?>">Gestion des produits</a></li>
				  <li class="active">Ajouter un produit</li>
				</ol>
			</center><br>
			
			<div class="row">
			
				<div class="col-md-3">
					<ul class="nav nav-pills nav-stacked">
						<li class="active"><a href="#"><i class="fa fa-home fa-fw"></i>Home</a></li>
						<li><a href="<?php echo site_url('produit/add'); ?>"><i class="fa fa-pencil-square-o fa-fw"></i>Ajouter un produit</a></li>
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
					
						<center><h3> Ajouter un produit </h3></center>
						<hr>
						<br>
					
					
					
					
						<div class="row main">
							<div class="col-md-12">
								<div class="main-login main-center">
								<h5>Renseignez les informations du produit</h5>
									<form class="" method="post" action="#">
										
										<div class="form-group">
											<label for="name" class="cols-sm-2 control-label">Nom du produit</label>
											<div class="cols-sm-10">
												<div class="input-group">
													<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
													<input type="text" class="form-control" name="produit_nom" id="produit_nom"  placeholder="Nom du produit"/>
												</div>
											</div>
										</div>

										<div class="form-group">
											<label for="email" class="cols-sm-2 control-label">Prix du produit</label>
											<div class="cols-sm-10">
												<div class="input-group">
													<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
													<input type="text" class="form-control" name="produit_prix" id="produit_prix"  placeholder="Prix du produit"/>
												</div>
											</div>
										</div>

										<div class="form-group">
											<label for="username" class="cols-sm-2 control-label">Catégorie</label>
											<div class="cols-sm-10">												
												<select name="categorie_produit_id" class="form-control">
													<?php
														foreach($liste_categorie as $d)
														{
															echo '<option value="'.$d->categorie_produit_id.'">'.$d->categorie_produit_nom.'</option>';
														} 
													?>
												</select>
												<?php echo form_error('categorie_produit_id');?>
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