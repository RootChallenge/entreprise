<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">

			<center>
				<ol class="breadcrumb">
				  <li><a href="<?php echo base_url(); ?>">Accueil</a></li>
				  <li class="active">Gestion des employés : index</li>
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
					<center><h3> Liste des employés </h3></center>
					<hr>
					<br>


					<?php if(!empty($liste_employé)):?>
						<table class="table table-striped table-condensed table-bordered table-responsive" id = 'myDatatable'>
						  <thead>
						  <tr>
								<td>Nom</td>
								<td>Prénom</td>
								<td>Adresse</td>
								<td>Telephone</td>
								<td>Poste</td>
								<td>Action</td>
							</tr>
						</thead>
							<?php foreach($liste_employé as $l): ?>
							<tr>
								<td><?php echo $l->employe_nom; ?></td>
								<td><?php echo $l->employe_prenom; ?></td>
								<td><?php echo $l->employe_adresse; ?></td>
								<td><?php echo $l->employe_tel; ?></td>
								<td><?php echo $l->employe_poste; ?></td>
								<td>

										<a href="<?php echo site_url('employe/update/'.$l->employe_id); ?>" class="btn  btn-sm btn-info"><i class = "glyphicon glyphicon-edit"></i> Modifier</a>

										<a href="<?php echo site_url('employe/remove/'.$l->employe_id); ?>" onClick = "return confirm('Etes-vous sûr de vouloir supprimer cette donnée ?')" class="btn btn-sm btn-danger"><i class = "glyphicon glyphicon-trash"></i> Supprimer</a>

										<a href="#" class="btn  btn-sm btn-success"><i class = "glyphicon glyphicon-edit"></i> Détails</a>
								</td>
							</tr>
							<?php endforeach; ?>
						</table>
					<?php else:?>
						<p class = "alert alert-info">Aucune donnée disponible pour le moment</p>
					<?php endif;?>


				</div>

			</div>

		</div>
	</div>
</div>
