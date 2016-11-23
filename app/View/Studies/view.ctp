<div class="studies view">
<h2><?php echo __('Study'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($study['Study']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Diagnostic'); ?></dt>
		<dd>
			<?php echo $this->Html->link($study['Diagnostic']['id'], array('controller' => 'diagnostics', 'action' => 'view', $study['Diagnostic']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Person'); ?></dt>
		<dd>
			<?php echo $this->Html->link($study['Person']['name'], array('controller' => 'people', 'action' => 'view', $study['Person']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name Studie'); ?></dt>
		<dd>
			<?php echo h($study['Study']['name_studie']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observations'); ?></dt>
		<dd>
			<?php echo h($study['Study']['observations']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($study['Study']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($study['Study']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Study'), array('action' => 'edit', $study['Study']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Study'), array('action' => 'delete', $study['Study']['id']), array(), __('Are you sure you want to delete # %s?', $study['Study']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Studies'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Study'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Diagnostics'), array('controller' => 'diagnostics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Diagnostic'), array('controller' => 'diagnostics', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
	</ul>
</div>
