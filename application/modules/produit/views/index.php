<span class = 'page-header'>
	<h3>Liste des Produits</h3>
</span>

	<p class = "text-center"><a href="<?php echo site_url('produit/add'); ?>" class="btn  btn-sm btn-success"><i class = "glyphicon glyphicon-plus-sign"></i> Ajouter un produit</a></p>
	<?php if(!empty($liste_produit)):?>
		<table class="table table-striped table-condensed table-bordered table-responsive" id = 'myDatatable'>
		  <thead>  
		  <tr>
				<td>ID</td>
				<td>Nom du produit</td>
				<td>Prix du Produit</td>
				<td>Date de conception</td>
				<td>Catégorie</td>
				<td>Action</td>
			</tr>
		</thead>
		
			<?php foreach($liste_produit as $l): ?>
			
			<tr>
				<td><?php echo $l->produit_id; ?></td>
				<td><?php echo $l->produit_nom; ?></td>
				<td><?php echo $l->produit_prix; ?></td>
				<td><?php echo $l->create_at; ?></td>
				<td><?php echo isset($l->categorie_produit)?$l->categorie_produit_nom:''; ?></td>
				<td>
					<a href="<?php echo site_url('produit/update/'.$l->produit_id); ?>" class="btn  btn-sm btn-info"><i class = "glyphicon glyphicon-edit"></i> Modifier</a>
					<a href="<?php echo site_url('produit/remove/'.$l->produit_id); ?>" onClick = "return confirm('Etes-vous sûr de vouloir supprimer cette donnée ?')" class="btn btn-sm btn-danger"><i class = "glyphicon glyphicon-trash"></i> Supprimer</a>
				</td>
			</tr>
			<?php endforeach; ?>
		</table>
	<?php else:?>
		<p class = "alert alert-info">Aucune donnée disponible pour le moment</p>
	<?php endif;?>
	