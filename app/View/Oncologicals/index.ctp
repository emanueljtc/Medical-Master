<div class="oncologicals index">
	<h2><?php echo __('Oncologicals'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('size_boobs'); ?></th>
			<th><?php echo $this->Paginator->sort('form_boobs'); ?></th>
			<th><?php echo $this->Paginator->sort('symmetry_boobs'); ?></th>
			<th><?php echo $this->Paginator->sort('skin_boobs'); ?></th>
			<th><?php echo $this->Paginator->sort('cap_boobs'); ?></th>
			<th><?php echo $this->Paginator->sort('pussy'); ?></th>
			<th><?php echo $this->Paginator->sort('neck_pussy'); ?></th>
			<th><?php echo $this->Paginator->sort('coloscopia'); ?></th>
			<th><?php echo $this->Paginator->sort('ano_ straight'); ?></th>
			<th><?php echo $this->Paginator->sort('head_neck'); ?></th>
			<th><?php echo $this->Paginator->sort('touch_tumor'); ?></th>
			<th><?php echo $this->Paginator->sort('form_tumor'); ?></th>
			<th><?php echo $this->Paginator->sort('surface_tumor'); ?></th>
			<th><?php echo $this->Paginator->sort('contour_tumor'); ?></th>
			<th><?php echo $this->Paginator->sort('axis_tumor'); ?></th>
			<th><?php echo $this->Paginator->sort('consistency_tumor'); ?></th>
			<th><?php echo $this->Paginator->sort('laringoscopia'); ?></th>
			<th><?php echo $this->Paginator->sort('menarguia'); ?></th>
			<th><?php echo $this->Paginator->sort('reglas'); ?></th>
			<th><?php echo $this->Paginator->sort('prs'); ?></th>
			<th><?php echo $this->Paginator->sort('companion_sexual'); ?></th>
			<th><?php echo $this->Paginator->sort('distance_cap'); ?></th>
			<th><?php echo $this->Paginator->sort('gestas'); ?></th>
			<th><?php echo $this->Paginator->sort('rsi'); ?></th>
			<th><?php echo $this->Paginator->sort('paras'); ?></th>
			<th><?php echo $this->Paginator->sort('abdomen'); ?></th>
			<th><?php echo $this->Paginator->sort('misbirth'); ?></th>
			<th><?php echo $this->Paginator->sort('gynecological_vulva'); ?></th>
			<th><?php echo $this->Paginator->sort('cesareans'); ?></th>
			<th><?php echo $this->Paginator->sort('age_birth_one'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($oncologicals as $oncological): ?>
	<tr>
		<td><?php echo h($oncological['Oncological']['id']); ?>&nbsp;</td>
		<td><?php echo h($oncological['Oncological']['size_boobs']); ?>&nbsp;</td>
		<td><?php echo h($oncological['Oncological']['form_boobs']); ?>&nbsp;</td>
		<td><?php echo h($oncological['Oncological']['symmetry_boobs']); ?>&nbsp;</td>
		<td><?php echo h($oncological['Oncological']['skin_boobs']); ?>&nbsp;</td>
		<td><?php echo h($oncological['Oncological']['cap_boobs']); ?>&nbsp;</td>
		<td><?php echo h($oncological['Oncological']['pussy']); ?>&nbsp;</td>
		<td><?php echo h($oncological['Oncological']['neck_pussy']); ?>&nbsp;</td>
		<td><?php echo h($oncological['Oncological']['coloscopia']); ?>&nbsp;</td>
		<td><?php echo h($oncological['Oncological']['ano_ straight']); ?>&nbsp;</td>
		<td><?php echo h($oncological['Oncological']['head_neck']); ?>&nbsp;</td>
		<td><?php echo h($oncological['Oncological']['touch_tumor']); ?>&nbsp;</td>
		<td><?php echo h($oncological['Oncological']['form_tumor']); ?>&nbsp;</td>
		<td><?php echo h($oncological['Oncological']['surface_tumor']); ?>&nbsp;</td>
		<td><?php echo h($oncological['Oncological']['contour_tumor']); ?>&nbsp;</td>
		<td><?php echo h($oncological['Oncological']['axis_tumor']); ?>&nbsp;</td>
		<td><?php echo h($oncological['Oncological']['consistency_tumor']); ?>&nbsp;</td>
		<td><?php echo h($oncological['Oncological']['laringoscopia']); ?>&nbsp;</td>
		<td><?php echo h($oncological['Oncological']['menarguia']); ?>&nbsp;</td>
		<td><?php echo h($oncological['Oncological']['reglas']); ?>&nbsp;</td>
		<td><?php echo h($oncological['Oncological']['prs']); ?>&nbsp;</td>
		<td><?php echo h($oncological['Oncological']['companion_sexual']); ?>&nbsp;</td>
		<td><?php echo h($oncological['Oncological']['distance_cap']); ?>&nbsp;</td>
		<td><?php echo h($oncological['Oncological']['gestas']); ?>&nbsp;</td>
		<td><?php echo h($oncological['Oncological']['rsi']); ?>&nbsp;</td>
		<td><?php echo h($oncological['Oncological']['paras']); ?>&nbsp;</td>
		<td><?php echo h($oncological['Oncological']['abdomen']); ?>&nbsp;</td>
		<td><?php echo h($oncological['Oncological']['misbirth']); ?>&nbsp;</td>
		<td><?php echo h($oncological['Oncological']['gynecological_vulva']); ?>&nbsp;</td>
		<td><?php echo h($oncological['Oncological']['cesareans']); ?>&nbsp;</td>
		<td><?php echo h($oncological['Oncological']['age_birth_one']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $oncological['Oncological']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $oncological['Oncological']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $oncological['Oncological']['id']), array(), __('Are you sure you want to delete # %s?', $oncological['Oncological']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Oncological'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Dignostics Specialties'), array('controller' => 'dignostics_specialties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dignostics Specialty'), array('controller' => 'dignostics_specialties', 'action' => 'add')); ?> </li>
	</ul>
</div>
