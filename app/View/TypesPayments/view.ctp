<div class="typesPayments view">
<h2><?php echo __('Types Payment'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($typesPayment['TypesPayment']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type Payment'); ?></dt>
		<dd>
			<?php echo h($typesPayment['TypesPayment']['type_payment']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Types Payment'), array('action' => 'edit', $typesPayment['TypesPayment']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Types Payment'), array('action' => 'delete', $typesPayment['TypesPayment']['id']), array(), __('Are you sure you want to delete # %s?', $typesPayment['TypesPayment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Types Payments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Types Payment'), array('action' => 'add')); ?> </li>
	</ul>
</div>
