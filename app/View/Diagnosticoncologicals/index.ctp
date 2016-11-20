<div class="diagnosticoncologicals index">
	<h2><?php echo __('Diagnosticoncologicals'); ?></h2>
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
			<th><?php echo $this->Paginator->sort('diagnostico'); ?></th>
			<th><?php echo $this->Paginator->sort('diagnosticoncological_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($diagnosticoncologicals as $diagnosticoncological): ?>
	<tr>
		<td><?php echo h($diagnosticoncological['Diagnosticoncological']['id']); ?>&nbsp;</td>
		<td><?php echo h($diagnosticoncological['Diagnosticoncological']['size_boobs']); ?>&nbsp;</td>
		<td><?php echo h($diagnosticoncological['Diagnosticoncological']['form_boobs']); ?>&nbsp;</td>
		<td><?php echo h($diagnosticoncological['Diagnosticoncological']['symmetry_boobs']); ?>&nbsp;</td>
		<td><?php echo h($diagnosticoncological['Diagnosticoncological']['skin_boobs']); ?>&nbsp;</td>
		<td><?php echo h($diagnosticoncological['Diagnosticoncological']['cap_boobs']); ?>&nbsp;</td>
		<td><?php echo h($diagnosticoncological['Diagnosticoncological']['pussy']); ?>&nbsp;</td>
		<td><?php echo h($diagnosticoncological['Diagnosticoncological']['neck_pussy']); ?>&nbsp;</td>
		<td><?php echo h($diagnosticoncological['Diagnosticoncological']['coloscopia']); ?>&nbsp;</td>
		<td><?php echo h($diagnosticoncological['Diagnosticoncological']['ano_ straight']); ?>&nbsp;</td>
		<td><?php echo h($diagnosticoncological['Diagnosticoncological']['head_neck']); ?>&nbsp;</td>
		<td><?php echo h($diagnosticoncological['Diagnosticoncological']['touch_tumor']); ?>&nbsp;</td>
		<td><?php echo h($diagnosticoncological['Diagnosticoncological']['form_tumor']); ?>&nbsp;</td>
		<td><?php echo h($diagnosticoncological['Diagnosticoncological']['surface_tumor']); ?>&nbsp;</td>
		<td><?php echo h($diagnosticoncological['Diagnosticoncological']['contour_tumor']); ?>&nbsp;</td>
		<td><?php echo h($diagnosticoncological['Diagnosticoncological']['axis_tumor']); ?>&nbsp;</td>
		<td><?php echo h($diagnosticoncological['Diagnosticoncological']['consistency_tumor']); ?>&nbsp;</td>
		<td><?php echo h($diagnosticoncological['Diagnosticoncological']['laringoscopia']); ?>&nbsp;</td>
		<td><?php echo h($diagnosticoncological['Diagnosticoncological']['menarguia']); ?>&nbsp;</td>
		<td><?php echo h($diagnosticoncological['Diagnosticoncological']['reglas']); ?>&nbsp;</td>
		<td><?php echo h($diagnosticoncological['Diagnosticoncological']['prs']); ?>&nbsp;</td>
		<td><?php echo h($diagnosticoncological['Diagnosticoncological']['companion_sexual']); ?>&nbsp;</td>
		<td><?php echo h($diagnosticoncological['Diagnosticoncological']['distance_cap']); ?>&nbsp;</td>
		<td><?php echo h($diagnosticoncological['Diagnosticoncological']['gestas']); ?>&nbsp;</td>
		<td><?php echo h($diagnosticoncological['Diagnosticoncological']['rsi']); ?>&nbsp;</td>
		<td><?php echo h($diagnosticoncological['Diagnosticoncological']['paras']); ?>&nbsp;</td>
		<td><?php echo h($diagnosticoncological['Diagnosticoncological']['abdomen']); ?>&nbsp;</td>
		<td><?php echo h($diagnosticoncological['Diagnosticoncological']['misbirth']); ?>&nbsp;</td>
		<td><?php echo h($diagnosticoncological['Diagnosticoncological']['gynecological_vulva']); ?>&nbsp;</td>
		<td><?php echo h($diagnosticoncological['Diagnosticoncological']['cesareans']); ?>&nbsp;</td>
		<td><?php echo h($diagnosticoncological['Diagnosticoncological']['age_birth_one']); ?>&nbsp;</td>
		<td><?php echo h($diagnosticoncological['Diagnosticoncological']['diagnostico']); ?>&nbsp;</td>
		<td><?php echo h($diagnosticoncological['Diagnosticoncological']['diagnosticoncological_id']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $diagnosticoncological['Diagnosticoncological']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $diagnosticoncological['Diagnosticoncological']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $diagnosticoncological['Diagnosticoncological']['id']), array(), __('Are you sure you want to delete # %s?', $diagnosticoncological['Diagnosticoncological']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Diagnosticoncological'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Indications'), array('controller' => 'indications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Indication'), array('controller' => 'indications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Studies'), array('controller' => 'studies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Study'), array('controller' => 'studies', 'action' => 'add')); ?> </li>
	</ul>
</div>
