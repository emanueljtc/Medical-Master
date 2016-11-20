<div class="doctorSpecialties form">
<?php echo $this->Form->create('DoctorSpecialty'); ?>
	<fieldset>
		<legend><?php echo __('Add Doctor Specialty'); ?></legend>
	<?php
		echo $this->Form->input('rol_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Doctor Specialties'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Rols'), array('controller' => 'rols', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rol'), array('controller' => 'rols', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Specialties'), array('controller' => 'specialties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Specialtie'), array('controller' => 'specialties', 'action' => 'add')); ?> </li>
	</ul>
</div>
