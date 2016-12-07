<?php echo $this->Html->css('datatables/dataTables.bootstrap'); ?>
<div class="row">
    <div class="col-xs-12">

    <div class="box box-primary">
		<div class="box-header">
			<h3 class="box-title"><?php echo __('Charges'); ?></h3>
			<div class="box-tools pull-right">
                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-plus"></i> New Charge'), array('action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>
            </div>
		</div>	
			<div class="box-body table-responsive">
                <table id="Charges" class="table table-bordered table-striped">
					<thead>
						<tr>
													<th class="text-center"><?php echo $this->Paginator->sort('NºPago'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('costo Total'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('Persona'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('cita'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('Estado de Carga'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('Tipo de pago'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('Observaciones'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('Creado'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('Modificado'); ?></th>
												<th class="text-center"><?php echo __('Acciones'); ?></th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ($charges as $charge): ?>
	<tr>
		<td class="text-center"><?php echo h($charge['Charge']['id']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($charge['Charge']['total_cost']); ?>&nbsp;</td>
		<td class="text-center">
			<?php echo $this->Html->link($charge['Person']['name'], array('controller' => 'people', 'action' => 'view', $charge['Person']['id'])); ?>
		</td>
		<td class="text-center">
			<?php echo $this->Html->link($charge['Citation']['id'], array('controller' => 'citations', 'action' => 'view', $charge['Citation']['id'])); ?>
		</td>
		<td class="text-center"><?php echo h($charge['Charge']['state_charge']); ?>&nbsp;</td>
		<td class="text-center">
			<?php echo h($charge['Typepayment']['type_payment']); ?>
		</td>
		<td class="text-center"><?php echo h($charge['Charge']['observations']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($charge['Charge']['created']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($charge['Charge']['modified']); ?>&nbsp;</td>
		<td class="text-center">
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('action' => 'view', $charge['Charge']['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Ver')); ?>
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('action' => 'edit', $charge['Charge']['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Editar')); ?>
			<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('action' => 'delete', $charge['Charge']['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Eliminar'), __('Esta seguro que desea borrar el Pago Nº# %s?', $charge['Charge']['id'])); ?>
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
        $("#Charges").dataTable();
    });
</script>