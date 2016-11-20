<div class="oncologicals form">
<?php echo $this->Form->create('Oncological'); ?>
	<fieldset>
		<legend><?php echo __('Add Oncological'); ?></legend>
	<?php
		echo $this->Form->input('size_boobs');
		echo $this->Form->input('form_boobs');
		echo $this->Form->input('symmetry_boobs');
		echo $this->Form->input('skin_boobs');
		echo $this->Form->input('cap_boobs');
		echo $this->Form->input('pussy');
		echo $this->Form->input('neck_pussy');
		echo $this->Form->input('coloscopia');
		echo $this->Form->input('ano_ straight');
		echo $this->Form->input('head_neck');
		echo $this->Form->input('touch_tumor');
		echo $this->Form->input('form_tumor');
		echo $this->Form->input('surface_tumor');
		echo $this->Form->input('contour_tumor');
		echo $this->Form->input('axis_tumor');
		echo $this->Form->input('consistency_tumor');
		echo $this->Form->input('laringoscopia');
		echo $this->Form->input('menarguia');
		echo $this->Form->input('reglas');
		echo $this->Form->input('prs');
		echo $this->Form->input('companion_sexual');
		echo $this->Form->input('distance_cap');
		echo $this->Form->input('gestas');
		echo $this->Form->input('rsi');
		echo $this->Form->input('paras');
		echo $this->Form->input('abdomen');
		echo $this->Form->input('misbirth');
		echo $this->Form->input('gynecological_vulva');
		echo $this->Form->input('cesareans');
		echo $this->Form->input('age_birth_one');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Oncologicals'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Dignostics Specialties'), array('controller' => 'dignostics_specialties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dignostics Specialty'), array('controller' => 'dignostics_specialties', 'action' => 'add')); ?> </li>
	</ul>
</div>
