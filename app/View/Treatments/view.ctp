<div class="treatments view">
<h2><?php echo __('Treatment'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($treatment['Treatment']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Person'); ?></dt>
		<dd>
			<?php echo $this->Html->link($treatment['Person']['name'], array('controller' => 'people', 'action' => 'view', $treatment['Person']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Diagnostic'); ?></dt>
		<dd>
			<?php echo $this->Html->link($treatment['Diagnostic']['id'], array('controller' => 'diagnostics', 'action' => 'view', $treatment['Diagnostic']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status Treament'); ?></dt>
		<dd>
			<?php echo h($treatment['Treatment']['status_treament']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Prescription'); ?></dt>
		<dd>
			<?php echo h($treatment['Treatment']['prescription']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observations Prescription'); ?></dt>
		<dd>
			<?php echo h($treatment['Treatment']['observations_prescription']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($treatment['Treatment']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($treatment['Treatment']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Treatment'), array('action' => 'edit', $treatment['Treatment']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Treatment'), array('action' => 'delete', $treatment['Treatment']['id']), array(), __('Are you sure you want to delete # %s?', $treatment['Treatment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Treatments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Treatment'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Diagnostics'), array('controller' => 'diagnostics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Diagnostic'), array('controller' => 'diagnostics', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Indications'), array('controller' => 'indications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Indication'), array('controller' => 'indications', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Indications'); ?></h3>
	<?php if (!empty($treatment['Indication'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Diagnostic Id'); ?></th>
		<th><?php echo __('Treatment Id'); ?></th>
		<th><?php echo __('Person Id'); ?></th>
		<th><?php echo __('Indication'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($treatment['Indication'] as $indication): ?>
		<tr>
			<td><?php echo $indication['id']; ?></td>
			<td><?php echo $indication['diagnostic_id']; ?></td>
			<td><?php echo $indication['treatment_id']; ?></td>
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
