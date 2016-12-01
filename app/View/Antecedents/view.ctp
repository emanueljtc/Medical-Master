
<div class="row">
    <div class="col-xs-12">
		
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php  echo __('Antecedent'); ?></h3>
				<div class="box-tools pull-right">
	                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i> Edit'), array('action' => 'edit', $antecedent['Antecedent']['id']), array('class' => 'btn btn-primary', 'escape' => false)); ?>
	            </div>
			</div>
			
			<div class="box-body table-responsive">
                <table id="Antecedents" class="table table-bordered table-striped">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($antecedent['Antecedent']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Person'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($antecedent['Person']['name'], array('controller' => 'people', 'action' => 'view', $antecedent['Person']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Name Antecendent'); ?></strong></td>
		<td>
			<?php echo h($antecedent['Antecedent']['name_antecendent']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Origin'); ?></strong></td>
		<td>
			<?php echo h($antecedent['Antecedent']['origin']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Time  Suffering'); ?></strong></td>
		<td>
			<?php echo h($antecedent['Antecedent']['time_ suffering']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Family'); ?></strong></td>
		<td>
			<?php echo h($antecedent['Antecedent']['family']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Personals Doctors'); ?></strong></td>
		<td>
			<?php echo h($antecedent['Antecedent']['personals_doctors']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Surgicals'); ?></strong></td>
		<td>
			<?php echo h($antecedent['Antecedent']['surgicals']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
		<td>
			<?php echo h($antecedent['Antecedent']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modified'); ?></strong></td>
		<td>
			<?php echo h($antecedent['Antecedent']['modified']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

					
			<div class="box box-primary">
				<div class="box-header">
					<h3 class="box-title"><?php echo __('Related Histories'); ?></h3>
					<div class="box-tools pull-right">
						<?php echo $this->Html->link('<i class="glyphicon glyphicon-plus"></i> '.__('New History'), array('controller' => 'histories', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>					</div><!-- /.actions -->
				</div>
				<?php if (!empty($antecedent['History'])): ?>
					
					<div class="box-body table-responsive">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
											<th class="text-center"><?php echo __('Id'); ?></th>
		<th class="text-center"><?php echo __('Person Id'); ?></th>
		<th class="text-center"><?php echo __('Antecedent Id'); ?></th>
		<th class="text-center"><?php echo __('Age'); ?></th>
		<th class="text-center"><?php echo __('Weight'); ?></th>
		<th class="text-center"><?php echo __('Height'); ?></th>
									<th class="text-center"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($antecedent['History'] as $history): ?>
		<tr>
			<td class="text-center"><?php echo $history['id']; ?></td>
			<td class="text-center"><?php echo $history['person_id']; ?></td>
			<td class="text-center"><?php echo $history['antecedent_id']; ?></td>
			<td class="text-center"><?php echo $history['age']; ?></td>
			<td class="text-center"><?php echo $history['weight']; ?></td>
			<td class="text-center"><?php echo $history['height']; ?></td>
			<td class="text-center">
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('controller' => 'histories', 'action' => 'view', $history['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'view')); ?>
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('controller' => 'histories', 'action' => 'edit', $history['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'edit')); ?>
				<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('controller' => 'histories', 'action' => 'delete', $history['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'delete'), __('Are you sure you want to delete # %s?', $history['id'])); ?>
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

