<?php echo $this->Html->css('datatables/dataTables.bootstrap'); ?>
<div class="row">
    <div class="col-xs-12">

    <div class="box box-primary">
		<div class="box-header">
			<h3 class="box-title"><?php echo __('Usuario'); ?></h3>
			<div class="box-tools pull-right">
                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-plus"></i> Nuevo usuario'), array('action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>
            </div>
		</div>
			<div class="box-body table-responsive">
                <table id="Users" class="table table-bordered table-striped">
					<thead>
						<tr>
													<!-- <th class="text-center"><?php echo $this->Paginator->sort('Foto'); ?></th> -->
													<th class="text-center"><?php echo $this->Paginator->sort('Nombre'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('Usuario'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('Grupo'); ?></th>
													<!-- <th class="text-center"><?php echo $this->Paginator->sort('created'); ?></th> -->
													<!-- <th class="text-center"><?php echo $this->Paginator->sort('modified'); ?></th> -->
												<th class="text-center"><?php echo __('Acciones'); ?></th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ($users as $user): ?>
	<tr>
    <!-- <td><?php echo $this->Html->image('../files/user/foto/'. $user['User']['foto_dir'].'/'.'thumb_'.$user['User']['foto']); ?></td> -->
		<td class="text-center"><?php echo h($user['User']['full_name']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($user['User']['username']); ?>&nbsp;</td>
		<td class="text-center">
			<?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?>
		</td>
		<!-- <td class="text-center"><?php echo h($user['User']['created']); ?>&nbsp;</td> -->
		<!-- <td class="text-center"><?php echo h($user['User']['modified']); ?>&nbsp;</td> -->
		<td class="text-center">
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('action' => 'view', $user['User']['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Ver')); ?>
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('action' => 'edit', $user['User']['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Editar')); ?>
			<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('action' => 'delete', $user['User']['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Eliminar'), __('Esta Seguro de Eliminar el Usuario # %s?', $user['User']['id'])); ?>
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
        $("#Users").dataTable();
    });
</script>
