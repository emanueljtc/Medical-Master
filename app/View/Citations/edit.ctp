<div class="citations form">
<?php echo $this->Form->create('Citation'); ?>
	<fieldset>
		<legend><?php echo __('Edit Citation'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('person_id');
		echo $this->Form->input('hour');
		echo $this->Form->input('date');
		echo $this->Form->input('datecitation_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Citation.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Citation.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Citations'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Datecitations'), array('controller' => 'datecitations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Datecitation'), array('controller' => 'datecitations', 'action' => 'add')); ?> </li>
	</ul>
</div>
