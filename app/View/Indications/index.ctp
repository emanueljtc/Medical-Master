<div class="indications index">
	<h2><?php echo __('Indications'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('diagnostic_id'); ?></th>
			<th><?php echo $this->Paginator->sort('treatment_id'); ?></th>
			<th><?php echo $this->Paginator->sort('person_id'); ?></th>
			<th><?php echo $this->Paginator->sort('indication'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($indications as $indication): ?>
	<tr>
		<td><?php echo h($indication['Indication']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($indication['Diagnostic']['id'], array('controller' => 'diagnostics', 'action' => 'view', $indication['Diagnostic']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($indication['Treatment']['id'], array('controller' => 'treatments', 'action' => 'view', $indication['Treatment']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($indication['Person']['name'], array('controller' => 'people', 'action' => 'view', $indication['Person']['id'])); ?>
		</td>
		<td><?php echo h($indication['Indication']['indication']); ?>&nbsp;</td>
		<td><?php echo h($indication['Indication']['created']); ?>&nbsp;</td>
		<td><?php echo h($indication['Indication']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $indication['Indication']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $indication['Indication']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $indication['Indication']['id']), array(), __('Are you sure you want to delete # %s?', $indication['Indication']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Indication'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Diagnostics'), array('controller' => 'diagnostics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Diagnostic'), array('controller' => 'diagnostics', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Treatments'), array('controller' => 'treatments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Treatment'), array('controller' => 'treatments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
	</ul>
</div>
