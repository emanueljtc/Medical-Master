<div class="diagnostics view">
<h2><?php echo __('Diagnostic'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($diagnostic['Diagnostic']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Diagnostic'); ?></dt>
		<dd>
			<?php echo h($diagnostic['Diagnostic']['diagnostic']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Treatment'); ?></dt>
		<dd>
			<?php echo $this->Html->link($diagnostic['Treatment']['id'], array('controller' => 'treatments', 'action' => 'view', $diagnostic['Treatment']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($diagnostic['Diagnostic']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($diagnostic['Diagnostic']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Diagnostic'), array('action' => 'edit', $diagnostic['Diagnostic']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Diagnostic'), array('action' => 'delete', $diagnostic['Diagnostic']['id']), array(), __('Are you sure you want to delete # %s?', $diagnostic['Diagnostic']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Diagnostics'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Diagnostic'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Treatments'), array('controller' => 'treatments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Treatment'), array('controller' => 'treatments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Indications'), array('controller' => 'indications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Indication'), array('controller' => 'indications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Studies'), array('controller' => 'studies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Study'), array('controller' => 'studies', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Indications'); ?></h3>
	<?php if (!empty($diagnostic['Indication'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Diagnostic Id'); ?></th>
		<th><?php echo __('Person Id'); ?></th>
		<th><?php echo __('Indication'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($diagnostic['Indication'] as $indication): ?>
		<tr>
			<td><?php echo $indication['id']; ?></td>
			<td><?php echo $indication['diagnostic_id']; ?></td>
			<td><?php echo $indication['person_id']; ?></td>
			<td><?php echo $indication['indication']; ?></td>
			<td><?php echo $indication['created']; ?></td>
			<td><?php echo $indication['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'indications', 'action' => 'view', $indication['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'indications', 'action' => 'edit', $indication['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'indications', 'action' => 'delete', $indication['id']), array(), __('Are you sure you want to delete # %s?', $indication['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Indication'), array('controller' => 'indications', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Studies'); ?></h3>
	<?php if (!empty($diagnostic['Study'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Diagnostic Id'); ?></th>
		<th><?php echo __('Person Id'); ?></th>
		<th><?php echo __('Name Studie'); ?></th>
		<th><?php echo __('Observations'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($diagnostic['Study'] as $study): ?>
		<tr>
			<td><?php echo $study['id']; ?></td>
			<td><?php echo $study['diagnostic_id']; ?></td>
			<td><?php echo $study['person_id']; ?></td>
			<td><?php echo $study['name_studie']; ?></td>
			<td><?php echo $study['observations']; ?></td>
			<td><?php echo $study['created']; ?></td>
			<td><?php echo $study['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'studies', 'action' => 'view', $study['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'studies', 'action' => 'edit', $study['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'studies', 'action' => 'delete', $study['id']), array(), __('Are you sure you want to delete # %s?', $study['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Study'), array('controller' => 'studies', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
