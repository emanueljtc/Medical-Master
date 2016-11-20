<div class="histories form">
<?php echo $this->Form->create('History'); ?>
	<fieldset>
		<legend><?php echo __('Add History'); ?></legend>
	<?php
		echo $this->Form->input('person_id');
		echo $this->Form->input('antecedent_id');
		echo $this->Form->input('age');
		echo $this->Form->input('weight');
		echo $this->Form->input('height');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Histories'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Antecedents'), array('controller' => 'antecedents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Antecedent'), array('controller' => 'antecedents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Diagnostics'), array('controller' => 'diagnostics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Diagnostic'), array('controller' => 'diagnostics', 'action' => 'add')); ?> </li>
	</ul>
</div>
