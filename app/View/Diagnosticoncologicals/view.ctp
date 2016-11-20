<div class="diagnosticoncologicals view">
<h2><?php echo __('Diagnosticoncological'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($diagnosticoncological['Diagnosticoncological']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Size Boobs'); ?></dt>
		<dd>
			<?php echo h($diagnosticoncological['Diagnosticoncological']['size_boobs']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Form Boobs'); ?></dt>
		<dd>
			<?php echo h($diagnosticoncological['Diagnosticoncological']['form_boobs']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Symmetry Boobs'); ?></dt>
		<dd>
			<?php echo h($diagnosticoncological['Diagnosticoncological']['symmetry_boobs']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Skin Boobs'); ?></dt>
		<dd>
			<?php echo h($diagnosticoncological['Diagnosticoncological']['skin_boobs']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cap Boobs'); ?></dt>
		<dd>
			<?php echo h($diagnosticoncological['Diagnosticoncological']['cap_boobs']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pussy'); ?></dt>
		<dd>
			<?php echo h($diagnosticoncological['Diagnosticoncological']['pussy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Neck Pussy'); ?></dt>
		<dd>
			<?php echo h($diagnosticoncological['Diagnosticoncological']['neck_pussy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Coloscopia'); ?></dt>
		<dd>
			<?php echo h($diagnosticoncological['Diagnosticoncological']['coloscopia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ano  Straight'); ?></dt>
		<dd>
			<?php echo h($diagnosticoncological['Diagnosticoncological']['ano_ straight']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Head Neck'); ?></dt>
		<dd>
			<?php echo h($diagnosticoncological['Diagnosticoncological']['head_neck']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Touch Tumor'); ?></dt>
		<dd>
			<?php echo h($diagnosticoncological['Diagnosticoncological']['touch_tumor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Form Tumor'); ?></dt>
		<dd>
			<?php echo h($diagnosticoncological['Diagnosticoncological']['form_tumor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Surface Tumor'); ?></dt>
		<dd>
			<?php echo h($diagnosticoncological['Diagnosticoncological']['surface_tumor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contour Tumor'); ?></dt>
		<dd>
			<?php echo h($diagnosticoncological['Diagnosticoncological']['contour_tumor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Axis Tumor'); ?></dt>
		<dd>
			<?php echo h($diagnosticoncological['Diagnosticoncological']['axis_tumor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Consistency Tumor'); ?></dt>
		<dd>
			<?php echo h($diagnosticoncological['Diagnosticoncological']['consistency_tumor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Laringoscopia'); ?></dt>
		<dd>
			<?php echo h($diagnosticoncological['Diagnosticoncological']['laringoscopia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Menarguia'); ?></dt>
		<dd>
			<?php echo h($diagnosticoncological['Diagnosticoncological']['menarguia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reglas'); ?></dt>
		<dd>
			<?php echo h($diagnosticoncological['Diagnosticoncological']['reglas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Prs'); ?></dt>
		<dd>
			<?php echo h($diagnosticoncological['Diagnosticoncological']['prs']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Companion Sexual'); ?></dt>
		<dd>
			<?php echo h($diagnosticoncological['Diagnosticoncological']['companion_sexual']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Distance Cap'); ?></dt>
		<dd>
			<?php echo h($diagnosticoncological['Diagnosticoncological']['distance_cap']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gestas'); ?></dt>
		<dd>
			<?php echo h($diagnosticoncological['Diagnosticoncological']['gestas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rsi'); ?></dt>
		<dd>
			<?php echo h($diagnosticoncological['Diagnosticoncological']['rsi']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Paras'); ?></dt>
		<dd>
			<?php echo h($diagnosticoncological['Diagnosticoncological']['paras']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Abdomen'); ?></dt>
		<dd>
			<?php echo h($diagnosticoncological['Diagnosticoncological']['abdomen']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Misbirth'); ?></dt>
		<dd>
			<?php echo h($diagnosticoncological['Diagnosticoncological']['misbirth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gynecological Vulva'); ?></dt>
		<dd>
			<?php echo h($diagnosticoncological['Diagnosticoncological']['gynecological_vulva']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cesareans'); ?></dt>
		<dd>
			<?php echo h($diagnosticoncological['Diagnosticoncological']['cesareans']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Age Birth One'); ?></dt>
		<dd>
			<?php echo h($diagnosticoncological['Diagnosticoncological']['age_birth_one']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Diagnosticoncological'), array('action' => 'edit', $diagnosticoncological['Diagnosticoncological']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Diagnosticoncological'), array('action' => 'delete', $diagnosticoncological['Diagnosticoncological']['id']), array(), __('Are you sure you want to delete # %s?', $diagnosticoncological['Diagnosticoncological']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Diagnosticoncologicals'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Diagnosticoncological'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Indications'), array('controller' => 'indications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Indication'), array('controller' => 'indications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Studies'), array('controller' => 'studies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Study'), array('controller' => 'studies', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Indications'); ?></h3>
	<?php if (!empty($diagnosticoncological['Indication'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Diagnosticoncological Id'); ?></th>
		<th><?php echo __('Person Id'); ?></th>
		<th><?php echo __('Indication'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($diagnosticoncological['Indication'] as $indication): ?>
		<tr>
			<td><?php echo $indication['id']; ?></td>
			<td><?php echo $indication['diagnosticoncological_id']; ?></td>
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
	<?php if (!empty($diagnosticoncological['Study'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Diagnosticoncological Id'); ?></th>
		<th><?php echo __('Person Id'); ?></th>
		<th><?php echo __('Name Studie'); ?></th>
		<th><?php echo __('Observations'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($diagnosticoncological['Study'] as $study): ?>
		<tr>
			<td><?php echo $study['id']; ?></td>
			<td><?php echo $study['diagnosticoncological_id']; ?></td>
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
