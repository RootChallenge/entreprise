
<span class = 'page-header'>


	<h3>Liste des des depenses effectuer par RCA-SOFT</h3>
</span>

	<p class = "text-right">
			<a href="<?php echo site_url('depense/add'); ?>" class="btn  btn-sm btn-success"><i class = "glyphicon glyphicon-plus-sign"></i> Ajouter une depense </a>
		
	</p>
	<?php if(!empty($liste_depense)):?>
		<table class="table table-striped table-condensed table-bordered table-responsive" id = 'myDatatable'>
		  <thead>
		  <tr>
				<td>Id</td>
				<td>libelle</td>
				<td>Date de depense</td>
				<td>Montant</td>
				<td>action</td>
			</tr>
		</thead>
			<?php foreach($liste_depense as $depense): ?>
			<tr>
				<td><?php echo $depense->depense_id; ?></td>
				<td><?php echo $depense->depense_lib; ?></td>
				<td><?php echo date('d/m/Y',  strtotime($depense->depense_date));?></td>
				<td><?php echo $depense->depense_mt; ?></td>
				
			<td>
					
					
						<a href="<?php echo site_url('depense/update/'.$depense->depense_id); ?>" class="btn  btn-sm btn-info"><i class = "glyphicon glyphicon-edit"></i> Modifier</a>
					
					
					
					
						<a href="<?php echo site_url('depense/delete/'.$depense->depense_id); ?>" onClick = "return confirm('Etes-vous sûr de vouloir supprimer cette donnée ?')" class="btn btn-sm btn-danger"><i class = "glyphicon glyphicon-trash"></i> Supprimer</a>
					
					
				</td>
			</tr>
			<?php endforeach; ?>
		</table>
	<?php else:?>
		<p class = "alert alert-info">Aucune donnée disponible pour le moment</p>
	<?php endif;?>
	<p class = "text-right">
		
		
			<a href="<?php echo site_url('depense/add'); ?>" class="btn  btn-sm btn-success"><i class = "glyphicon glyphicon-plus-sign"></i> Ajouter une depense </a>
		
		
	</p>
