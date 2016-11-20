<div class="diagnostics index">
	<h2><?php echo __('Diagnostics'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('diagnostic'); ?></th>
			<th><?php echo $this->Paginator->sort('treatment_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($diagnostics as $diagnostic): ?>
	<tr>
		<td><?php echo h($diagnostic['Diagnostic']['id']); ?>&nbsp;</td>
		<td><?php echo h($diagnostic['Diagnostic']['diagnostic']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($diagnostic['Treatment']['id'], array('controller' => 'treatments', 'action' => 'view', $diagnostic['Treatment']['id'])); ?>
		</td>
		<td><?php echo h($diagnostic['Diagnostic']['created']); ?>&nbsp;</td>
		<td><?php echo h($diagnostic['Diagnostic']['modified']); ?>&nbsp;</td>
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
		<li><?php echo $this->Html->link(__('List Treatments'), array('controller' => 'treatments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Treatment'), array('controller' => 'treatments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Indications'), array('controller' => 'indications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Indication'), array('controller' => 'indications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Studies'), array('controller' => 'studies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Study'), array('controller' => 'studies', 'action' => 'add')); ?> </li>
	</ul>
</div>
