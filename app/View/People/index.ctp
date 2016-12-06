<?php echo $this->Html->css('datatables/dataTables.bootstrap'); ?>
<div class="row">
    <div class="col-xs-12">

    <div class="box box-primary">
		<div class="box-header">
			<h3 class="box-title"><?php echo __('Pacientes'); ?></h3>
			<div class="box-tools pull-right">
                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-plus"></i> Nuevo Paciente'), array('action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>
            </div>
		</div>
			<div class="box-body table-responsive">
                <table id="People" class="table table-bordered table-striped">
					<thead>
						<tr>
													<!-- <th class="text-center"><?php echo $this->Paginator->sort('id'); ?></th> -->
													<th class="text-center"><?php echo $this->Paginator->sort('Nombres'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('Apellidos'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('Cedula'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('Genero'); ?></th>
													<!-- <th class="text-center"><?php echo $this->Paginator->sort('address'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('phone'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('email'); ?></th> -->
													<th class="text-center"><?php echo $this->Paginator->sort('Nacionalidad'); ?></th>
													<!-- <th class="text-center"><?php echo $this->Paginator->sort('pass_app'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('token'); ?></th> -->
												<th class="text-center"><?php echo __('Acciones'); ?></th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ($people as $person): ?>
	<tr>
		<!-- <td class="text-center"><?php echo h($person['Person']['id']); ?>&nbsp;</td> -->
		<td class="text-center"><?php echo h($person['Person']['name']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($person['Person']['last_name']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($person['Person']['dni']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($person['Person']['gender']); ?>&nbsp;</td>
		<!-- <td class="text-center"><?php echo h($person['Person']['address']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($person['Person']['phone']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($person['Person']['email']); ?>&nbsp;</td> -->
		<td class="text-center">
			<?php echo $this->Html->link($person['Nationality']['nacionalidad'], array('controller' => 'nationalities', 'action' => 'view', $person['Nationality']['id'])); ?>
		</td>
		<!-- <td class="text-center"><?php echo h($person['Person']['pass_app']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($person['Person']['token']); ?>&nbsp;</td> -->
		<td class="text-center">
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('action' => 'view', $person['Person']['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Ver')); ?>
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('action' => 'edit', $person['Person']['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Editar')); ?>
			<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('action' => 'delete', $person['Person']['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Eliminar'), __('Are you sure you want to delete # %s?', $person['Person']['id'])); ?>
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
        $("#People").dataTable();
    });
</script>
