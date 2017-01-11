
<div class="row">
    <div class="col-xs-12">

		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php  echo __('Estudio'); ?></h3>
				<div class="box-tools pull-right">
	                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i> Editar'), array('action' => 'edit', $study['Study']['id']), array('class' => 'btn btn-primary', 'escape' => false)); ?>
	      </div>

			</div>

			<div class="box-body table-responsive">
                <table id="Studies" class="table table-bordered table-striped">
					<tbody>
						<tr>		<td><strong><?php echo __('N°'); ?></strong></td>
		<td>
			<?php echo h($study['Study']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Diagnostico'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($study['Diagnostic']['diagnostico'], array('controller' => 'diagnostics', 'action' => 'view', $study['Diagnostic']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Paciente'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($study['Person']['full_name'], array('controller' => 'people', 'action' => 'view', $study['Person']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Estudio'); ?></strong></td>
		<td>
			<?php echo h($study['Study']['name_studie']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Examen Funcional'); ?></strong></td>
		<td>
			<?php echo h($study['Study']['functional_exam']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Examen Fisico'); ?></strong></td>
		<td>
			<?php echo h($study['Study']['physical_exam']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Observaciones'); ?></strong></td>
		<td>
			<?php echo h($study['Study']['observations']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
		<td>
			<?php echo h($study['Study']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modified'); ?></strong></td>
		<td>
			<?php echo h($study['Study']['modified']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->

		</div><!-- /.view -->


	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
