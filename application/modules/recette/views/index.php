<span class = 'page-header'>
	<h3>Liste des recettes</h3>
</span>

	<p class = "text-center"><a href="<?php echo site_url('recette/add'); ?>" class="btn  btn-sm btn-success"><i class = "glyphicon glyphicon-plus-sign"></i> Ajouter une recette</a></p>
	<?php if(!empty($liste_recette)):?>
		<table class="table table-striped table-condensed table-bordered table-responsive" id = 'myDatatable'>
		  <thead>  
		  <tr>
				<td>ID</td>
				<td>Montant de la recette</td>
				<td>Motif de la recette</td>
				<td>Date d'enregistrement</td>
				<td>Action</td>
			</tr>
		</thead>
		
			<?php foreach($liste_recette as $l): ?>
			
			<tr>
				<td><?php echo $l->recette_id; ?></td>
				<td><?php echo $l->montant; ?></td>
				<td><?php echo $l->description; ?></td>
				<td><?php echo $l->create_at; ?></td>
				<td>
					<a href="<?php echo site_url('recette/update/'.$l->recette_id); ?>" class="btn  btn-sm btn-info"><i class = "glyphicon glyphicon-edit"></i> Modifier</a>
					<a href="<?php echo site_url('recette/remove/'.$l->recette_id); ?>" onClick = "return confirm('Etes-vous sûr de vouloir supprimer cette donnée ?')" class="btn btn-sm btn-danger"><i class = "glyphicon glyphicon-trash"></i> Supprimer</a>
				</td>
			</tr>
			<?php endforeach; ?>
		</table>
	<?php else:?>
		<p class = "alert alert-info">Aucune donnée disponible pour le moment</p>
	<?php endif;?>
	