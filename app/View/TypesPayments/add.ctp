<div class="typesPayments form">
<?php echo $this->Form->create('TypesPayment'); ?>
	<fieldset>
		<legend><?php echo __('Add Types Payment'); ?></legend>
	<?php
		echo $this->Form->input('type_payment');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Types Payments'), array('action' => 'index')); ?></li>
	</ul>
</div>
