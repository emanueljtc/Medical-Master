
<div class="row">
    <div class="col-xs-12">

		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php  echo __('Recipe'); ?></h3>
				<div class="box-tools pull-right">
	                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i> Editar'), array('action' => 'edit', $prescription['Prescription']['id']), array('class' => 'btn btn-primary', 'escape' => false)); ?>
	            </div>
			</div>


			<div class="box-body table-responsive">
                <table id="Prescriptions" class="table table-bordered table-striped">
					<tbody>
						<tr>		<td><strong><?php echo __('Nº'); ?></strong></td>
		<td>
			<?php echo h($prescription['Prescription']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Paciente'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($prescription['Person']['full_name'], array('controller' => 'people', 'action' => 'view', $prescription['Person']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Diagnostico'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($prescription['Diagnostic']['id'], array('controller' => 'diagnostics', 'action' => 'view', $prescription['Diagnostic']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Estado'); ?></strong></td>
		<td>
			<?php echo h($prescription['Prescription']['status_treament']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Recipe'); ?></strong></td>
		<td>
			<?php echo h($prescription['Prescription']['prescription']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Indicaciones'); ?></strong></td>
		<td>
			<?php echo h($prescription['Prescription']['indications']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Creado'); ?></strong></td>
		<td>
			<?php echo h($prescription['Prescription']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modificado'); ?></strong></td>
		<td>
			<?php echo h($prescription['Prescription']['modified']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->

		</div><!-- /.view -->


	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->

<div class="btn-group btn-group-justified col-sm-4">

  <?php echo $this->Html->link(__('Nuevo Diagnostico'), array('controller'=>'diagnostics','action' => 'add'), array('class' => 'btn btn-info')); ?>
  <?php echo $this->Html->link(__('Lista de Recipes'), array('action' => 'index'), array('class' => 'btn btn-danger')); ?>
  <?php echo $this->Html->link(__('Imprimir'), array('action' => 'view', $prescription['Prescription']['id'], 'ext' => 'pdf' ), array('class' => 'btn btn-primary')); ?>

</div>
