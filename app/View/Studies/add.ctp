<div class="studies form">
<?php echo $this->Form->create('Study'); ?>
	<fieldset>
		<legend><?php echo __('Add Study'); ?></legend>
	<?php
		echo $this->Form->input('diagnostic_id');
		echo $this->Form->input('person_id');
		echo $this->Form->input('name_studie');
		echo $this->Form->input('observations');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Studies'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Diagnostics'), array('controller' => 'diagnostics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Diagnostic'), array('controller' => 'diagnostics', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
	</ul>
</div>
