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
		<li><?php echo $this->Html->link(__('List Doctor Specialties'), array('controller' => 'doctor_specialties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doctor Specialty'), array('controller' => 'doctor_specialties', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Doctor Specialties'); ?></h3>
	<?php if (!empty($specialty['DoctorSpecialty'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Rol Id'); ?></th>
		<th><?php echo __('Specialty Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($specialty['DoctorSpecialty'] as $doctorSpecialty): ?>
		<tr>
			<td><?php echo $doctorSpecialty['rol_id']; ?></td>
			<td><?php echo $doctorSpecialty['specialty_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'doctor_specialties', 'action' => 'view', $doctorSpecialty['specialty_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'doctor_specialties', 'action' => 'edit', $doctorSpecialty['specialty_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'doctor_specialties', 'action' => 'delete', $doctorSpecialty['specialty_id']), array(), __('Are you sure you want to delete # %s?', $doctorSpecialty['specialty_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Doctor Specialty'), array('controller' => 'doctor_specialties', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
