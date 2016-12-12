
<div class="row">
    <div class="col-xs-12">

		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php  echo __('Vista Historia'); ?></h3>
				<div class="box-tools pull-right">
	                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i> Edit'), array('action' => 'edit', $history['History']['id']), array('class' => 'btn btn-primary', 'escape' => false)); ?>
	            </div>
			</div>

			<div class="box-body table-responsive">
                <table id="Histories" class="table table-bordered table-striped">
					<tbody>
						<tr>		<td><strong><?php echo __('N° Historia'); ?></strong></td>
		<td>
			<?php echo h($history['History']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Paciente'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($history['Person']['full_name'], array('controller' => 'people', 'action' => 'view', $history['Person']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Fecha de Nacimiento'); ?></strong></td>
		<td>
			<?php echo h($history['History']['born_date']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Edad'); ?></strong></td>
		<td>
			<?php echo h($history['History']['age']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Peso'); ?></strong></td>
		<td>
			<?php echo h($history['History']['weight']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Tamaño'); ?></strong></td>
		<td>
			<?php echo h($history['History']['height']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->

		</div><!-- /.view -->


			<div class="box box-primary">
				<div class="box-header">
					<h3 class="box-title"><?php echo __('Diagnostico Relacionados'); ?></h3>
					<div class="box-tools pull-right">
						<?php echo $this->Html->link('<i class="glyphicon glyphicon-plus"></i> '.__('New Diagnostic'), array('controller' => 'diagnostics', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>					</div><!-- /.actions -->
				</div>
				<?php if (!empty($history['Diagnostic'])): ?>

					<div class="box-body table-responsive">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
											<th class="text-center"><?php echo __('N° Diagnostico'); ?></th>
                  		<th class="text-center"><?php echo __('Diagnostico'); ?></th>

									<th class="text-center"><?php echo __('Acciones'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($history['Diagnostic'] as $diagnostic): ?>
		<tr>
			<td class="text-center"><?php echo $diagnostic['id']; ?></td>

			<td class="text-center"><?php echo $diagnostic['diagnostico']; ?></td>
			<td class="text-center">
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('controller' => 'diagnostics', 'action' => 'view', $diagnostic['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Ver')); ?>
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('controller' => 'diagnostics', 'action' => 'edit', $diagnostic['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Editar')); ?>
				<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('controller' => 'diagnostics', 'action' => 'delete', $diagnostic['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Eliminar'), __('Esta usted seguro de eliminar el diagnostico # %s?', $diagnostic['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->

				<?php endif; ?>



			</div><!-- /.related -->


			<div class="box box-primary">
				<div class="box-header">
					<h3 class="box-title"><?php echo __('Antecedentes Relacionados'); ?></h3>
					<div class="box-tools pull-right">
						<?php echo $this->Html->link('<i class="glyphicon glyphicon-plus"></i> '.__('New Antecedent'), array('controller' => 'antecedents', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>					</div><!-- /.actions -->
				</div>
				<?php if (!empty($history['Antecedent'])): ?>

					<div class="box-body table-responsive">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
											<th class="text-center"><?php echo __('N°'); ?></th>
                  		<th class="text-center"><?php echo __('Antecedente'); ?></th>
                  		<th class="text-center"><?php echo __('Origen'); ?></th>
                  		<th class="text-center"><?php echo __('Doctor Tratante'); ?></th>
                  		<th class="text-center"><?php echo __('Creado'); ?></th>

									<th class="text-center"><?php echo __('Acciones'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($history['Antecedent'] as $antecedent): ?>
		<tr>
			<td class="text-center"><?php echo $antecedent['id']; ?></td>
			<td class="text-center"><?php echo $antecedent['name_antecendent']; ?></td>
			<td class="text-center"><?php echo $antecedent['origin']; ?></td>
			<td class="text-center"><?php echo $antecedent['personals_doctors']; ?></td>
			<td class="text-center"><?php echo $antecedent['created']; ?></td>
			<td class="text-center">
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('controller' => 'antecedents', 'action' => 'view', $antecedent['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Ver')); ?>
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('controller' => 'antecedents', 'action' => 'edit', $antecedent['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Editar')); ?>
				<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('controller' => 'antecedents', 'action' => 'delete', $antecedent['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Eliminar'), __('Esta seguro de eliminar el antecedente # %s?', $antecedent['id'])); ?>
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
