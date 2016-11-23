<div class="indications form">
<?php echo $this->Form->create('Indication'); ?>
	<fieldset>
		<legend><?php echo __('Edit Indication'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('diagnostic_id');
		echo $this->Form->input('person_id');
		echo $this->Form->input('indication');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Indication.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Indication.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Indications'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Diagnostics'), array('controller' => 'diagnostics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Diagnostic'), array('controller' => 'diagnostics', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
	</ul>
</div>
