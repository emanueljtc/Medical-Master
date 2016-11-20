<div class="nationalities form">
<?php echo $this->Form->create('Nationality'); ?>
	<fieldset>
		<legend><?php echo __('Edit Nationality'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nacionalidad');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Nationality.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Nationality.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Nationalities'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
	</ul>
</div>
