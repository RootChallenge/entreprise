<span class = 'page-header'>
	<h3>Liste des Paiements</h3>
</span>

	<p class = "text-center"><a href="<?php echo site_url('paiement/add'); ?>" class="btn  btn-sm btn-success"><i class = "glyphicon glyphicon-plus-sign"></i> Ajouter un paiement</a></p>
	<?php if(!empty($liste_paiement)):?>
		<table class="table table-striped table-condensed table-bordered table-responsive" id = 'myDatatable'>
		  <thead>  
		  <tr>
				<td>ID</td>
				<td>Montant du paiement</td>
				<td>Motif du paiement</td>
				<td>Date de paiement</td>
				<td>Prime</td>
				<td>Employé</td>
				<td>Action</td>
			</tr>
		</thead>
		
			<?php foreach($liste_paiement as $l): ?>
			
			<tr>
				<td><?php echo $l->paiement_id; ?></td>
				<td><?php echo $l->paiement_montant; ?></td>
				<td><?php echo $l->paiement_motif; ?></td>
				<td><?php echo $l->paiement_date; ?></td>
				<td><?php echo $l->paiement_prime; ?></td>
				<td><?php echo isset($l->employe)?$l->employe_nom:''; ?></td>
				<td>
					<a href="<?php echo site_url('paiement/update/'.$l->paiement_id); ?>" class="btn  btn-sm btn-info"><i class = "glyphicon glyphicon-edit"></i> Modifier</a>
					<a href="<?php echo site_url('paiement/remove/'.$l->paiement_id); ?>" onClick = "return confirm('Etes-vous sûr de vouloir supprimer cette donnée ?')" class="btn btn-sm btn-danger"><i class = "glyphicon glyphicon-trash"></i> Supprimer</a>
				</td>
			</tr>
			<?php endforeach; ?>
		</table>
	<?php else:?>
		<p class = "alert alert-info">Aucune donnée disponible pour le moment</p>
	<?php endif;?>
	