<div class="charges form">
<?php echo $this->Form->create('Charge'); ?>
	<fieldset>
		<legend><?php echo __('Add Charge'); ?></legend>
	<?php
		echo $this->Form->input('total_cost');
		echo $this->Form->input('person_id');
		echo $this->Form->input('citation_id');
		echo $this->Form->input('state_charge');
		echo $this->Form->input('typepayment_id');
		echo $this->Form->input('observations');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Charges'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Citations'), array('controller' => 'citations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Citation'), array('controller' => 'citations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Typepayments'), array('controller' => 'typepayments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Typepayment'), array('controller' => 'typepayments', 'action' => 'add')); ?> </li>
	</ul>
</div>
