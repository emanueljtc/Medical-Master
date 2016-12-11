
<div class="row">
    <div class="col-xs-12">

		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php  echo __('Estado de Citas'); ?></h3>
				<div class="box-tools pull-right">
	                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i> Editar'), array('action' => 'edit', $datecitation['Datecitation']['id']), array('class' => 'btn btn-primary', 'escape' => false)); ?>
	            </div>
			</div>

			<div class="box-body table-responsive">
                <table id="Datecitations" class="table table-bordered table-striped">
					<tbody>
						<tr>		<td><strong><?php echo __('N° Citas'); ?></strong></td>
		<td>
			<?php echo h($datecitation['Datecitation']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Estado'); ?></strong></td>
		<td>
			<?php echo h($datecitation['Datecitation']['state']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->

		</div><!-- /.view -->


			<div class="box box-primary">
				<div class="box-header">
					<h3 class="box-title"><?php echo __('Cita Relacionada'); ?></h3>
					<div class="box-tools pull-right">
						<?php echo $this->Html->link('<i class="glyphicon glyphicon-plus"></i> '.__('Nueva Cita'), array('controller' => 'citations', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>					</div><!-- /.actions -->
				</div>
				<?php if (!empty($datecitation['Citation'])): ?>

					<div class="box-body table-responsive">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
											<th class="text-center"><?php echo __('N° Cita'); ?></th>

                  		<th class="text-center"><?php echo __('Fecha Proxima Cita'); ?></th>
                  		<th class="text-center"><?php echo __('Creado'); ?></th>
                  		<th class="text-center"><?php echo __('Modificado'); ?></th>
									<th class="text-center"><?php echo __('Acciones'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($datecitation['Citation'] as $citation): ?>
		<tr>
			<td class="text-center"><?php echo $citation['id']; ?></td>
			<td class="text-center"><?php echo $citation['date_hour']; ?></td>
			<td class="text-center"><?php echo $citation['created']; ?></td>
			<td class="text-center"><?php echo $citation['modified']; ?></td>
			<td class="text-center">
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('controller' => 'citations', 'action' => 'view', $citation['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Ver')); ?>
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('controller' => 'citations', 'action' => 'edit', $citation['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Editar')); ?>
				<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('controller' => 'citations', 'action' => 'delete', $citation['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Eliminar'), __('Esta seguro de eliminar la cita # %s?', $citation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->

				<?php endif; ?>



			</div><!-- /.related -->


	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
