<div class = "row">
	<div class = "col-md-offset-4 col-md-4 col-md-offset-4">
		<?php echo form_open('', array('class' => 'well'));?>
			<?php echo form_fieldset('Modification d\'un groupe');?>
			
			<div class = "form-group">
				<?php echo form_label('Nom du groupe : <b class = "text-danger">*</b>', 'group_name');?>
				<input  value = "<?php echo set_value('group_name')?set_value('group_name'):$group->group_name;?>" type="text" name = "group_name" class="form-control tooltip-input" placeholder="Nom du groupe ..." required title = "Entrez le nom du groupe." />
				<?php echo form_error('group_name');?>
			</div>
			
			<?php echo form_label('Permission du groupe : <b class = "text-danger">*</b>', 'group_permissions');?>
			<ul class="list-group">
				<?php 
					$permissions = get_all_permissions();
				?>
				<?php foreach($permissions as $key => $value):?>
				<li class="list-group-item">
					<?php echo $value;?> :
					<div class="btn-switch pull-right">
						<input id = "<?php echo $key;?>" name = "group_permissions[]" type="checkbox" <?php echo $group->{$key} == 1?'checked':'';?> value = "<?php echo $key;?>" class = "tooltip-input" title = 'Activer pour choisir cette permission' />
						<label for = "<?php echo $key;?>" class="label-success"></label>
					</div>
				</li>
				<?php endforeach;?>
			</ul>
			<div class = "form-group">
				<?php echo form_submit('submit', 'Valider', array('class' => 'btn btn-primary'));?>
			</div>
			<?php echo form_fieldset_close();?>
		<?php echo form_close();?>
	</div>
	<p class = "text-center"><a href="<?php echo site_url('users/group'); ?>" class="btn btn-sm btn-primary"><i class = "glyphicon glyphicon-th-list"></i> Liste des groupes</a></p>
</div>