<div class="specialties view">
<h2><?php echo __('Specialty'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($specialty['Specialty']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Specialty'); ?></dt>
		<dd>
			<?php echo h($specialty['Specialty']['specialty']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rol'); ?></dt>
		<dd>
			<?php echo $this->Html->link($specialty['Rol']['rol'], array('controller' => 'rols', 'action' => 'view', $specialty['Rol']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($specialty['Specialty']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($specialty['Specialty']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Specialty'), array('action' => 'edit', $specialty['Specialty']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Specialty'), array('action' => 'delete', $specialty['Specialty']['id']), array(), __('Are you sure you want to delete # %s?', $specialty['Specialty']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Specialties'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Specialty'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rols'), array('controller' => 'rols', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rol'), array('controller' => 'rols', 'action' => 'add')); ?> </li>
	</ul>
</div>
<!-- <div class="related">
	<h3><?php echo __('Related Rol'); ?></h3>
	<?php if (!empty($specialty['Rol'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Rol'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($specialty['Rol'] as $rol): ?>
		<tr>
			<td><?php echo $rol['id']; ?></td>
			<td><?php echo $rol['rol']; ?></td>
			<td><?php echo $rol['created']; ?></td>
			<td><?php echo $rol['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'rols', 'action' => 'view', $rol['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'rols', 'action' => 'edit', $rol['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'rols', 'action' => 'delete', $rol['id']), array(), __('Are you sure you want to delete # %s?', $specialty['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Rol'), array('controller' => 'rols', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div> -->
