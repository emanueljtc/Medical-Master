<?php echo $this->Html->css('datatables/dataTables.bootstrap'); ?>
<div class="row">
    <div class="col-xs-12">

    <div class="box box-primary">
		<div class="box-header">
			<h3 class="box-title"><?php echo __('Nacionalidades'); ?></h3>
			<div class="box-tools pull-right">
                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-plus"></i> Nueva Nacionalidad'), array('action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>
            </div>
		</div>
			<div class="box-body table-responsive">
                <table id="Nationalities" class="table table-bordered table-striped">
					<thead>
						<tr>
													<!-- <th class="text-center"><?php echo $this->Paginator->sort('id'); ?></th> -->
													<th class="text-center"><?php echo $this->Paginator->sort('nacionalidad'); ?></th>
												  <th class="text-center"><?php echo __('Acciones'); ?></th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ($nationalities as $nationality): ?>
	<tr>
		<!-- <td class="text-center"><?php echo h($nationality['Nationality']['id']); ?>&nbsp;</td> -->
		<td class="text-center"><?php echo h($nationality['Nationality']['nacionalidad']); ?>&nbsp;</td>
		<td class="text-center">
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('action' => 'view', $nationality['Nationality']['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Ver')); ?>
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('action' => 'edit', $nationality['Nationality']['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Editar')); ?>
			<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('action' => 'delete', $nationality['Nationality']['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Eliminar'), __('Esta seguro de eliminar la nacionalidad # %s?', $nationality['Nationality']['id'])); ?>
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
        $("#Nationalities").dataTable();
    });
</script>
