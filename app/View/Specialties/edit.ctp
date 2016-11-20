<div class="specialties form">
<?php echo $this->Form->create('Specialty'); ?>
	<fieldset>
		<legend><?php echo __('Edit Specialty'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('specialty');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Specialty.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Specialty.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Specialties'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Doctor Specialties'), array('controller' => 'doctor_specialties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doctor Specialty'), array('controller' => 'doctor_specialties', 'action' => 'add')); ?> </li>
	</ul>
</div>
