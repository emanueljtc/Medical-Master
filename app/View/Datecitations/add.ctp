<div class="datecitations form">
<?php echo $this->Form->create('Datecitation'); ?>
	<fieldset>
		<legend><?php echo __('Add Datecitation'); ?></legend>
	<?php
		echo $this->Form->input('state');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Datecitations'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Citations'), array('controller' => 'citations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Citation'), array('controller' => 'citations', 'action' => 'add')); ?> </li>
	</ul>
</div>
