<div class="charges index">
	<h2><?php echo __('Charges'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('total_cost'); ?></th>
			<th><?php echo $this->Paginator->sort('person_id'); ?></th>
			<th><?php echo $this->Paginator->sort('quote_id'); ?></th>
			<th><?php echo $this->Paginator->sort('state_charge'); ?></th>
			<th><?php echo $this->Paginator->sort('type_payment'); ?></th>
			<th><?php echo $this->Paginator->sort('observations'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($charges as $charge): ?>
	<tr>
		<td><?php echo h($charge['Charge']['id']); ?>&nbsp;</td>
		<td><?php echo h($charge['Charge']['total_cost']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($charge['Person']['name'], array('controller' => 'people', 'action' => 'view', $charge['Person']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($charge['Quote']['id'], array('controller' => 'quotes', 'action' => 'view', $charge['Quote']['id'])); ?>
		</td>
		<td><?php echo h($charge['Charge']['state_charge']); ?>&nbsp;</td>
		<td><?php echo h($charge['Charge']['type_payment']); ?>&nbsp;</td>
		<td><?php echo h($charge['Charge']['observations']); ?>&nbsp;</td>
		<td><?php echo h($charge['Charge']['created']); ?>&nbsp;</td>
		<td><?php echo h($charge['Charge']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $charge['Charge']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $charge['Charge']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $charge['Charge']['id']), array(), __('Are you sure you want to delete # %s?', $charge['Charge']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Charge'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Quotes'), array('controller' => 'quotes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Quote'), array('controller' => 'quotes', 'action' => 'add')); ?> </li>
	</ul>
</div>
