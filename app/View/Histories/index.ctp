<div class="histories index">
	<h2><?php echo __('Histories'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('person_id'); ?></th>
			<th><?php echo $this->Paginator->sort('antecedent_id'); ?></th>
			<th><?php echo $this->Paginator->sort('age'); ?></th>
			<th><?php echo $this->Paginator->sort('weight'); ?></th>
			<th><?php echo $this->Paginator->sort('height'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($histories as $history): ?>
	<tr>
		<td><?php echo h($history['History']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($history['Person']['name'], array('controller' => 'people', 'action' => 'view', $history['Person']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($history['Antecedent']['name_antecendent'], array('controller' => 'antecedents', 'action' => 'view', $history['Antecedent']['id'])); ?>
		</td>
		<td><?php echo h($history['History']['age']); ?>&nbsp;</td>
		<td><?php echo h($history['History']['weight']); ?>&nbsp;</td>
		<td><?php echo h($history['History']['height']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $history['History']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $history['History']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $history['History']['id']), array(), __('Are you sure you want to delete # %s?', $history['History']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New History'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Antecedents'), array('controller' => 'antecedents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Antecedent'), array('controller' => 'antecedents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dignostics Specialties'), array('controller' => 'dignostics_specialties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dignostics Specialty'), array('controller' => 'dignostics_specialties', 'action' => 'add')); ?> </li>
	</ul>
</div>
