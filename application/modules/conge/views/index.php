
<span class = 'page-header'>


	<h3>Liste des des personels en conge</h3>
</span>

	<p class = "text-right">
			<a href="<?php echo site_url('conge/add'); ?>" class="btn  btn-sm btn-success"><i class = "glyphicon glyphicon-plus-sign"></i> Ajouter un conge </a>
		
	</p>
	<?php if(!empty($liste_conge)):?>
		<table class="table table-striped table-condensed table-bordered table-responsive" id = 'myDatatable'>
		  <thead>
		  <tr>
				<td>Id</td>
				<td>libelle</td>
				<td>Date debut</td>
				<td>Date fin</td>
				<td>Employé</td>
				<td>action</td>
			</tr>
		</thead>
			<?php foreach($liste_conge as $conge): ?>
			<tr>
				<td><?php echo $conge->conge_id; ?></td>
				<td><?php echo $conge->conge_lib; ?></td>
				<td><?php echo date('d/m/Y',  strtotime($conge->date_debut));?></td>
				<td><?php echo date('d/m/Y',  strtotime($conge->date_fin));?></td>
				<td><?php echo isset($conge->employe)?$conge->employe->employe_nom.' '.$conge->employe->employe_prenom:''; ?></td>
			<td>
					
					
						<a href="<?php echo site_url('conge/update/'.$conge->conge_id); ?>" class="btn  btn-sm btn-info"><i class = "glyphicon glyphicon-edit"></i> Modifier</a>
					
					
					
					
						<a href="<?php echo site_url('conge/delete/'.$conge->conge_id); ?>" onClick = "return confirm('Etes-vous sûr de vouloir supprimer cette donnée ?')" class="btn btn-sm btn-danger"><i class = "glyphicon glyphicon-trash"></i> Supprimer</a>
					
					
				</td>
			</tr>
			<?php endforeach; ?>
		</table>
	<?php else:?>
		<p class = "alert alert-info">Aucune donnée disponible pour le moment</p>
	<?php endif;?>
	<p class = "text-right">
		
		
			<a href="<?php echo site_url('conge/add'); ?>" class="btn  btn-sm btn-success"><i class = "glyphicon glyphicon-plus-sign"></i> Ajouter un conge </a>
		
		
	</p>
