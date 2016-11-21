<div class="charges view">
<h2><?php echo __('Charge'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($charge['Charge']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Total Cost'); ?></dt>
		<dd>
			<?php echo h($charge['Charge']['total_cost']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Person'); ?></dt>
		<dd>
			<?php echo $this->Html->link($charge['Person']['name'], array('controller' => 'people', 'action' => 'view', $charge['Person']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Citation'); ?></dt>
		<dd>
			<?php echo $this->Html->link($charge['Citation']['id'], array('controller' => 'citations', 'action' => 'view', $charge['Citation']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State Charge'); ?></dt>
		<dd>
			<?php echo h($charge['Charge']['state_charge']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Typepayment'); ?></dt>
		<dd>
			<?php echo $this->Html->link($charge['Typepayment']['id'], array('controller' => 'typepayments', 'action' => 'view', $charge['Typepayment']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observations'); ?></dt>
		<dd>
			<?php echo h($charge['Charge']['observations']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($charge['Charge']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($charge['Charge']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Charge'), array('action' => 'edit', $charge['Charge']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Charge'), array('action' => 'delete', $charge['Charge']['id']), array(), __('Are you sure you want to delete # %s?', $charge['Charge']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Charges'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Charge'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Citations'), array('controller' => 'citations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Citation'), array('controller' => 'citations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Typepayments'), array('controller' => 'typepayments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Typepayment'), array('controller' => 'typepayments', 'action' => 'add')); ?> </li>
	</ul>
</div>
