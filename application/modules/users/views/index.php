<span class = 'page-header'>
	<h3>Liste des utilisateurs</h3>
</span>

	<p class = "text-right">
		<?php if(is_allowed('group')):?>
			<a href="<?php echo site_url('users/group'); ?>" class="btn  btn-sm btn-primary"><i class = "glyphicon glyphicon-th-list"></i> Groupes utilisateurs</a>
		<?php endif;?>	
		<a href="<?php echo site_url('users/add'); ?>" class="btn  btn-sm btn-success"><i class = "glyphicon glyphicon-plus-sign"></i> Ajouter un utilisateur</a>
	</p>
	<?php if(!empty($liste_users)):?>
		<table class="table table-striped table-condensed table-bordered table-responsive" id = 'myDatatable'>
		  <thead>  
		  <tr>
				<td>Id</td>
				<td>Nom d'utilisateur</td>
				<td>Nom</td>
				<td>Prénom</td>
				<td>E-mail</td>
				<td>Action</td>
			</tr>
		</thead>
			<?php foreach($liste_users as $l): ?>
			<tr>
				<td><?php echo $l->users_id; ?></td>
				<td><?php echo $l->users_username; ?></td>
				<td><?php echo $l->users_nom; ?></td>
				<td><?php echo $l->users_prenom; ?></td>
				<td><?php echo $l->users_email; ?></td>
				<td>
					<a href="<?php echo site_url('users/update/'.$l->users_id); ?>" class="btn  btn-sm btn-info"><i class = "glyphicon glyphicon-edit"></i> Modifier</a>
					<a href="<?php echo site_url('users/delete/'.$l->users_id); ?>" onClick = "return confirm('Etes-vous sûr de vouloir supprimer cette donnée ?')" class="btn btn-sm btn-danger"><i class = "glyphicon glyphicon-trash"></i> Supprimer</a>
				</td>
			</tr>
			<?php endforeach; ?>
		</table>
	<?php else:?>
		<p class = "alert alert-info">Aucune donnée disponible pour le moment</p>
	<?php endif;?>
	<p class = "text-right">
		<?php if(is_allowed('group')):?>
			<a href="<?php echo site_url('users/group'); ?>" class="btn  btn-sm btn-primary"><i class = "glyphicon glyphicon-th-list"></i> Groupes utilisateurs</a>
		<?php endif;?>	
		<a href="<?php echo site_url('users/add'); ?>" class="btn  btn-sm btn-success"><i class = "glyphicon glyphicon-plus-sign"></i> Ajouter un utilisateur</a>
	</p>