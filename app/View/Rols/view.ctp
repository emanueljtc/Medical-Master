<div class="rols view">
<h2><?php echo __('Rol'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($rol['Rol']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rol'); ?></dt>
		<dd>
			<?php echo h($rol['Rol']['rol']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($rol['Rol']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($rol['Rol']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Rol'), array('action' => 'edit', $rol['Rol']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Rol'), array('action' => 'delete', $rol['Rol']['id']), array(), __('Are you sure you want to delete # %s?', $rol['Rol']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Rols'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rol'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Specialties'), array('controller' => 'specialties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Specialty'), array('controller' => 'specialties', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related People'); ?></h3>
	<?php if (!empty($rol['Person'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Dni'); ?></th>
		<th><?php echo __('Gender'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Phone'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Rol Id'); ?></th>
		<th><?php echo __('Nationality Id'); ?></th>
		<th><?php echo __('Specialty Id'); ?></th>
		<th><?php echo __('Pass App'); ?></th>
		<th><?php echo __('Token'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($rol['Person'] as $person): ?>
		<tr>
			<td><?php echo $person['id']; ?></td>
			<td><?php echo $person['name']; ?></td>
			<td><?php echo $person['last_name']; ?></td>
			<td><?php echo $person['dni']; ?></td>
			<td><?php echo $person['gender']; ?></td>
			<td><?php echo $person['address']; ?></td>
			<td><?php echo $person['phone']; ?></td>
			<td><?php echo $person['email']; ?></td>
			<td><?php echo $person['rol_id']; ?></td>
			<td><?php echo $person['nationality_id']; ?></td>
			<td><?php echo $person['specialty_id']; ?></td>
			<td><?php echo $person['pass_app']; ?></td>
			<td><?php echo $person['token']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'people', 'action' => 'view', $person['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'people', 'action' => 'edit', $person['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'people', 'action' => 'delete', $person['id']), array(), __('Are you sure you want to delete # %s?', $person['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Specialties'); ?></h3>
	<?php if (!empty($rol['Specialty'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Specialty'); ?></th>
		<th><?php echo __('Rol Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($rol['Specialty'] as $specialty): ?>
		<tr>
			<td><?php echo $specialty['id']; ?></td>
			<td><?php echo $specialty['specialty']; ?></td>
			<td><?php echo $specialty['rol_id']; ?></td>
			<td><?php echo $specialty['created']; ?></td>
			<td><?php echo $specialty['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'specialties', 'action' => 'view', $specialty['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'specialties', 'action' => 'edit', $specialty['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'specialties', 'action' => 'delete', $specialty['id']), array(), __('Are you sure you want to delete # %s?', $specialty['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Specialty'), array('controller' => 'specialties', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
