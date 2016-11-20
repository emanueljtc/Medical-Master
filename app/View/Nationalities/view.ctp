<div class="nationalities view">
<h2><?php echo __('Nationality'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($nationality['Nationality']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nacionalidad'); ?></dt>
		<dd>
			<?php echo h($nationality['Nationality']['nacionalidad']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Nationality'), array('action' => 'edit', $nationality['Nationality']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Nationality'), array('action' => 'delete', $nationality['Nationality']['id']), array(), __('Are you sure you want to delete # %s?', $nationality['Nationality']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Nationalities'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nationality'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related People'); ?></h3>
	<?php if (!empty($nationality['Person'])): ?>
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
		<th><?php echo __('Pass App'); ?></th>
		<th><?php echo __('Token'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($nationality['Person'] as $person): ?>
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
