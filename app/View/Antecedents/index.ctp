<?php echo $this->Html->css('datatables/dataTables.bootstrap'); ?>
<div class="row">
    <div class="col-xs-12">

    <div class="box box-primary">
		<div class="box-header">
			<h3 class="box-title"><?php echo __('Antecedentes'); ?></h3>
			<div class="box-tools pull-right">
                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-plus"></i> Nuevo Antecedente'), array('action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>
            </div>
		</div>
			<div class="box-body table-responsive">
                <table id="Antecedents" class="table table-bordered table-striped">
					<thead>
						<tr>
													<th class="text-center"><?php echo $this->Paginator->sort('N° Antecedente'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('Paciente'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('Antecedente'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('Origen'); ?></th>
													<!-- <th class="text-center"><?php echo $this->Paginator->sort('time_ suffering'); ?></th> -->
													<!-- <th class="text-center"><?php echo $this->Paginator->sort('family'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('personals_doctors'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('surgicals'); ?></th> -->
													<th class="text-center"><?php echo $this->Paginator->sort('created'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('modified'); ?></th>
												<th class="text-center"><?php echo __('Acciones'); ?></th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ($antecedents as $antecedent): ?>
	<tr>
		<td class="text-center"><?php echo h($antecedent['Antecedent']['id']); ?>&nbsp;</td>
		<td class="text-center">
			<?php echo $this->Html->link($antecedent['Person']['name'], array('controller' => 'people', 'action' => 'view', $antecedent['Person']['id'])); ?>
		</td>
		<td class="text-center"><?php echo h($antecedent['Antecedent']['name_antecendent']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($antecedent['Antecedent']['origin']); ?>&nbsp;</td>
		<!-- <td class="text-center"><?php echo h($antecedent['Antecedent']['time_ suffering']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($antecedent['Antecedent']['family']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($antecedent['Antecedent']['personals_doctors']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($antecedent['Antecedent']['surgicals']); ?>&nbsp;</td> -->
		<td class="text-center"><?php echo h($antecedent['Antecedent']['created']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($antecedent['Antecedent']['modified']); ?>&nbsp;</td>
		<td class="text-center">
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('action' => 'view', $antecedent['Antecedent']['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Ver')); ?>
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('action' => 'edit', $antecedent['Antecedent']['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Editar')); ?>
			<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('action' => 'delete', $antecedent['Antecedent']['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Eliminar'), __('Are you sure you want to delete # %s?', $antecedent['Antecedent']['id'])); ?>
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
        $("#Antecedents").dataTable();
    });
</script>
