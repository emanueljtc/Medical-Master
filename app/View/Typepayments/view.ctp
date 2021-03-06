
<div class="row">
    <div class="col-xs-12">
		
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php  echo __('Typepayment'); ?></h3>
				<div class="box-tools pull-right">
	                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i> Edit'), array('action' => 'edit', $typepayment['Typepayment']['id']), array('class' => 'btn btn-primary', 'escape' => false)); ?>
	            </div>
			</div>
			
			<div class="box-body table-responsive">
                <table id="Typepayments" class="table table-bordered table-striped">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($typepayment['Typepayment']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Type Payment'); ?></strong></td>
		<td>
			<?php echo h($typepayment['Typepayment']['type_payment']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

					
			<div class="box box-primary">
				<div class="box-header">
					<h3 class="box-title"><?php echo __('Related Charges'); ?></h3>
					<div class="box-tools pull-right">
						<?php echo $this->Html->link('<i class="glyphicon glyphicon-plus"></i> '.__('New Charge'), array('controller' => 'charges', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>					</div><!-- /.actions -->
				</div>
				<?php if (!empty($typepayment['Charge'])): ?>
					
					<div class="box-body table-responsive">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
											<th class="text-center"><?php echo __('Id'); ?></th>
		<th class="text-center"><?php echo __('Total Cost'); ?></th>
		<th class="text-center"><?php echo __('Person Id'); ?></th>
		<th class="text-center"><?php echo __('Citation Id'); ?></th>
		<th class="text-center"><?php echo __('State Charge'); ?></th>
		<th class="text-center"><?php echo __('Typepayment Id'); ?></th>
		<th class="text-center"><?php echo __('Observations'); ?></th>
		<th class="text-center"><?php echo __('Created'); ?></th>
		<th class="text-center"><?php echo __('Modified'); ?></th>
									<th class="text-center"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($typepayment['Charge'] as $charge): ?>
		<tr>
			<td class="text-center"><?php echo $charge['id']; ?></td>
			<td class="text-center"><?php echo $charge['total_cost']; ?></td>
			<td class="text-center"><?php echo $charge['person_id']; ?></td>
			<td class="text-center"><?php echo $charge['citation_id']; ?></td>
			<td class="text-center"><?php echo $charge['state_charge']; ?></td>
			<td class="text-center"><?php echo $charge['typepayment_id']; ?></td>
			<td class="text-center"><?php echo $charge['observations']; ?></td>
			<td class="text-center"><?php echo $charge['created']; ?></td>
			<td class="text-center"><?php echo $charge['modified']; ?></td>
			<td class="text-center">
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('controller' => 'charges', 'action' => 'view', $charge['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'view')); ?>
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('controller' => 'charges', 'action' => 'edit', $charge['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'edit')); ?>
				<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('controller' => 'charges', 'action' => 'delete', $charge['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'delete'), __('Are you sure you want to delete # %s?', $charge['id'])); ?>
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

