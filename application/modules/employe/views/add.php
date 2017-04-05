<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
		
			<center>
				<ol class="breadcrumb">
				  <li><a href="<?php echo base_url(); ?>">Accueil</a></li>
				  <li><a href="<?php echo site_url('employe/'); ?>">Gestion des employés</a></li>
				  <li class="active">Ajouter un employé</li>
				</ol>
			</center><br>
			
			<div class="row">
			
				<div class="col-md-3">
					<ul class="nav nav-pills nav-stacked">
						<li class="active"><a href="#"><i class="fa fa-home fa-fw"></i>Home</a></li>
						<li><a href="<?php echo site_url('employe/add'); ?>"><i class="fa fa-pencil-square-o fa-fw"></i>Ajouter un employé</a></li>
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
					
						<center><h3> Ajouter un employé </h3></center>
						<hr>
						<br>
					
					
					
					
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
				
			</div>
			
		</div>
	</div>
</div>