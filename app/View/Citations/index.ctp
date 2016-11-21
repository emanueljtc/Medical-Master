<div class="citations index">
	<h2><?php echo __('Citations'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('person_id'); ?></th>
			<th><?php echo $this->Paginator->sort('hour'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('datecitation_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($citations as $citation): ?>
	<tr>
		<td><?php echo h($citation['Citation']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($citation['Person']['name'], array('controller' => 'people', 'action' => 'view', $citation['Person']['id'])); ?>
		</td>
		<td><?php echo h($citation['Citation']['hour']); ?>&nbsp;</td>
		<td><?php echo h($citation['Citation']['date']); ?>&nbsp;</td>
		<td><?php echo h($citation['Citation']['created']); ?>&nbsp;</td>
		<td><?php echo h($citation['Citation']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($citation['Datecitation']['state'], array('controller' => 'datecitations', 'action' => 'view', $citation['Datecitation']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $citation['Citation']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $citation['Citation']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $citation['Citation']['id']), array(), __('Are you sure you want to delete # %s?', $citation['Citation']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Citation'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Datecitations'), array('controller' => 'datecitations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Datecitation'), array('controller' => 'datecitations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Charges'), array('controller' => 'charges', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Charge'), array('controller' => 'charges', 'action' => 'add')); ?> </li>
	</ul>
</div>
