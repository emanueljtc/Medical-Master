
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
					<h3 class="box-title"><?php echo __('Related Users'); ?></h3>
					<div class="box-tools pull-right">
						<?php echo $this->Html->link('<i class="glyphicon glyphicon-plus"></i> '.__('New User'), array('controller' => 'users', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>					</div><!-- /.actions -->
				</div>
				<?php if (!empty($specialty['User'])): ?>
					
					<div class="box-body table-responsive">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
											<th class="text-center"><?php echo __('Id'); ?></th>
		<th class="text-center"><?php echo __('Full Name'); ?></th>
		<th class="text-center"><?php echo __('Username'); ?></th>
		<th class="text-center"><?php echo __('Password'); ?></th>
		<th class="text-center"><?php echo __('Specialty Id'); ?></th>
		<th class="text-center"><?php echo __('Group Id'); ?></th>
		<th class="text-center"><?php echo __('Created'); ?></th>
		<th class="text-center"><?php echo __('Modified'); ?></th>
									<th class="text-center"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($specialty['User'] as $user): ?>
		<tr>
			<td class="text-center"><?php echo $user['id']; ?></td>
			<td class="text-center"><?php echo $user['full_name']; ?></td>
			<td class="text-center"><?php echo $user['username']; ?></td>
			<td class="text-center"><?php echo $user['password']; ?></td>
			<td class="text-center"><?php echo $user['specialty_id']; ?></td>
			<td class="text-center"><?php echo $user['group_id']; ?></td>
			<td class="text-center"><?php echo $user['created']; ?></td>
			<td class="text-center"><?php echo $user['modified']; ?></td>
			<td class="text-center">
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('controller' => 'users', 'action' => 'view', $user['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'view')); ?>
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('controller' => 'users', 'action' => 'edit', $user['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'edit')); ?>
				<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('controller' => 'users', 'action' => 'delete', $user['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'delete'), __('Are you sure you want to delete # %s?', $user['id'])); ?>
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

