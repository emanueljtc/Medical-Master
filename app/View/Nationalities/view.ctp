
<div class="row">
    <div class="col-xs-12">

		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php  echo __('Vista Nacionalidad'); ?></h3>
				<div class="box-tools pull-right">
	                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i> Editar'), array('action' => 'edit', $nationality['Nationality']['id']), array('class' => 'btn btn-primary', 'escape' => false)); ?>
	            </div>
			</div>

			<div class="box-body table-responsive">
                <table id="Nationalities" class="table table-bordered table-striped">
					<tbody>
						<tr>		<td><strong><?php echo __('N° Nacionalidad'); ?></strong></td>
		<td>
			<?php echo h($nationality['Nationality']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Nacionalidad'); ?></strong></td>
		<td>
			<?php echo h($nationality['Nationality']['nacionalidad']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->

		</div><!-- /.view -->

	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
<div class="btn-group btn-group-justified col-sm-4">

  <?php echo $this->Html->link(__('Nuevo Paciente'), array('controller'=>'people','action' => 'add'), array('class' => 'btn btn-info')); ?>
  <?php echo $this->Html->link(__('Lista de Nacionalidades'), array('action' => 'index'), array('class' => 'btn btn-danger')); ?>
  <?php echo $this->Html->link(__('Nueva Nacionalidad'), array('action' => 'add'), array('class' => 'btn btn-primary')); ?>

</div>
