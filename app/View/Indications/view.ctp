<div class="indications view">
<h2><?php echo __('Indication'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($indication['Indication']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Diagnostic'); ?></dt>
		<dd>
			<?php echo $this->Html->link($indication['Diagnostic']['id'], array('controller' => 'diagnostics', 'action' => 'view', $indication['Diagnostic']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Treatment'); ?></dt>
		<dd>
			<?php echo $this->Html->link($indication['Treatment']['id'], array('controller' => 'treatments', 'action' => 'view', $indication['Treatment']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Person'); ?></dt>
		<dd>
			<?php echo $this->Html->link($indication['Person']['name'], array('controller' => 'people', 'action' => 'view', $indication['Person']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Indication'); ?></dt>
		<dd>
			<?php echo h($indication['Indication']['indication']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($indication['Indication']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($indication['Indication']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Indication'), array('action' => 'edit', $indication['Indication']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Indication'), array('action' => 'delete', $indication['Indication']['id']), array(), __('Are you sure you want to delete # %s?', $indication['Indication']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Indications'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Indication'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Diagnostics'), array('controller' => 'diagnostics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Diagnostic'), array('controller' => 'diagnostics', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Treatments'), array('controller' => 'treatments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Treatment'), array('controller' => 'treatments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
	</ul>
</div>
