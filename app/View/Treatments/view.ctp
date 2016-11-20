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
		<dt><?php echo __('Status Treament'); ?></dt>
		<dd>
			<?php echo h($treatment['Treatment']['status_treament']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Treatment'); ?></dt>
		<dd>
			<?php echo h($treatment['Treatment']['treatment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observations Treaments'); ?></dt>
		<dd>
			<?php echo h($treatment['Treatment']['observations_treaments']); ?>
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
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Diagnostics'); ?></h3>
	<?php if (!empty($treatment['Diagnostic'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Diagnostic'); ?></th>
		<th><?php echo __('Treatment Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($treatment['Diagnostic'] as $diagnostic): ?>
		<tr>
			<td><?php echo $diagnostic['id']; ?></td>
			<td><?php echo $diagnostic['diagnostic']; ?></td>
			<td><?php echo $diagnostic['treatment_id']; ?></td>
			<td><?php echo $diagnostic['created']; ?></td>
			<td><?php echo $diagnostic['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'diagnostics', 'action' => 'view', $diagnostic['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'diagnostics', 'action' => 'edit', $diagnostic['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'diagnostics', 'action' => 'delete', $diagnostic['id']), array(), __('Are you sure you want to delete # %s?', $diagnostic['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Diagnostic'), array('controller' => 'diagnostics', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
