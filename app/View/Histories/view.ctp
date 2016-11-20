<div class="histories view">
<h2><?php echo __('History'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($history['History']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Person'); ?></dt>
		<dd>
			<?php echo $this->Html->link($history['Person']['name'], array('controller' => 'people', 'action' => 'view', $history['Person']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Antecedent'); ?></dt>
		<dd>
			<?php echo $this->Html->link($history['Antecedent']['name_antecendent'], array('controller' => 'antecedents', 'action' => 'view', $history['Antecedent']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Age'); ?></dt>
		<dd>
			<?php echo h($history['History']['age']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Weight'); ?></dt>
		<dd>
			<?php echo h($history['History']['weight']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Height'); ?></dt>
		<dd>
			<?php echo h($history['History']['height']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit History'), array('action' => 'edit', $history['History']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete History'), array('action' => 'delete', $history['History']['id']), array(), __('Are you sure you want to delete # %s?', $history['History']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Histories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New History'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Antecedents'), array('controller' => 'antecedents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Antecedent'), array('controller' => 'antecedents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dignostics Specialties'), array('controller' => 'dignostics_specialties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dignostics Specialty'), array('controller' => 'dignostics_specialties', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Dignostics Specialties'); ?></h3>
	<?php if (!empty($history['DignosticsSpecialty'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Dignostic Id'); ?></th>
		<th><?php echo __('Treament Id'); ?></th>
		<th><?php echo __('History Id'); ?></th>
		<th><?php echo __('Specialitie Id'); ?></th>
		<th><?php echo __('Oncological Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($history['DignosticsSpecialty'] as $dignosticsSpecialty): ?>
		<tr>
			<td><?php echo $dignosticsSpecialty['id']; ?></td>
			<td><?php echo $dignosticsSpecialty['dignostic_id']; ?></td>
			<td><?php echo $dignosticsSpecialty['treament_id']; ?></td>
			<td><?php echo $dignosticsSpecialty['history_id']; ?></td>
			<td><?php echo $dignosticsSpecialty['specialitie_id']; ?></td>
			<td><?php echo $dignosticsSpecialty['oncological_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'dignostics_specialties', 'action' => 'view', $dignosticsSpecialty['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'dignostics_specialties', 'action' => 'edit', $dignosticsSpecialty['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'dignostics_specialties', 'action' => 'delete', $dignosticsSpecialty['id']), array(), __('Are you sure you want to delete # %s?', $dignosticsSpecialty['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Dignostics Specialty'), array('controller' => 'dignostics_specialties', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
