<div class="antecedents view">
<h2><?php echo __('Antecedent'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($antecedent['Antecedent']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Person'); ?></dt>
		<dd>
			<?php echo $this->Html->link($antecedent['Person']['name'], array('controller' => 'people', 'action' => 'view', $antecedent['Person']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name Antecendent'); ?></dt>
		<dd>
			<?php echo h($antecedent['Antecedent']['name_antecendent']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Origin'); ?></dt>
		<dd>
			<?php echo h($antecedent['Antecedent']['origin']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Time  Suffering'); ?></dt>
		<dd>
			<?php echo h($antecedent['Antecedent']['time_ suffering']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Family'); ?></dt>
		<dd>
			<?php echo h($antecedent['Antecedent']['family']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Personals Doctors'); ?></dt>
		<dd>
			<?php echo h($antecedent['Antecedent']['personals_doctors']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Surgicals'); ?></dt>
		<dd>
			<?php echo h($antecedent['Antecedent']['surgicals']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($antecedent['Antecedent']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($antecedent['Antecedent']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Antecedent'), array('action' => 'edit', $antecedent['Antecedent']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Antecedent'), array('action' => 'delete', $antecedent['Antecedent']['id']), array(), __('Are you sure you want to delete # %s?', $antecedent['Antecedent']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Antecedents'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Antecedent'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Histories'), array('controller' => 'histories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New History'), array('controller' => 'histories', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Histories'); ?></h3>
	<?php if (!empty($antecedent['History'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Person Id'); ?></th>
		<th><?php echo __('Antecedent Id'); ?></th>
		<th><?php echo __('Age'); ?></th>
		<th><?php echo __('Weight'); ?></th>
		<th><?php echo __('Height'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($antecedent['History'] as $history): ?>
		<tr>
			<td><?php echo $history['id']; ?></td>
			<td><?php echo $history['person_id']; ?></td>
			<td><?php echo $history['antecedent_id']; ?></td>
			<td><?php echo $history['age']; ?></td>
			<td><?php echo $history['weight']; ?></td>
			<td><?php echo $history['height']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'histories', 'action' => 'view', $history['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'histories', 'action' => 'edit', $history['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'histories', 'action' => 'delete', $history['id']), array(), __('Are you sure you want to delete # %s?', $history['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New History'), array('controller' => 'histories', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
