<div class="typepayments form">
<?php echo $this->Form->create('Typepayment'); ?>
	<fieldset>
		<legend><?php echo __('Add Typepayment'); ?></legend>
	<?php
		echo $this->Form->input('type_payment');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Typepayments'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Charges'), array('controller' => 'charges', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Charge'), array('controller' => 'charges', 'action' => 'add')); ?> </li>
	</ul>
</div>
