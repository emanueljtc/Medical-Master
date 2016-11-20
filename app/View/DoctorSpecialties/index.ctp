<div class="doctorSpecialties index">
	<h2><?php echo __('Doctor Specialties'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('rol_id'); ?></th>
			<th><?php echo $this->Paginator->sort('specialtie_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($doctorSpecialties as $doctorSpecialty): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($doctorSpecialty['Rol']['rol'], array('controller' => 'rols', 'action' => 'view', $doctorSpecialty['Rol']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($doctorSpecialty['Specialtie']['id'], array('controller' => 'specialties', 'action' => 'view', $doctorSpecialty['Specialtie']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $doctorSpecialty['DoctorSpecialty']['specialtie_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $doctorSpecialty['DoctorSpecialty']['specialtie_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $doctorSpecialty['DoctorSpecialty']['specialtie_id']), array(), __('Are you sure you want to delete # %s?', $doctorSpecialty['DoctorSpecialty']['specialtie_id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Doctor Specialty'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Rols'), array('controller' => 'rols', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rol'), array('controller' => 'rols', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Specialties'), array('controller' => 'specialties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Specialtie'), array('controller' => 'specialties', 'action' => 'add')); ?> </li>
	</ul>
</div>
