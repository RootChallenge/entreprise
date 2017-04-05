<div class = "row  well">
	<div class = "col-md-12">
<?php echo form_open('', array('class' => ''));?>
		<?php echo form_fieldset('<h3>Vos informations</h3>');?>
			<p>
				Nom: <b class = "big_text"><?php echo $users->users_nom;?> </b> &nbsp;&nbsp;
				Prénom : <b class = "big_text"><?php echo $users->users_prenom;?> </b> &nbsp;&nbsp;
				Adresse E-mail : <b class = "big_text"><?php echo $users->users_email;?></b>  &nbsp;&nbsp; <br />
				Ville: <b class = "big_text"> <?php echo isset($users->adresse)?$users->adresse->adresse_ville:''; ?></b> &nbsp;&nbsp;
				Rue : <b class = "big_text"><?php echo isset($users->adresse)?$users->adresse->adresse_rue:''; ?> </b> &nbsp;&nbsp;
				Code Postale : <b class = "big_text"><?php echo isset($users->adresse)?$users->adresse->adresse_code_postal:''; ?></b>  &nbsp;&nbsp; <br />
				Téléphone : <b class = "big_text"><?php echo isset($users->adresse)?$users->adresse->adresse_tel:''; ?></b>  &nbsp;&nbsp; <br />

			</p>
		<?php echo form_fieldset_close();?>
		<br />
		<p>
			<?php if(is_allowed('view_users')):?>
				<a href = "<?php echo site_url('users/');?>" class = "btn btn-default btn-sm">Liste des userss</a>
			<?php endif;?>
			<?php if(is_allowed('users_carte')):?>
				<a href = "<?php echo site_url('users/add_carte/'.$users->users_code);?>" class = "btn btn-success btn-sm">Ajouter une nouvelle carte</a>
			<?php endif;?>
		</p>
		<?php echo form_fieldset('<h3>Information sur les cartes d\'abonnement</h3>');?>
			<table class="table table-striped table-condensed table-bordered table-responsive" style = "width:50%">
			  <thead>
			  <tr>
					<th>Cartes</th>
					<th>Action</th>
				</tr>
			</thead>
			<?php foreach($liste_carte as $l):?>
			<tr>
				<td><?php echo $l->carte_num;?></td>
				<td>
					<?php if(is_allowed('users_carte')):?>
						<a href="<?php echo site_url('users/update_carte/'.$l->carte_code); ?>" class="btn  btn-sm btn-info"><i class = "glyphicon glyphicon-edit"></i> Modifier</a>
						<a href="<?php echo site_url('users/delete_carte/'.$l->carte_code); ?>" onClick = "return confirm('Etes-vous sûr de vouloir supprimer cette donnée ?')" class="btn btn-sm btn-danger"><i class = "glyphicon glyphicon-trash"></i> Supprimer</a>
					<?php endif;?>
				</td>
			</tr>
			<?php endforeach;?>
			</table>
			<p>
				<?php if(is_allowed('users_carte')):?>
					<a href = "<?php echo site_url('users/add_carte/'.$users->users_code);?>" class = "btn btn-success btn-sm">Ajouter une nouvelle carte</a>
				<?php endif;?>
			</p>
			<?php echo form_fieldset_close();?>
    </div>

</div>
