<?php echo $this->Html->css('datatables/dataTables.bootstrap'); ?>
<div class="row">
    <div class="col-xs-12">

    <div class="box box-primary">
		<div class="box-header">
			<h3 class="box-title"><?php echo __('Tratamientos'); ?></h3>
			<div class="box-tools pull-right">
                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-plus"></i> Nuevo Tratamiento'), array('action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>
            </div>
		</div>
			<div class="box-body table-responsive">
                <table id="Treatments" class="table table-bordered table-striped">
					<thead>
						<tr>
													<th class="text-center"><?php echo $this->Paginator->sort('N° Tratamiento'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('Paciente'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('Diagnostico'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('Estado'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('Recipe'); ?></th>
													<!-- <th class="text-center"><?php echo $this->Paginator->sort('observations_prescription'); ?></th> -->
													<th class="text-center"><?php echo $this->Paginator->sort('Creado'); ?></th>
													<!-- <th class="text-center"><?php echo $this->Paginator->sort('modified'); ?></th> -->
												<th class="text-center"><?php echo __('Acciones'); ?></th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ($treatments as $treatment): ?>
	<tr>
		<td class="text-center"><?php echo h($treatment['Treatment']['id']); ?>&nbsp;</td>
		<td class="text-center">
			<?php echo $this->Html->link($treatment['Person']['full_name'], array('controller' => 'people', 'action' => 'view', $treatment['Person']['id'])); ?>
		</td>
		<td class="text-center">
			<?php echo $this->Html->link($treatment['Diagnostic']['diagnostico'], array('controller' => 'diagnostics', 'action' => 'view', $treatment['Diagnostic']['id'])); ?>
		</td>
		<td class="text-center"><?php echo h($treatment['Treatment']['status_treament']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($treatment['Treatment']['prescription']); ?>&nbsp;</td>
		<!-- <td class="text-center"><?php echo h($treatment['Treatment']['observations_prescription']); ?>&nbsp;</td> -->
		<td class="text-center"><?php echo h($treatment['Treatment']['created']); ?>&nbsp;</td>
		<!-- <td class="text-center"><?php echo h($treatment['Treatment']['modified']); ?>&nbsp;</td> -->
		<td class="text-center">
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('action' => 'view', $treatment['Treatment']['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'view')); ?>
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('action' => 'edit', $treatment['Treatment']['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'edit')); ?>
      <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('action' => 'view', $treatment['Treatment']['id'], 'ext' => 'pdf'), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'view')); ?>

			<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('action' => 'delete', $treatment['Treatment']['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'delete'), __('Are you sure you want to delete # %s?', $treatment['Treatment']['id'])); ?>
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
        $("#Treatments").dataTable();
    });
</script>
