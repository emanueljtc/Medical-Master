<div class="people form">
<?php echo $this->Form->create('Person'); ?>
	<fieldset>
		<legend><?php echo __('Edit Person'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('dni');
		echo $this->Form->input('gender');
		echo $this->Form->input('address');
		echo $this->Form->input('phone');
		echo $this->Form->input('email');
		echo $this->Form->input('rol_id');
		echo $this->Form->input('nationality_id');
		echo $this->Form->input('pass_app');
		echo $this->Form->input('token');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Person.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Person.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List People'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Rols'), array('controller' => 'rols', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rol'), array('controller' => 'rols', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Nationalities'), array('controller' => 'nationalities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nationality'), array('controller' => 'nationalities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Antecedents'), array('controller' => 'antecedents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Antecedent'), array('controller' => 'antecedents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Charges'), array('controller' => 'charges', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Charge'), array('controller' => 'charges', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Citations'), array('controller' => 'citations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Citation'), array('controller' => 'citations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Diagnostics'), array('controller' => 'diagnostics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Diagnostic'), array('controller' => 'diagnostics', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Histories'), array('controller' => 'histories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New History'), array('controller' => 'histories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Indications'), array('controller' => 'indications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Indication'), array('controller' => 'indications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Studies'), array('controller' => 'studies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Study'), array('controller' => 'studies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Treatments'), array('controller' => 'treatments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Treatment'), array('controller' => 'treatments', 'action' => 'add')); ?> </li>
	</ul>
</div>
