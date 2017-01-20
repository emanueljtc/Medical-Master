<?php echo $this->Html->css('datatables/dataTables.bootstrap'); ?>
<div class="row">
    <div class="col-xs-12">

    <div class="box box-primary">
		<div class="box-header">
			<h3 class="box-title"><?php echo __('Antecedentes Ginecológicos'); ?></h3>
			<div class="box-tools pull-right">
                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-plus"></i> Antecedente Ginecológico'), array('action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>
            </div>
		</div>
			<div class="box-body table-responsive">
                <table id="AntecedentsGinecologycals" class="table table-bordered table-striped">
					<thead>
						<tr>
													<th class="text-center"><?php echo $this->Paginator->sort('N°'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('Paciente'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('N° Historia'); ?></th>
												<th class="text-center"><?php echo __('Acciones'); ?></th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ($antecedentsGinecologycals as $antecedentsGinecologycal): ?>
	<tr>
		<td class="text-center"><?php echo h($antecedentsGinecologycal['AntecedentsGinecologycal']['id']); ?>&nbsp;</td>
		<td class="text-center">
			<?php echo $this->Html->link($antecedentsGinecologycal['Person']['full_name'], array('controller' => 'people', 'action' => 'view', $antecedentsGinecologycal['Person']['id'])); ?>
		</td>
		<td class="text-center">
			<?php echo $this->Html->link($antecedentsGinecologycal['History']['id'], array('controller' => 'histories', 'action' => 'view', $antecedentsGinecologycal['History']['id'])); ?>
		</td>
		<td class="text-center">
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('action' => 'view', $antecedentsGinecologycal['AntecedentsGinecologycal']['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'ver')); ?>
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('action' => 'edit', $antecedentsGinecologycal['AntecedentsGinecologycal']['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'editar')); ?>
			<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('action' => 'delete', $antecedentsGinecologycal['AntecedentsGinecologycal']['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'eliminar'), __('Esta seguro de eliminar # %s?', $antecedentsGinecologycal['AntecedentsGinecologycal']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
					</tbody>
				</table>
			</div><!-- /.table-responsive -->


		</div><!-- /.index -->

	</div><!-- /#page-content .col-sm-9 -->
  <div class="btn-group btn-group-justified col-sm-4">

          <?php echo $this->Html->link(__('Nuevo Diagnostico'), array('controller'=>'diagnostics','action' => 'add'), array('class' => 'btn btn-info')); ?>
          <?php echo $this->Html->link(__('Lista de Pacientes'), array('controller' => 'people', 'action' => 'index'), array('class' => 'btn btn-danger')); ?>
          <?php echo $this->Html->link(__('Nuevo Paciente'), array('controller' => 'people', 'action' => 'add'), array('class' => 'btn btn-primary')); ?>

  </div>
</div><!-- /#page-container .row-fluid -->

<?php
	echo $this->Html->script('jquery.min');
	echo $this->Html->script('plugins/datatables/jquery.dataTables');
	echo $this->Html->script('plugins/datatables/dataTables.bootstrap');
?>
<script type="text/javascript">
    $(function() {
        $("#AntecedentsGinecologycals").dataTable();
    });
</script>
