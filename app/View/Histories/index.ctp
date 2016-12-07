<?php echo $this->Html->css('datatables/dataTables.bootstrap'); ?>
<div class="row">
    <div class="col-xs-12">

    <div class="box box-primary">
		<div class="box-header">
			<h3 class="box-title"><?php echo __('Historias'); ?></h3>
			<div class="box-tools pull-right">
                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-plus"></i> Nueva Historia'), array('action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>
            </div>
		</div>
			<div class="box-body table-responsive">
                <table id="Histories" class="table table-bordered table-striped">
					<thead>
						<tr>
													<th class="text-center"><?php echo $this->Paginator->sort('N° Historia'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('Paciente'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('N° Antecedente'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('Edad'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('Tamaño'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('Peso'); ?></th>
												<th class="text-center"><?php echo __('Acciones'); ?></th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ($histories as $history): ?>
	<tr>
		<td class="text-center"><?php echo h($history['History']['id']); ?>&nbsp;</td>
		<td class="text-center">
			<?php echo $this->Html->link($history['Person']['full_name'], array('controller' => 'people', 'action' => 'view', $history['Person']['id'])); ?>
		</td>
		<td class="text-center">
			<?php echo $this->Html->link($history['Antecedent']['id'], array('controller' => 'antecedents', 'action' => 'view', $history['Antecedent']['id'])); ?>
		</td>
		<td class="text-center"><?php echo h($history['History']['age']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($history['History']['weight']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($history['History']['height']); ?>&nbsp;</td>
		<td class="text-center">
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('action' => 'view', $history['History']['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Ver')); ?>
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('action' => 'edit', $history['History']['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Editar')); ?>
			<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('action' => 'delete', $history['History']['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Eliminar'), __('Estas Seguro de Eliminar la Historia # %s?', $history['History']['id'])); ?>
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
        $("#Histories").dataTable();
    });
</script>
