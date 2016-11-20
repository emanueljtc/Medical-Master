<div class="citations view">
<h2><?php echo __('Citation'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($citation['Citation']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Person'); ?></dt>
		<dd>
			<?php echo $this->Html->link($citation['Person']['name'], array('controller' => 'people', 'action' => 'view', $citation['Person']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hour'); ?></dt>
		<dd>
			<?php echo h($citation['Citation']['hour']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($citation['Citation']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($citation['Citation']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($citation['Citation']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datecitation'); ?></dt>
		<dd>
			<?php echo $this->Html->link($citation['Datecitation']['state'], array('controller' => 'datecitations', 'action' => 'view', $citation['Datecitation']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Citation'), array('action' => 'edit', $citation['Citation']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Citation'), array('action' => 'delete', $citation['Citation']['id']), array(), __('Are you sure you want to delete # %s?', $citation['Citation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Citations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Citation'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Datecitations'), array('controller' => 'datecitations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Datecitation'), array('controller' => 'datecitations', 'action' => 'add')); ?> </li>
	</ul>
</div>
