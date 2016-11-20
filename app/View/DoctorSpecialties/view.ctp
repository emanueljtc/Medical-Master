<div class="doctorSpecialties view">
<h2><?php echo __('Doctor Specialty'); ?></h2>
	<dl>
		<dt><?php echo __('Rol'); ?></dt>
		<dd>
			<?php echo $this->Html->link($doctorSpecialty['Rol']['rol'], array('controller' => 'rols', 'action' => 'view', $doctorSpecialty['Rol']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Specialtie'); ?></dt>
		<dd>
			<?php echo $this->Html->link($doctorSpecialty['Specialtie']['id'], array('controller' => 'specialties', 'action' => 'view', $doctorSpecialty['Specialtie']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Doctor Specialty'), array('action' => 'edit', $doctorSpecialty['DoctorSpecialty']['specialtie_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Doctor Specialty'), array('action' => 'delete', $doctorSpecialty['DoctorSpecialty']['specialtie_id']), array(), __('Are you sure you want to delete # %s?', $doctorSpecialty['DoctorSpecialty']['specialtie_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Doctor Specialties'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doctor Specialty'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rols'), array('controller' => 'rols', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rol'), array('controller' => 'rols', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Specialties'), array('controller' => 'specialties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Specialtie'), array('controller' => 'specialties', 'action' => 'add')); ?> </li>
	</ul>
</div>
