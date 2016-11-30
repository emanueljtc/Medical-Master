
<div class="row">
    <div class="col-xs-12">
		
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php  echo __('Treatment'); ?></h3>
				<div class="box-tools pull-right">
	                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i> Edit'), array('action' => 'edit', $treatment['Treatment']['id']), array('class' => 'btn btn-primary', 'escape' => false)); ?>
	            </div>
			</div>
			
			<div class="box-body table-responsive">
                <table id="Treatments" class="table table-bordered table-striped">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($treatment['Treatment']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Person'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($treatment['Person']['name'], array('controller' => 'people', 'action' => 'view', $treatment['Person']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Diagnostic'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($treatment['Diagnostic']['diagnostico'], array('controller' => 'diagnostics', 'action' => 'view', $treatment['Diagnostic']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Status Treament'); ?></strong></td>
		<td>
			<?php echo h($treatment['Treatment']['status_treament']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Prescription'); ?></strong></td>
		<td>
			<?php echo h($treatment['Treatment']['prescription']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Observations Prescription'); ?></strong></td>
		<td>
			<?php echo h($treatment['Treatment']['observations_prescription']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
		<td>
			<?php echo h($treatment['Treatment']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modified'); ?></strong></td>
		<td>
			<?php echo h($treatment['Treatment']['modified']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

					
			<div class="box box-primary">
				<div class="box-header">
					<h3 class="box-title"><?php echo __('Related Indications'); ?></h3>
					<div class="box-tools pull-right">
						<?php echo $this->Html->link('<i class="glyphicon glyphicon-plus"></i> '.__('New Indication'), array('controller' => 'indications', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>					</div><!-- /.actions -->
				</div>
				<?php if (!empty($treatment['Indication'])): ?>
					
					<div class="box-body table-responsive">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
											<th class="text-center"><?php echo __('Id'); ?></th>
		<th class="text-center"><?php echo __('Diagnostic Id'); ?></th>
		<th class="text-center"><?php echo __('Treatment Id'); ?></th>
		<th class="text-center"><?php echo __('Person Id'); ?></th>
		<th class="text-center"><?php echo __('Indication'); ?></th>
		<th class="text-center"><?php echo __('Created'); ?></th>
		<th class="text-center"><?php echo __('Modified'); ?></th>
									<th class="text-center"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($treatment['Indication'] as $indication): ?>
		<tr>
			<td class="text-center"><?php echo $indication['id']; ?></td>
			<td class="text-center"><?php echo $indication['diagnostic_id']; ?></td>
			<td class="text-center"><?php echo $indication['treatment_id']; ?></td>
			<td class="text-center"><?php echo $indication['person_id']; ?></td>
			<td class="text-center"><?php echo $indication['indication']; ?></td>
			<td class="text-center"><?php echo $indication['created']; ?></td>
			<td class="text-center"><?php echo $indication['modified']; ?></td>
			<td class="text-center">
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('controller' => 'indications', 'action' => 'view', $indication['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'view')); ?>
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('controller' => 'indications', 'action' => 'edit', $indication['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'edit')); ?>
				<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('controller' => 'indications', 'action' => 'delete', $indication['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'delete'), __('Are you sure you want to delete # %s?', $indication['id'])); ?>
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

