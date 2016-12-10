
<div class="row">
    <div class="col-xs-12">

		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php  echo __('Vista Tratamiento'); ?></h3>
				<div class="box-tools pull-right">
	                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i> Editar'), array('action' => 'edit', $treatment['Treatment']['id']), array('class' => 'btn btn-primary', 'escape' => false)); ?>
	            </div>
			</div>

			<div class="box-body table-responsive">
                <table id="Treatments" class="table table-bordered table-striped">
					<tbody>
						<tr>		<td><strong><?php echo __('N° Tratamiento'); ?></strong></td>
		<td>
			<?php echo h($treatment['Treatment']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Paciente'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($treatment['Person']['full_name'], array('controller' => 'people', 'action' => 'view', $treatment['Person']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Diagnostico'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($treatment['Diagnostic']['diagnostico'], array('controller' => 'diagnostics', 'action' => 'view', $treatment['Diagnostic']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Estado'); ?></strong></td>
		<td>
			<?php echo h($treatment['Treatment']['status_treament']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Recipe'); ?></strong></td>
		<td>
			<?php echo h($treatment['Treatment']['prescription']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Observaciones'); ?></strong></td>
		<td>
			<?php echo h($treatment['Treatment']['observations_prescription']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Creado'); ?></strong></td>
		<td>
			<?php echo h($treatment['Treatment']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modificado'); ?></strong></td>
		<td>
			<?php echo h($treatment['Treatment']['modified']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->

		</div><!-- /.view -->


			<div class="box box-primary">
				<div class="box-header">
					<h3 class="box-title"><?php echo __('Indicacion'); ?></h3>
					<div class="box-tools pull-right">
						<?php echo $this->Html->link('<i class="glyphicon glyphicon-plus"></i> '.__('Nueva Indicacion'), array('controller' => 'indications', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>					</div><!-- /.actions -->
				</div>
				<?php if (!empty($treatment['Indication'])): ?>

					<div class="box-body table-responsive">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
											<th class="text-center"><?php echo __('N°'); ?></th>
                  		<th class="text-center"><?php echo __('Indication'); ?></th>
									<th class="text-center"><?php echo __('Acciones'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($treatment['Indication'] as $indication): ?>
		<tr>
			<td class="text-center"><?php echo $indication['id']; ?></td>
			<td class="text-center"><?php echo $indication['indication']; ?></td>
			<td class="text-center">
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('controller' => 'indications', 'action' => 'view', $indication['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Ver')); ?>
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('controller' => 'indications', 'action' => 'edit', $indication['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Editar')); ?>
				<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('controller' => 'indications', 'action' => 'delete', $indication['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Eliminar'), __('Esta seguro de eliminar la indicacion # %s?', $indication['id'])); ?>
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
