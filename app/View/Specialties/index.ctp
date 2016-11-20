<div class="specialties index">
	<h2><?php echo __('Specialties'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('specialty'); ?></th>
			<th><?php echo $this->Paginator->sort('rol_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($specialties as $specialty): ?>
	<tr>
		<td><?php echo h($specialty['Specialty']['id']); ?>&nbsp;</td>
		<td><?php echo h($specialty['Specialty']['specialty']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($specialty['Rol']['rol'], array('controller' => 'rols', 'action' => 'view', $specialty['Rol']['id'])); ?>
		</td>
		<td><?php echo h($specialty['Specialty']['created']); ?>&nbsp;</td>
		<td><?php echo h($specialty['Specialty']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $specialty['Specialty']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $specialty['Specialty']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $specialty['Specialty']['id']), array(), __('Are you sure you want to delete # %s?', $specialty['Specialty']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Specialty'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Rols'), array('controller' => 'rols', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rol'), array('controller' => 'rols', 'action' => 'add')); ?> </li>
	</ul>
</div>
