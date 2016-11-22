<div class="antecedents form">
<?php echo $this->Form->create('Antecedent'); ?>
	<fieldset>
		<legend><?php echo __('Add Antecedent'); ?></legend>
	<?php
		echo $this->Form->input('person_id');
		echo $this->Form->input('name_antecendent');
		echo $this->Form->input('origin');
		echo $this->Form->input('time_ suffering');
		echo $this->Form->input('family');
		echo $this->Form->input('personals_doctors');
		echo $this->Form->input('surgicals');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Antecedents'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Histories'), array('controller' => 'histories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New History'), array('controller' => 'histories', 'action' => 'add')); ?> </li>
	</ul>
</div>
