<div class="datecitations view">
<h2><?php echo __('Datecitation'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($datecitation['Datecitation']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo h($datecitation['Datecitation']['state']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Datecitation'), array('action' => 'edit', $datecitation['Datecitation']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Datecitation'), array('action' => 'delete', $datecitation['Datecitation']['id']), array(), __('Are you sure you want to delete # %s?', $datecitation['Datecitation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Datecitations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Datecitation'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Citations'), array('controller' => 'citations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Citation'), array('controller' => 'citations', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Citations'); ?></h3>
	<?php if (!empty($datecitation['Citation'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Person Id'); ?></th>
		<th><?php echo __('Hour'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Datecitation Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($datecitation['Citation'] as $citation): ?>
		<tr>
			<td><?php echo $citation['id']; ?></td>
			<td><?php echo $citation['person_id']; ?></td>
			<td><?php echo $citation['hour']; ?></td>
			<td><?php echo $citation['date']; ?></td>
			<td><?php echo $citation['created']; ?></td>
			<td><?php echo $citation['modified']; ?></td>
			<td><?php echo $citation['datecitation_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'citations', 'action' => 'view', $citation['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'citations', 'action' => 'edit', $citation['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'citations', 'action' => 'delete', $citation['id']), array(), __('Are you sure you want to delete # %s?', $citation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Citation'), array('controller' => 'citations', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
