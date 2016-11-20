<div class="diagnostics form">
<?php echo $this->Form->create('Diagnostic'); ?>
	<fieldset>
		<legend><?php echo __('Edit Diagnostic'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('diagnostic');
		echo $this->Form->input('treatment_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Diagnostic.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Diagnostic.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Diagnostics'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Treatments'), array('controller' => 'treatments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Treatment'), array('controller' => 'treatments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Indications'), array('controller' => 'indications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Indication'), array('controller' => 'indications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Studies'), array('controller' => 'studies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Study'), array('controller' => 'studies', 'action' => 'add')); ?> </li>
	</ul>
</div>
