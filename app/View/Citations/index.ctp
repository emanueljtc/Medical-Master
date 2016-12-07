<?php echo $this->Html->css('datatables/dataTables.bootstrap'); ?>
<div class="row">
    <div class="col-xs-12">

    <div class="box box-primary">
		<div class="box-header">
			<h3 class="box-title"><?php echo __('Citas'); ?></h3>
			<div class="box-tools pull-right">
                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-plus"></i> New Citation'), array('action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>
            </div>
		</div>
			<div class="box-body table-responsive">
                <table id="Citations" class="table table-bordered table-striped">
					<thead>
						<tr>
													<th class="text-center"><?php echo $this->Paginator->sort('N° Cita'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('Paciente'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('Hora'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('Fecha'); ?></th>
                          <th class="text-center"><?php echo $this->Paginator->sort('Estado'); ?></th>
													<!--<th class="text-center"><?php echo $this->Paginator->sort('created'); ?></th>
                           <th class="text-center"><?php echo $this->Paginator->sort('modified'); ?></th> -->
												<th class="text-center"><?php echo __('Acciones'); ?></th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ($citations as $citation): ?>
	<tr>
		<td class="text-center"><?php echo h($citation['Citation']['id']); ?>&nbsp;</td>
		<td class="text-center">
			<?php echo $this->Html->link($citation['Person']['name'], array('controller' => 'people', 'action' => 'view', $citation['Person']['id'])); ?>
		</td>
		<td class="text-center"><?php echo h($citation['Citation']['hour']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($citation['Citation']['date']); ?>&nbsp;</td>
    <td class="text-center">
			<?php echo h($citation['Datecitation']['state']) ?>
		</td>
    <!--<td class="text-center"><?php echo h($citation['Citation']['created']); ?>&nbsp;</td>
		 <td class="text-center"><?php echo h($citation['Citation']['modified']); ?>&nbsp;</td> -->

		<td class="text-center">
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('action' => 'view', $citation['Citation']['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Ver')); ?>
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('action' => 'edit', $citation['Citation']['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Editar')); ?>
			<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('action' => 'delete', $citation['Citation']['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Eliminar'), __('Esta seguro que quiere borrar la cita # %s?', $citation['Citation']['id'])); ?>
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
        $("#Citations").dataTable();
    });
</script>
