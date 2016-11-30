
<div class="row">
    <div class="col-xs-12">
		
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php  echo __('Specialty'); ?></h3>
				<div class="box-tools pull-right">
	                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i> Edit'), array('action' => 'edit', $specialty['Specialty']['id']), array('class' => 'btn btn-primary', 'escape' => false)); ?>
	            </div>
			</div>
			
			<div class="box-body table-responsive">
                <table id="Specialties" class="table table-bordered table-striped">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($specialty['Specialty']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Specialty'); ?></strong></td>
		<td>
			<?php echo h($specialty['Specialty']['specialty']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Rol'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($specialty['Rol']['rol'], array('controller' => 'rols', 'action' => 'view', $specialty['Rol']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
		<td>
			<?php echo h($specialty['Specialty']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modified'); ?></strong></td>
		<td>
			<?php echo h($specialty['Specialty']['modified']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

					
			<div class="box box-primary">
				<div class="box-header">
					<h3 class="box-title"><?php echo __('Related People'); ?></h3>
					<div class="box-tools pull-right">
						<?php echo $this->Html->link('<i class="glyphicon glyphicon-plus"></i> '.__('New Person'), array('controller' => 'people', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>					</div><!-- /.actions -->
				</div>
				<?php if (!empty($specialty['Person'])): ?>
					
					<div class="box-body table-responsive">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
											<th class="text-center"><?php echo __('Id'); ?></th>
		<th class="text-center"><?php echo __('Name'); ?></th>
		<th class="text-center"><?php echo __('Last Name'); ?></th>
		<th class="text-center"><?php echo __('Dni'); ?></th>
		<th class="text-center"><?php echo __('Gender'); ?></th>
		<th class="text-center"><?php echo __('Address'); ?></th>
		<th class="text-center"><?php echo __('Phone'); ?></th>
		<th class="text-center"><?php echo __('Email'); ?></th>
		<th class="text-center"><?php echo __('Nationality Id'); ?></th>
		<th class="text-center"><?php echo __('Rol Id'); ?></th>
		<th class="text-center"><?php echo __('Specialty Id'); ?></th>
		<th class="text-center"><?php echo __('Pass App'); ?></th>
		<th class="text-center"><?php echo __('Token'); ?></th>
									<th class="text-center"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($specialty['Person'] as $person): ?>
		<tr>
			<td class="text-center"><?php echo $person['id']; ?></td>
			<td class="text-center"><?php echo $person['name']; ?></td>
			<td class="text-center"><?php echo $person['last_name']; ?></td>
			<td class="text-center"><?php echo $person['dni']; ?></td>
			<td class="text-center"><?php echo $person['gender']; ?></td>
			<td class="text-center"><?php echo $person['address']; ?></td>
			<td class="text-center"><?php echo $person['phone']; ?></td>
			<td class="text-center"><?php echo $person['email']; ?></td>
			<td class="text-center"><?php echo $person['nationality_id']; ?></td>
			<td class="text-center"><?php echo $person['rol_id']; ?></td>
			<td class="text-center"><?php echo $person['specialty_id']; ?></td>
			<td class="text-center"><?php echo $person['pass_app']; ?></td>
			<td class="text-center"><?php echo $person['token']; ?></td>
			<td class="text-center">
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('controller' => 'people', 'action' => 'view', $person['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'view')); ?>
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('controller' => 'people', 'action' => 'edit', $person['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'edit')); ?>
				<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('controller' => 'people', 'action' => 'delete', $person['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'delete'), __('Are you sure you want to delete # %s?', $person['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->
					
				<?php endif; ?>

				
				
			</div><!-- /.related -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->

