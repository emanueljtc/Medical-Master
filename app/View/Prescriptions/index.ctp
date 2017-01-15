<?php echo $this->Html->css('datatables/dataTables.bootstrap'); ?>
<div class="row">
    <div class="col-xs-12">

    <div class="box box-primary">
		<div class="box-header">
			<h3 class="box-title"><?php echo __('Recipes'); ?></h3>
			<div class="box-tools pull-right">
              <?php  if($current_user['group_id'] == '1' and '3' ): ?>
                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-plus"></i> Nuevo Recipe'), array('action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>
              <?php endif; ?>
      </div>
		</div>
			<div class="box-body table-responsive">
                <table id="Prescriptions" class="table table-bordered table-striped">
					<thead>
						<tr>
													<th class="text-center"><?php echo $this->Paginator->sort('Nº'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('Paciente'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('Nº Diagnostico'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('Estado'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('Fecha'); ?></th>

												<th class="text-center"><?php echo __('Acciones'); ?></th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ($prescriptions as $prescription): ?>
	<tr>
		<td class="text-center"><?php echo h($prescription['Prescription']['id']); ?>&nbsp;</td>
		<td class="text-center">
			<?php echo $this->Html->link($prescription['Person']['full_name'], array('controller' => 'people', 'action' => 'view', $prescription['Person']['id'])); ?>
		</td>
		<td class="text-center">
			<?php echo $this->Html->link($prescription['Diagnostic']['id'], array('controller' => 'diagnostics', 'action' => 'view', $prescription['Diagnostic']['id'])); ?>
		</td>
		<td class="text-center"><?php echo h($prescription['Prescription']['status_treament']); ?>&nbsp;</td>

		<td class="text-center"><?php echo h($prescription['Prescription']['modified']); ?>&nbsp;</td>
		<td class="text-center">
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('action' => 'view', $prescription['Prescription']['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Ver')); ?>
      <?php  if($current_user['group_id'] == '1' and '3' ): ?>
			  <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('action' => 'edit', $prescription['Prescription']['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Editar')); ?>
        <?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('action' => 'delete', $prescription['Prescription']['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Eliminar'), __('Are you sure you want to delete # %s?', $prescription['Prescription']['id'])); ?>
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

<?php
	echo $this->Html->script('jquery.min');
	echo $this->Html->script('plugins/datatables/jquery.dataTables');
	echo $this->Html->script('plugins/datatables/dataTables.bootstrap');
?>
<script type="text/javascript">
    $(function() {
        $("#Prescriptions").dataTable();
    });
</script>
