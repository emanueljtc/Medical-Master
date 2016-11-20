<div class="people view">
<h2><?php echo __('Person'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($person['Person']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($person['Person']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($person['Person']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dni'); ?></dt>
		<dd>
			<?php echo h($person['Person']['dni']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gender'); ?></dt>
		<dd>
			<?php echo h($person['Person']['gender']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($person['Person']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($person['Person']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($person['Person']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rol'); ?></dt>
		<dd>
			<?php echo $this->Html->link($person['Rol']['rol'], array('controller' => 'rols', 'action' => 'view', $person['Rol']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nationality'); ?></dt>
		<dd>
			<?php echo $this->Html->link($person['Nationality']['nacionalidad'], array('controller' => 'nationalities', 'action' => 'view', $person['Nationality']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Specialty'); ?></dt>
		<dd>
			<?php echo $this->Html->link($person['Specialty']['id'], array('controller' => 'specialties', 'action' => 'view', $person['Specialty']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pass App'); ?></dt>
		<dd>
			<?php echo h($person['Person']['pass_app']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Token'); ?></dt>
		<dd>
			<?php echo h($person['Person']['token']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Person'), array('action' => 'edit', $person['Person']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Person'), array('action' => 'delete', $person['Person']['id']), array(), __('Are you sure you want to delete # %s?', $person['Person']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rols'), array('controller' => 'rols', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rol'), array('controller' => 'rols', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Nationalities'), array('controller' => 'nationalities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nationality'), array('controller' => 'nationalities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Specialties'), array('controller' => 'specialties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Specialty'), array('controller' => 'specialties', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Antecedents'), array('controller' => 'antecedents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Antecedent'), array('controller' => 'antecedents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Charges'), array('controller' => 'charges', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Charge'), array('controller' => 'charges', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Citations'), array('controller' => 'citations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Citation'), array('controller' => 'citations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Diagnostics'), array('controller' => 'diagnostics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Diagnostic'), array('controller' => 'diagnostics', 'action' => 'add')); ?> </li>
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
	<h3><?php echo __('Related Antecedents'); ?></h3>
	<?php if (!empty($person['Antecedent'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Person Id'); ?></th>
		<th><?php echo __('Name Antecendent'); ?></th>
		<th><?php echo __('Origin'); ?></th>
		<th><?php echo __('Time  Suffering'); ?></th>
		<th><?php echo __('Family'); ?></th>
		<th><?php echo __('Personals Doctors'); ?></th>
		<th><?php echo __('Surgicals'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($person['Antecedent'] as $antecedent): ?>
		<tr>
			<td><?php echo $antecedent['id']; ?></td>
			<td><?php echo $antecedent['person_id']; ?></td>
			<td><?php echo $antecedent['name_antecendent']; ?></td>
			<td><?php echo $antecedent['origin']; ?></td>
			<td><?php echo $antecedent['time_ suffering']; ?></td>
			<td><?php echo $antecedent['family']; ?></td>
			<td><?php echo $antecedent['personals_doctors']; ?></td>
			<td><?php echo $antecedent['surgicals']; ?></td>
			<td><?php echo $antecedent['created']; ?></td>
			<td><?php echo $antecedent['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'antecedents', 'action' => 'view', $antecedent['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'antecedents', 'action' => 'edit', $antecedent['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'antecedents', 'action' => 'delete', $antecedent['id']), array(), __('Are you sure you want to delete # %s?', $antecedent['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Antecedent'), array('controller' => 'antecedents', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Charges'); ?></h3>
	<?php if (!empty($person['Charge'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Total Cost'); ?></th>
		<th><?php echo __('Person Id'); ?></th>
		<th><?php echo __('Citation Id'); ?></th>
		<th><?php echo __('State Charge'); ?></th>
		<th><?php echo __('Typepayment Id'); ?></th>
		<th><?php echo __('Observations'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($person['Charge'] as $charge): ?>
		<tr>
			<td><?php echo $charge['id']; ?></td>
			<td><?php echo $charge['total_cost']; ?></td>
			<td><?php echo $charge['person_id']; ?></td>
			<td><?php echo $charge['citation_id']; ?></td>
			<td><?php echo $charge['state_charge']; ?></td>
			<td><?php echo $charge['typepayment_id']; ?></td>
			<td><?php echo $charge['observations']; ?></td>
			<td><?php echo $charge['created']; ?></td>
			<td><?php echo $charge['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'charges', 'action' => 'view', $charge['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'charges', 'action' => 'edit', $charge['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'charges', 'action' => 'delete', $charge['id']), array(), __('Are you sure you want to delete # %s?', $charge['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Charge'), array('controller' => 'charges', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Citations'); ?></h3>
	<?php if (!empty($person['Citation'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Person Id'); ?></th>
		<th><?php echo __('Hour'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Datecitation Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($person['Citation'] as $citation): ?>
		<tr>
			<td><?php echo $citation['id']; ?></td>
			<td><?php echo $citation['person_id']; ?></td>
			<td><?php echo $citation['hour']; ?></td>
			<td><?php echo $citation['date']; ?></td>
			<td><?php echo $citation['created']; ?></td>
			<td><?php echo $citation['modified']; ?></td>
			<td><?php echo $citation['datecitation_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'citations', 'action' => 'view', $citation['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'citations', 'action' => 'edit', $citation['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'citations', 'action' => 'delete', $citation['id']), array(), __('Are you sure you want to delete # %s?', $citation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Citation'), array('controller' => 'citations', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Diagnostics'); ?></h3>
	<?php if (!empty($person['Diagnostic'])): ?>
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
	<?php foreach ($person['Diagnostic'] as $diagnostic): ?>
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
<div class="related">
	<h3><?php echo __('Related Histories'); ?></h3>
	<?php if (!empty($person['History'])): ?>
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
	<?php foreach ($person['History'] as $history): ?>
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
<div class="related">
	<h3><?php echo __('Related Indications'); ?></h3>
	<?php if (!empty($person['Indication'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Diagnostic Id'); ?></th>
		<th><?php echo __('Person Id'); ?></th>
		<th><?php echo __('Indication'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($person['Indication'] as $indication): ?>
		<tr>
			<td><?php echo $indication['id']; ?></td>
			<td><?php echo $indication['diagnostic_id']; ?></td>
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
	<?php if (!empty($person['Study'])): ?>
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
	<?php foreach ($person['Study'] as $study): ?>
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
	<?php if (!empty($person['Treatment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Person Id'); ?></th>
		<th><?php echo __('Status Treament'); ?></th>
		<th><?php echo __('Treatment'); ?></th>
		<th><?php echo __('Observations Treaments'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($person['Treatment'] as $treatment): ?>
		<tr>
			<td><?php echo $treatment['id']; ?></td>
			<td><?php echo $treatment['person_id']; ?></td>
			<td><?php echo $treatment['status_treament']; ?></td>
			<td><?php echo $treatment['treatment']; ?></td>
			<td><?php echo $treatment['observations_treaments']; ?></td>
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
