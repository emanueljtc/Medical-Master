<?php echo $this->Html->css('datatables/dataTables.bootstrap'); ?>
<div class="row">
    <div class="col-xs-12">

    <div class="box box-primary">
		<div class="box-header">

			<h3 class="box-title"><?php echo __('Diagnosticos'); ?></h3>
			<div class="box-tools pull-right">
              <?php  if($current_user['group_id'] == '1' and '3' ): ?>
                  <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-plus"></i> Nuevo Diagnostico'), array('action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>
              <?php endif; ?>
      </div>
		</div>
			<div class="box-body table-responsive">
                <table id="Diagnostics" class="table table-bordered table-striped">
					<thead>
						<tr>

													<th class="text-center"><?php echo $this->Paginator->sort('N° de Diagnostico'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('Diagnostico'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('Paciente'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('N° Historia'); ?></th>
												<th class="text-center"><?php echo __('Acciones'); ?></th>

						</tr>
					</thead>
					<tbody>
					<?php foreach ($diagnostics as $diagnostic): ?>
	<tr>
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['id']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['diagnostico']); ?>&nbsp;</td>
		<td class="text-center">
			<?php echo $this->Html->link($diagnostic['Person']['name'], array('controller' => 'people', 'action' => 'view', $diagnostic['Person']['id'])); ?>
		</td>
		<td class="text-center">
			<?php echo $this->Html->link($diagnostic['History']['id'], array('controller' => 'histories', 'action' => 'view', $diagnostic['History']['id'])); ?>
		</td>
		<td class="text-center">
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('action' => 'view', $diagnostic['Diagnostic']['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Vista')); ?>
      <?php  if($current_user['group_id'] == '1' and '3' ): ?>
  			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('action' => 'edit', $diagnostic['Diagnostic']['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Editar')); ?>
  			<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('action' => 'delete', $diagnostic['Diagnostic']['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Eliminar'), __('Esta seguro de eliminar el diagnostico # %s?', $diagnostic['Diagnostic']['id'])); ?>
      <?php endif; ?>

    </td>
	</tr>
<?php endforeach; ?>
					</tbody>
				</table>
			</div><!-- /.table-responsive -->


		</div><!-- /.index -->

	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->
<div class="btn-group btn-group-justified col-sm-4">

  <?php echo $this->Html->link(__('Nuevo Antecedente'), array('controller'=>'antecedents','action' => 'add'), array('class' => 'btn btn-info')); ?>
  <?php echo $this->Html->link(__('Lista de Antecedentes'), array('controller'=>'antecedents','action' => 'index'), array('class' => 'btn btn-danger')); ?>
  <?php echo $this->Html->link(__('Nueva Historia'), array('controller' => 'histories', 'action' => 'add'), array('class' => 'btn btn-primary')); ?>

</div>
<?php
	echo $this->Html->script('jquery.min');
	echo $this->Html->script('plugins/datatables/jquery.dataTables');
	echo $this->Html->script('plugins/datatables/dataTables.bootstrap');
?>
<script type="text/javascript">
    $(function() {
        $("#Diagnostics").dataTable();
    });
</script>
