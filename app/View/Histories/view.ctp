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
			<?php echo $this->Html->link($history['Antecedent']['id'], array('controller' => 'antecedents', 'action' => 'view', $history['Antecedent']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('List Diagnostics'), array('controller' => 'diagnostics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Diagnostic'), array('controller' => 'diagnostics', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Diagnostics'); ?></h3>
	<?php if (!empty($history['Diagnostic'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Size Boobs'); ?></th>
		<th><?php echo __('Form Boobs'); ?></th>
		<th><?php echo __('Symmetry Boobs'); ?></th>
		<th><?php echo __('Skin Boobs'); ?></th>
		<th><?php echo __('Cap Boobs'); ?></th>
		<th><?php echo __('Pussy'); ?></th>
		<th><?php echo __('Neck Pussy'); ?></th>
		<th><?php echo __('Coloscopia'); ?></th>
		<th><?php echo __('Ano  Straight'); ?></th>
		<th><?php echo __('Head Neck'); ?></th>
		<th><?php echo __('Touch Tumor'); ?></th>
		<th><?php echo __('Form Tumor'); ?></th>
		<th><?php echo __('Surface Tumor'); ?></th>
		<th><?php echo __('Contour Tumor'); ?></th>
		<th><?php echo __('Axis Tumor'); ?></th>
		<th><?php echo __('Consistency Tumor'); ?></th>
		<th><?php echo __('Laringoscopia'); ?></th>
		<th><?php echo __('Menarguia'); ?></th>
		<th><?php echo __('Reglas'); ?></th>
		<th><?php echo __('Prs'); ?></th>
		<th><?php echo __('Companion Sexual'); ?></th>
		<th><?php echo __('Distance Cap'); ?></th>
		<th><?php echo __('Gestas'); ?></th>
		<th><?php echo __('Rsi'); ?></th>
		<th><?php echo __('Paras'); ?></th>
		<th><?php echo __('Abdomen'); ?></th>
		<th><?php echo __('Misbirth'); ?></th>
		<th><?php echo __('Gynecological Vulva'); ?></th>
		<th><?php echo __('Cesareans'); ?></th>
		<th><?php echo __('Age Birth One'); ?></th>
		<th><?php echo __('Diagnostico'); ?></th>
		<th><?php echo __('Person Id'); ?></th>
		<th><?php echo __('History Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($history['Diagnostic'] as $diagnostic): ?>
		<tr>
			<td><?php echo $diagnostic['id']; ?></td>
			<td><?php echo $diagnostic['size_boobs']; ?></td>
			<td><?php echo $diagnostic['form_boobs']; ?></td>
			<td><?php echo $diagnostic['symmetry_boobs']; ?></td>
			<td><?php echo $diagnostic['skin_boobs']; ?></td>
			<td><?php echo $diagnostic['cap_boobs']; ?></td>
			<td><?php echo $diagnostic['pussy']; ?></td>
			<td><?php echo $diagnostic['neck_pussy']; ?></td>
			<td><?php echo $diagnostic['coloscopia']; ?></td>
			<td><?php echo $diagnostic['ano_ straight']; ?></td>
			<td><?php echo $diagnostic['head_neck']; ?></td>
			<td><?php echo $diagnostic['touch_tumor']; ?></td>
			<td><?php echo $diagnostic['form_tumor']; ?></td>
			<td><?php echo $diagnostic['surface_tumor']; ?></td>
			<td><?php echo $diagnostic['contour_tumor']; ?></td>
			<td><?php echo $diagnostic['axis_tumor']; ?></td>
			<td><?php echo $diagnostic['consistency_tumor']; ?></td>
			<td><?php echo $diagnostic['laringoscopia']; ?></td>
			<td><?php echo $diagnostic['menarguia']; ?></td>
			<td><?php echo $diagnostic['reglas']; ?></td>
			<td><?php echo $diagnostic['prs']; ?></td>
			<td><?php echo $diagnostic['companion_sexual']; ?></td>
			<td><?php echo $diagnostic['distance_cap']; ?></td>
			<td><?php echo $diagnostic['gestas']; ?></td>
			<td><?php echo $diagnostic['rsi']; ?></td>
			<td><?php echo $diagnostic['paras']; ?></td>
			<td><?php echo $diagnostic['abdomen']; ?></td>
			<td><?php echo $diagnostic['misbirth']; ?></td>
			<td><?php echo $diagnostic['gynecological_vulva']; ?></td>
			<td><?php echo $diagnostic['cesareans']; ?></td>
			<td><?php echo $diagnostic['age_birth_one']; ?></td>
			<td><?php echo $diagnostic['diagnostico']; ?></td>
			<td><?php echo $diagnostic['person_id']; ?></td>
			<td><?php echo $diagnostic['history_id']; ?></td>
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
