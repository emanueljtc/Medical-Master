<div class="oncologicals view">
<h2><?php echo __('Oncological'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($oncological['Oncological']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Size Boobs'); ?></dt>
		<dd>
			<?php echo h($oncological['Oncological']['size_boobs']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Form Boobs'); ?></dt>
		<dd>
			<?php echo h($oncological['Oncological']['form_boobs']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Symmetry Boobs'); ?></dt>
		<dd>
			<?php echo h($oncological['Oncological']['symmetry_boobs']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Skin Boobs'); ?></dt>
		<dd>
			<?php echo h($oncological['Oncological']['skin_boobs']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cap Boobs'); ?></dt>
		<dd>
			<?php echo h($oncological['Oncological']['cap_boobs']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pussy'); ?></dt>
		<dd>
			<?php echo h($oncological['Oncological']['pussy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Neck Pussy'); ?></dt>
		<dd>
			<?php echo h($oncological['Oncological']['neck_pussy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Coloscopia'); ?></dt>
		<dd>
			<?php echo h($oncological['Oncological']['coloscopia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ano  Straight'); ?></dt>
		<dd>
			<?php echo h($oncological['Oncological']['ano_ straight']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Head Neck'); ?></dt>
		<dd>
			<?php echo h($oncological['Oncological']['head_neck']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Touch Tumor'); ?></dt>
		<dd>
			<?php echo h($oncological['Oncological']['touch_tumor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Form Tumor'); ?></dt>
		<dd>
			<?php echo h($oncological['Oncological']['form_tumor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Surface Tumor'); ?></dt>
		<dd>
			<?php echo h($oncological['Oncological']['surface_tumor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contour Tumor'); ?></dt>
		<dd>
			<?php echo h($oncological['Oncological']['contour_tumor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Axis Tumor'); ?></dt>
		<dd>
			<?php echo h($oncological['Oncological']['axis_tumor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Consistency Tumor'); ?></dt>
		<dd>
			<?php echo h($oncological['Oncological']['consistency_tumor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Laringoscopia'); ?></dt>
		<dd>
			<?php echo h($oncological['Oncological']['laringoscopia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Menarguia'); ?></dt>
		<dd>
			<?php echo h($oncological['Oncological']['menarguia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reglas'); ?></dt>
		<dd>
			<?php echo h($oncological['Oncological']['reglas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Prs'); ?></dt>
		<dd>
			<?php echo h($oncological['Oncological']['prs']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Companion Sexual'); ?></dt>
		<dd>
			<?php echo h($oncological['Oncological']['companion_sexual']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Distance Cap'); ?></dt>
		<dd>
			<?php echo h($oncological['Oncological']['distance_cap']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gestas'); ?></dt>
		<dd>
			<?php echo h($oncological['Oncological']['gestas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rsi'); ?></dt>
		<dd>
			<?php echo h($oncological['Oncological']['rsi']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Paras'); ?></dt>
		<dd>
			<?php echo h($oncological['Oncological']['paras']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Abdomen'); ?></dt>
		<dd>
			<?php echo h($oncological['Oncological']['abdomen']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Misbirth'); ?></dt>
		<dd>
			<?php echo h($oncological['Oncological']['misbirth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gynecological Vulva'); ?></dt>
		<dd>
			<?php echo h($oncological['Oncological']['gynecological_vulva']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cesareans'); ?></dt>
		<dd>
			<?php echo h($oncological['Oncological']['cesareans']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Age Birth One'); ?></dt>
		<dd>
			<?php echo h($oncological['Oncological']['age_birth_one']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Oncological'), array('action' => 'edit', $oncological['Oncological']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Oncological'), array('action' => 'delete', $oncological['Oncological']['id']), array(), __('Are you sure you want to delete # %s?', $oncological['Oncological']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Oncologicals'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Oncological'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dignostics Specialties'), array('controller' => 'dignostics_specialties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dignostics Specialty'), array('controller' => 'dignostics_specialties', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Dignostics Specialties'); ?></h3>
	<?php if (!empty($oncological['DignosticsSpecialty'])): ?>
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
	<?php foreach ($oncological['DignosticsSpecialty'] as $dignosticsSpecialty): ?>
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
