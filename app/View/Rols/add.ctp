<div class="rols form">
<?php echo $this->Form->create('Rol'); ?>
	<fieldset>
		<legend><?php echo __('Add Rol'); ?></legend>
	<?php
		echo $this->Form->input('rol');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Rols'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Doctor Specialties'), array('controller' => 'doctor_specialties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doctor Specialty'), array('controller' => 'doctor_specialties', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
	</ul>
</div>
