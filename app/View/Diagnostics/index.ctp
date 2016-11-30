<div class="diagnostics index">
	<h2><?php echo __('Diagnostics'); ?></h2>
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
			<th><?php echo $this->Paginator->sort('person_id'); ?></th>
			<th><?php echo $this->Paginator->sort('history_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($diagnostics as $diagnostic): ?>
	<tr>
		<td><?php echo h($diagnostic['Diagnostic']['id']); ?>&nbsp;</td>
		<td><?php echo h($diagnostic['Diagnostic']['size_boobs']); ?>&nbsp;</td>
		<td><?php echo h($diagnostic['Diagnostic']['form_boobs']); ?>&nbsp;</td>
		<td><?php echo h($diagnostic['Diagnostic']['symmetry_boobs']); ?>&nbsp;</td>
		<td><?php echo h($diagnostic['Diagnostic']['skin_boobs']); ?>&nbsp;</td>
		<td><?php echo h($diagnostic['Diagnostic']['cap_boobs']); ?>&nbsp;</td>
		<td><?php echo h($diagnostic['Diagnostic']['pussy']); ?>&nbsp;</td>
		<td><?php echo h($diagnostic['Diagnostic']['neck_pussy']); ?>&nbsp;</td>
		<td><?php echo h($diagnostic['Diagnostic']['coloscopia']); ?>&nbsp;</td>
		<td><?php echo h($diagnostic['Diagnostic']['ano_ straight']); ?>&nbsp;</td>
		<td><?php echo h($diagnostic['Diagnostic']['head_neck']); ?>&nbsp;</td>
		<td><?php echo h($diagnostic['Diagnostic']['touch_tumor']); ?>&nbsp;</td>
		<td><?php echo h($diagnostic['Diagnostic']['form_tumor']); ?>&nbsp;</td>
		<td><?php echo h($diagnostic['Diagnostic']['surface_tumor']); ?>&nbsp;</td>
		<td><?php echo h($diagnostic['Diagnostic']['contour_tumor']); ?>&nbsp;</td>
		<td><?php echo h($diagnostic['Diagnostic']['axis_tumor']); ?>&nbsp;</td>
		<td><?php echo h($diagnostic['Diagnostic']['consistency_tumor']); ?>&nbsp;</td>
		<td><?php echo h($diagnostic['Diagnostic']['laringoscopia']); ?>&nbsp;</td>
		<td><?php echo h($diagnostic['Diagnostic']['menarguia']); ?>&nbsp;</td>
		<td><?php echo h($diagnostic['Diagnostic']['reglas']); ?>&nbsp;</td>
		<td><?php echo h($diagnostic['Diagnostic']['prs']); ?>&nbsp;</td>
		<td><?php echo h($diagnostic['Diagnostic']['companion_sexual']); ?>&nbsp;</td>
		<td><?php echo h($diagnostic['Diagnostic']['distance_cap']); ?>&nbsp;</td>
		<td><?php echo h($diagnostic['Diagnostic']['gestas']); ?>&nbsp;</td>
		<td><?php echo h($diagnostic['Diagnostic']['rsi']); ?>&nbsp;</td>
		<td><?php echo h($diagnostic['Diagnostic']['paras']); ?>&nbsp;</td>
		<td><?php echo h($diagnostic['Diagnostic']['abdomen']); ?>&nbsp;</td>
		<td><?php echo h($diagnostic['Diagnostic']['misbirth']); ?>&nbsp;</td>
		<td><?php echo h($diagnostic['Diagnostic']['gynecological_vulva']); ?>&nbsp;</td>
		<td><?php echo h($diagnostic['Diagnostic']['cesareans']); ?>&nbsp;</td>
		<td><?php echo h($diagnostic['Diagnostic']['age_birth_one']); ?>&nbsp;</td>
		<td><?php echo h($diagnostic['Diagnostic']['diagnostico']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($diagnostic['Person']['name'], array('controller' => 'people', 'action' => 'view', $diagnostic['Person']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($diagnostic['History']['id'], array('controller' => 'histories', 'action' => 'view', $diagnostic['History']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $diagnostic['Diagnostic']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $diagnostic['Diagnostic']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $diagnostic['Diagnostic']['id']), array(), __('Are you sure you want to delete # %s?', $diagnostic['Diagnostic']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Diagnostic'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Histories'), array('controller' => 'histories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New History'), array('controller' => 'histories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Indications'), array('controller' => 'indications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Indication'), array('controller' => 'indications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Studies'), array('controller' => 'studies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Study'), array('controller' => 'studies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Treatments'), array('controller' => 'treatments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Treatment'), array('controller' => 'treatments', 'action' => 'add')); ?> </li>
	</ul>
</div>
