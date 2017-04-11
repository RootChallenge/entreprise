
<span class = 'page-header'>


	<h3>Liste des Stagiaires de la société rca-soft</h3>
</span>

	<p class = "text-right">
			<a href="<?php echo site_url('stagiaire/add'); ?>" class="btn  btn-sm btn-success"><i class = "glyphicon glyphicon-plus-sign"></i> Ajouter un stagiaire </a>
		
	</p>
	<?php if(!empty($liste_stagiaire)):?>
		<table class="table table-striped table-condensed table-bordered table-responsive" id = 'myDatatable'>
		  <thead>
		  <tr>
				<td>Id</td>
				<td>Nom</td>
				<td>Prénom</td>
				<td>Téléphone</td>
				<td>E-mail</td>
				<td>Adresse</td>
				<td>Action</td>
			</tr>
		</thead>
			<?php foreach($liste_stagiaire as $stagiaire): ?>
			<tr>
				<td><?php echo $stagiaire->stagiaire_id; ?></td>
				<td><?php echo $stagiaire->stagiaire_nom; ?></td>
				<td><?php echo $stagiaire->stagiaire_prenom; ?></td>
				<td><?php echo $stagiaire->stagiaire_tel; ?></td>
				<td><?php echo $stagiaire->stagiaire_email; ?></td>
				<td><?php echo $stagiaire->stagiaire_adresse; ?></td>
				<td>
					
					
						<a href="<?php echo site_url('stagiaire/update/'.$stagiaire->stagiaire_id); ?>" class="btn  btn-sm btn-info"><i class = "glyphicon glyphicon-edit"></i> Modifier</a>
					
					
					
					
						<a href="<?php echo site_url('stagiaire/delete/'.$stagiaire->stagiaire_id); ?>" onClick = "return confirm('Etes-vous sûr de vouloir supprimer cette donnée ?')" class="btn btn-sm btn-danger"><i class = "glyphicon glyphicon-trash"></i> Supprimer</a>
					
					
				</td>
			</tr>
			<?php endforeach; ?>
		</table>
	<?php else:?>
		<p class = "alert alert-info">Aucune donnée disponible pour le moment</p>
	<?php endif;?>
	<p class = "text-right">
		
		
			<a href="<?php echo site_url('stagiaire/add'); ?>" class="btn  btn-sm btn-success"><i class = "glyphicon glyphicon-plus-sign"></i> Ajouter un stagiaire </a>
		
		
	</p>
