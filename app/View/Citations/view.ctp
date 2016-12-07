
<div class="row">
    <div class="col-xs-12">
		
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php  echo __('Cita'); ?></h3>
				<div class="box-tools pull-right">
	                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i> Editar'), array('action' => 'edit', $citation['Citation']['id']), array('class' => 'btn btn-primary', 'escape' => false)); ?>
	            </div>
			</div>
			
			<div class="box-body table-responsive">
                <table id="Citations" class="table table-bordered table-striped">
					<tbody>
						<tr>		<td><strong><?php echo __('Nº Cita'); ?></strong></td>
		<td>
			<?php echo h($citation['Citation']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Persona'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($citation['Person']['name'], array('controller' => 'people', 'action' => 'view', $citation['Person']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Hora'); ?></strong></td>
		<td>
			<?php echo h($citation['Citation']['hour']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Fecha'); ?></strong></td>
		<td>
			<?php echo h($citation['Citation']['date']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Creado'); ?></strong></td>
		<td>
			<?php echo h($citation['Citation']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modificado'); ?></strong></td>
		<td>
			<?php echo h($citation['Citation']['modified']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Fecha de Cita'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($citation['Datecitation']['id'], array('controller' => 'datecitations', 'action' => 'view', $citation['Datecitation']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

					
			<div class="box box-primary">
				<div class="box-header">
					<h3 class="box-title"><?php echo __('Cargas Relacionadas'); ?></h3>
					<div class="box-tools pull-right">
						<?php echo $this->Html->link('<i class="glyphicon glyphicon-plus"></i> '.__('Nueva Carga'), array('controller' => 'charges', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>					</div><!-- /.actions -->
				</div>
				<?php if (!empty($citation['Charge'])): ?>
					
					<div class="box-body table-responsive">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
											<th class="text-center"><?php echo __('Nº Pago'); ?></th>
		<th class="text-center"><?php echo __('Costo Total'); ?></th>
		<th class="text-center"><?php echo __('Persona'); ?></th>
		<th class="text-center"><?php echo __('Cita'); ?></th>
		<th class="text-center"><?php echo __('Estado de Carga'); ?></th>
		<th class="text-center"><?php echo __('Tipo de pago'); ?></th>
		<th class="text-center"><?php echo __('Observaciones'); ?></th>
		<th class="text-center"><?php echo __('Creado'); ?></th>
		<th class="text-center"><?php echo __('Modificado'); ?></th>
									
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($citation['Charge'] as $charge): ?>
		<tr>
			<td class="text-center"><?php echo $charge['id']; ?></td>
			<td class="text-center"><?php echo $charge['total_cost']; ?></td>
			<td class="text-center"><?php echo $charge['person_id']; ?></td>
			<td class="text-center"><?php echo $charge['citation_id']; ?></td>
			<td class="text-center"><?php echo $charge['state_charge']; ?></td>
			<td class="text-center"><?php echo $charge['typepayment_id']; ?></td>
			<td class="text-center"><?php echo $charge['observations']; ?></td>
			<td class="text-center"><?php echo $charge['created']; ?></td>
			<td class="text-center"><?php echo $charge['modified']; ?></td>
			
		</tr>
	<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->
					
				<?php endif; ?>

				
				
			</div><!-- /.related -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->

