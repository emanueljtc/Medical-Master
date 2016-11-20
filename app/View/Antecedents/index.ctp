<div class="antecedents index">
	<h2><?php echo __('Antecedents'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('person_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name_antecendent'); ?></th>
			<th><?php echo $this->Paginator->sort('origin'); ?></th>
			<th><?php echo $this->Paginator->sort('time_ suffering'); ?></th>
			<th><?php echo $this->Paginator->sort('family'); ?></th>
			<th><?php echo $this->Paginator->sort('personals_doctors'); ?></th>
			<th><?php echo $this->Paginator->sort('surgicals'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($antecedents as $antecedent): ?>
	<tr>
		<td><?php echo h($antecedent['Antecedent']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($antecedent['Person']['name'], array('controller' => 'people', 'action' => 'view', $antecedent['Person']['id'])); ?>
		</td>
		<td><?php echo h($antecedent['Antecedent']['name_antecendent']); ?>&nbsp;</td>
		<td><?php echo h($antecedent['Antecedent']['origin']); ?>&nbsp;</td>
		<td><?php echo h($antecedent['Antecedent']['time_ suffering']); ?>&nbsp;</td>
		<td><?php echo h($antecedent['Antecedent']['family']); ?>&nbsp;</td>
		<td><?php echo h($antecedent['Antecedent']['personals_doctors']); ?>&nbsp;</td>
		<td><?php echo h($antecedent['Antecedent']['surgicals']); ?>&nbsp;</td>
		<td><?php echo h($antecedent['Antecedent']['created']); ?>&nbsp;</td>
		<td><?php echo h($antecedent['Antecedent']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $antecedent['Antecedent']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $antecedent['Antecedent']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $antecedent['Antecedent']['id']), array(), __('Are you sure you want to delete # %s?', $antecedent['Antecedent']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Antecedent'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Histories'), array('controller' => 'histories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New History'), array('controller' => 'histories', 'action' => 'add')); ?> </li>
	</ul>
</div>
