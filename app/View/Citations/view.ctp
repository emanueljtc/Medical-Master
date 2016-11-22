<div class="citations view">
<h2><?php echo __('Citation'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($citation['Citation']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Person'); ?></dt>
		<dd>
			<?php echo $this->Html->link($citation['Person']['name'], array('controller' => 'people', 'action' => 'view', $citation['Person']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hour'); ?></dt>
		<dd>
			<?php echo h($citation['Citation']['hour']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($citation['Citation']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($citation['Citation']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($citation['Citation']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datecitation'); ?></dt>
		<dd>
			<?php echo $this->Html->link($citation['Datecitation']['state'], array('controller' => 'datecitations', 'action' => 'view', $citation['Datecitation']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Citation'), array('action' => 'edit', $citation['Citation']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Citation'), array('action' => 'delete', $citation['Citation']['id']), array(), __('Are you sure you want to delete # %s?', $citation['Citation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Citations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Citation'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Datecitations'), array('controller' => 'datecitations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Datecitation'), array('controller' => 'datecitations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Charges'), array('controller' => 'charges', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Charge'), array('controller' => 'charges', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Charges'); ?></h3>
	<?php if (!empty($citation['Charge'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Total Cost'); ?></th>
		<th><?php echo __('Person Id'); ?></th>
		<th><?php echo __('Citation Id'); ?></th>
		<th><?php echo __('State Charge'); ?></th>
		<th><?php echo __('Typepayment Id'); ?></th>
		<th><?php echo __('Observations'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($citation['Charge'] as $charge): ?>
		<tr>
			<td><?php echo $charge['id']; ?></td>
			<td><?php echo $charge['total_cost']; ?></td>
			<td><?php echo $charge['person_id']; ?></td>
			<td><?php echo $charge['citation_id']; ?></td>
			<td><?php echo $charge['state_charge']; ?></td>
			<td><?php echo $charge['typepayment_id']; ?></td>
			<td><?php echo $charge['observations']; ?></td>
			<td><?php echo $charge['created']; ?></td>
			<td><?php echo $charge['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'charges', 'action' => 'view', $charge['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'charges', 'action' => 'edit', $charge['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'charges', 'action' => 'delete', $charge['id']), array(), __('Are you sure you want to delete # %s?', $charge['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Charge'), array('controller' => 'charges', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
