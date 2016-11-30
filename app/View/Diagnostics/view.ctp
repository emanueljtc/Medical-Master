<div class="diagnostics view">
<h2><?php echo __('Diagnostic'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($diagnostic['Diagnostic']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Size Boobs'); ?></dt>
		<dd>
			<?php echo h($diagnostic['Diagnostic']['size_boobs']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Form Boobs'); ?></dt>
		<dd>
			<?php echo h($diagnostic['Diagnostic']['form_boobs']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Symmetry Boobs'); ?></dt>
		<dd>
			<?php echo h($diagnostic['Diagnostic']['symmetry_boobs']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Skin Boobs'); ?></dt>
		<dd>
			<?php echo h($diagnostic['Diagnostic']['skin_boobs']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cap Boobs'); ?></dt>
		<dd>
			<?php echo h($diagnostic['Diagnostic']['cap_boobs']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pussy'); ?></dt>
		<dd>
			<?php echo h($diagnostic['Diagnostic']['pussy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Neck Pussy'); ?></dt>
		<dd>
			<?php echo h($diagnostic['Diagnostic']['neck_pussy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Coloscopia'); ?></dt>
		<dd>
			<?php echo h($diagnostic['Diagnostic']['coloscopia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ano  Straight'); ?></dt>
		<dd>
			<?php echo h($diagnostic['Diagnostic']['ano_ straight']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Head Neck'); ?></dt>
		<dd>
			<?php echo h($diagnostic['Diagnostic']['head_neck']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Touch Tumor'); ?></dt>
		<dd>
			<?php echo h($diagnostic['Diagnostic']['touch_tumor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Form Tumor'); ?></dt>
		<dd>
			<?php echo h($diagnostic['Diagnostic']['form_tumor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Surface Tumor'); ?></dt>
		<dd>
			<?php echo h($diagnostic['Diagnostic']['surface_tumor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contour Tumor'); ?></dt>
		<dd>
			<?php echo h($diagnostic['Diagnostic']['contour_tumor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Axis Tumor'); ?></dt>
		<dd>
			<?php echo h($diagnostic['Diagnostic']['axis_tumor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Consistency Tumor'); ?></dt>
		<dd>
			<?php echo h($diagnostic['Diagnostic']['consistency_tumor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Laringoscopia'); ?></dt>
		<dd>
			<?php echo h($diagnostic['Diagnostic']['laringoscopia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Menarguia'); ?></dt>
		<dd>
			<?php echo h($diagnostic['Diagnostic']['menarguia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reglas'); ?></dt>
		<dd>
			<?php echo h($diagnostic['Diagnostic']['reglas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Prs'); ?></dt>
		<dd>
			<?php echo h($diagnostic['Diagnostic']['prs']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Companion Sexual'); ?></dt>
		<dd>
			<?php echo h($diagnostic['Diagnostic']['companion_sexual']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Distance Cap'); ?></dt>
		<dd>
			<?php echo h($diagnostic['Diagnostic']['distance_cap']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gestas'); ?></dt>
		<dd>
			<?php echo h($diagnostic['Diagnostic']['gestas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rsi'); ?></dt>
		<dd>
			<?php echo h($diagnostic['Diagnostic']['rsi']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Paras'); ?></dt>
		<dd>
			<?php echo h($diagnostic['Diagnostic']['paras']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Abdomen'); ?></dt>
		<dd>
			<?php echo h($diagnostic['Diagnostic']['abdomen']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Misbirth'); ?></dt>
		<dd>
			<?php echo h($diagnostic['Diagnostic']['misbirth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gynecological Vulva'); ?></dt>
		<dd>
			<?php echo h($diagnostic['Diagnostic']['gynecological_vulva']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cesareans'); ?></dt>
		<dd>
			<?php echo h($diagnostic['Diagnostic']['cesareans']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Age Birth One'); ?></dt>
		<dd>
			<?php echo h($diagnostic['Diagnostic']['age_birth_one']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Diagnostico'); ?></dt>
		<dd>
			<?php echo h($diagnostic['Diagnostic']['diagnostico']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Person'); ?></dt>
		<dd>
			<?php echo $this->Html->link($diagnostic['Person']['name'], array('controller' => 'people', 'action' => 'view', $diagnostic['Person']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('History'); ?></dt>
		<dd>
			<?php echo $this->Html->link($diagnostic['History']['id'], array('controller' => 'histories', 'action' => 'view', $diagnostic['History']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Histories'), array('controller' => 'histories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New History'), array('controller' => 'histories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Indications'), array('controller' => 'indications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Indication'), array('controller' => 'indications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Studies'), array('controller' => 'studies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Study'), array('controller' => 'studies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Treatments'), array('controller' => 'treatments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Treatment'), array('controller' => 'treatments', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Indications'); ?></h3>
	<?php if (!empty($diagnostic['Indication'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Diagnostic Id'); ?></th>
		<th><?php echo __('Treament Id'); ?></th>
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
			<td><?php echo $indication['treament_id']; ?></td>
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
<div class="related">
	<h3><?php echo __('Related Treatments'); ?></h3>
	<?php if (!empty($diagnostic['Treatment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Person Id'); ?></th>
		<th><?php echo __('Diagnostic Id'); ?></th>
		<th><?php echo __('Status Treament'); ?></th>
		<th><?php echo __('Prescription'); ?></th>
		<th><?php echo __('Observations Prescription'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($diagnostic['Treatment'] as $treatment): ?>
		<tr>
			<td><?php echo $treatment['id']; ?></td>
			<td><?php echo $treatment['person_id']; ?></td>
			<td><?php echo $treatment['diagnostic_id']; ?></td>
			<td><?php echo $treatment['status_treament']; ?></td>
			<td><?php echo $treatment['prescription']; ?></td>
			<td><?php echo $treatment['observations_prescription']; ?></td>
			<td><?php echo $treatment['created']; ?></td>
			<td><?php echo $treatment['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'treatments', 'action' => 'view', $treatment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'treatments', 'action' => 'edit', $treatment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'treatments', 'action' => 'delete', $treatment['id']), array(), __('Are you sure you want to delete # %s?', $treatment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Treatment'), array('controller' => 'treatments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
