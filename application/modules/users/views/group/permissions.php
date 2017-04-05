<div class = "row">
<?php if(!empty($group)):?>
	<div class = "col-md-offset-3 col-md-6 col-md-offset-3">
		<div class = "panel">
			<div class = "panel-body">
				<h3>Les permissions du groupe <b><?php echo $group->group_name;?></b></h3>
				<ul class="list-group">
					<?php 
						$permissions = get_all_permissions();
					?>
					<?php foreach($permissions as $key => $value):?>
					<?php if($group->{$key} == 1):?>
					<li class="list-group-item">
						<?php echo $value;?>
					</li>
					<?php endif;?>
				<?php endforeach;?>
				</ul>
				<p class = "text-right">
					<?php if($group->is_system == 0):?>
						<a href="<?php echo site_url('users/update_group/'. $group->group_id); ?>" class="btn  btn-sm btn-success"><i class = "glyphicon glyphicon-edit"></i> Modifier</a> 
					<?php endif;?>	
						<a href="<?php echo site_url('users/group'); ?>" class="btn  btn-sm btn-primary"><i class = "glyphicon glyphicon-th-list"></i> Retour sur la liste des groupes</a>
				</p>
			</div>
		</div>
	</div>
<?php else:?>
	<p class = "alert alert-info">Aucune configuration trouvée veuillez dabord ajouter une année académique</p>
<?php endif;?>
</div>