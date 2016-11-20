<div class="doctorSpecialties view">
<h2><?php echo __('Doctor Specialty'); ?></h2>
	<dl>
		<dt><?php echo __('Rol'); ?></dt>
		<dd>
			<?php echo $this->Html->link($doctorSpecialty['Rol']['rol'], array('controller' => 'rols', 'action' => 'view', $doctorSpecialty['Rol']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Specialty'); ?></dt>
		<dd>
			<?php echo $this->Html->link($doctorSpecialty['Specialty']['id'], array('controller' => 'specialties', 'action' => 'view', $doctorSpecialty['Specialty']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Doctor Specialty'), array('action' => 'edit', $doctorSpecialty['DoctorSpecialty']['specialty_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Doctor Specialty'), array('action' => 'delete', $doctorSpecialty['DoctorSpecialty']['specialty_id']), array(), __('Are you sure you want to delete # %s?', $doctorSpecialty['DoctorSpecialty']['specialty_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Doctor Specialties'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doctor Specialty'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rols'), array('controller' => 'rols', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rol'), array('controller' => 'rols', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Specialties'), array('controller' => 'specialties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Specialty'), array('controller' => 'specialties', 'action' => 'add')); ?> </li>
	</ul>
</div>
