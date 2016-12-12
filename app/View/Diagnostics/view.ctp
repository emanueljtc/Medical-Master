
<div class="row">
    <div class="col-xs-12">

		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php  echo __('Diagnostico'); ?></h3>
				<div class="box-tools pull-right">
	                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i> Editar'), array('action' => 'edit', $diagnostic['Diagnostic']['id']), array('class' => 'btn btn-primary', 'escape' => false)); ?>
	            </div>
			</div>

			<div class="box-body table-responsive">
                <table id="Diagnostics" class="table table-bordered table-striped">
					<tbody>
						<tr>		<td><strong><?php echo __('N° Diagnostico'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Tamaño de Senos'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['size_boobs']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Forma de Senos'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['form_boobs']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Simetria de Senos'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['symmetry_boobs']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Piel de Senos'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['skin_boobs']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('CAP de Senos'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['cap_boobs']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Vagina'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['pussy']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Cuello Vagina'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['neck_pussy']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Coloscopia'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['coloscopia']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Ano'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['ano_ straight']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Cabeza Cuello'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['head_neck']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Tacto Tumor'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['touch_tumor']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Forma Tumor'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['form_tumor']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Superficie Tumor'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['surface_tumor']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Contorno Tumor'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['contour_tumor']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Eje Tumor'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['axis_tumor']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Consistencia Tumor'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['consistency_tumor']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Laringoscopia'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['laringoscopia']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Menarguia'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['menarguia']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Reglas'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['reglas']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('PRS'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['prs']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Compañero Sexual'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['companion_sexual']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Distancia CAP'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['distance_cap']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Gestas'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['gestas']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('RSI'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['rsi']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Paras'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['paras']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Abdomen'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['abdomen']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Abortos'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['misbirth']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Vulva'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['gynecological_vulva']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Cesarea'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['cesareans']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Edad Primer Parto'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['age_birth_one']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Diagnostico'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['diagnostico']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Paciente'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($diagnostic['Person']['name'], array('controller' => 'people', 'action' => 'view', $diagnostic['Person']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('N° Historia'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($diagnostic['History']['id'], array('controller' => 'histories', 'action' => 'view', $diagnostic['History']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->

		</div><!-- /.view -->
			<div class="box box-primary">
				<div class="box-header">
					<h3 class="box-title"><?php echo __('Estudios Relacionados'); ?></h3>
					<div class="box-tools pull-right">
						<?php echo $this->Html->link('<i class="glyphicon glyphicon-plus"></i> '.__('Nuevo Estudio'), array('controller' => 'studies', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>					</div><!-- /.actions -->
				</div>
				<?php if (!empty($diagnostic['Study'])): ?>

					<div class="box-body table-responsive">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
											<th class="text-center"><?php echo __('N° Estudio'); ?></th>
              		<th class="text-center"><?php echo __('N° Diagnostico'); ?></th>
              		<!-- <th class="text-center"><?php echo __('Person Id'); ?></th> -->
              		<th class="text-center"><?php echo __('Estudio'); ?></th>
              		<!-- <th class="text-center"><?php echo __('Observations'); ?></th> -->
              		<th class="text-center"><?php echo __('Creado'); ?></th>
              		<!-- <th class="text-center"><?php echo __('Modified'); ?></th> -->
									<th class="text-center"><?php echo __('Acciones'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($diagnostic['Study'] as $study): ?>
		<tr>
			<td class="text-center"><?php echo $study['id']; ?></td>
			<td class="text-center"><?php echo $study['diagnostic_id']; ?></td>
			<!-- <td class="text-center"><?php echo $study['person_id']; ?></td> -->
			<td class="text-center"><?php echo $study['name_studie']; ?></td>
			<!-- <td class="text-center"><?php echo $study['observations']; ?></td> -->
			<td class="text-center"><?php echo $study['created']; ?></td>
			<!-- <td class="text-center"><?php echo $study['modified']; ?></td> -->
			<td class="text-center">
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('controller' => 'studies', 'action' => 'view', $study['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Ver')); ?>
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('controller' => 'studies', 'action' => 'edit', $study['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Editar')); ?>
				<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('controller' => 'studies', 'action' => 'delete', $study['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Eliminar'), __('Esta Seguro de eliminar el Estudio # %s?', $study['id'])); ?>
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
					<h3 class="box-title"><?php echo __('Tratamientos Relacionados'); ?></h3>
					<div class="box-tools pull-right">
						<?php echo $this->Html->link('<i class="glyphicon glyphicon-plus"></i> '.__('Nuevo Tratamiento'), array('controller' => 'treatments', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>					</div><!-- /.actions -->
				</div>
				<?php if (!empty($diagnostic['Treatment'])): ?>

					<div class="box-body table-responsive">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
											<th class="text-center"><?php echo __('N° Tratamiento'); ?></th>
                  		<!-- <th class="text-center"><?php echo __('Person Id'); ?></th>
                  		<th class="text-center"><?php echo __('Diagnostic Id'); ?></th> -->
                  		<th class="text-center"><?php echo __('Estado'); ?></th>
                  		<th class="text-center"><?php echo __('Recipe'); ?></th>
                  		<!-- <th class="text-center"><?php echo __('Observationes Recipe'); ?></th> -->
                  		<th class="text-center"><?php echo __('Creado'); ?></th>
                  		<th class="text-center"><?php echo __('Modificado'); ?></th>
									<th class="text-center"><?php echo __('Acciones'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($diagnostic['Treatment'] as $treatment): ?>
		<tr>
			<td class="text-center"><?php echo $treatment['id']; ?></td>
			<!-- <td class="text-center"><?php echo $treatment['person_id']; ?></td>
			<td class="text-center"><?php echo $treatment['diagnostic_id']; ?></td> -->
			<td class="text-center"><?php echo $treatment['status_treament']; ?></td>
			<td class="text-center"><?php echo $treatment['prescription']; ?></td>
			<!-- <td class="text-center"><?php echo $treatment['observations_prescription']; ?></td> -->
			<td class="text-center"><?php echo $treatment['created']; ?></td>
			<td class="text-center"><?php echo $treatment['modified']; ?></td>
			<td class="text-center">
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('controller' => 'treatments', 'action' => 'view', $treatment['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Ver')); ?>
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('controller' => 'treatments', 'action' => 'edit', $treatment['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Editar')); ?>
				<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('controller' => 'treatments', 'action' => 'delete', $treatment['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Eliminar'), __('Esta seguro de eliminar el tratamiento # %s?', $treatment['id'])); ?>
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
					<h3 class="box-title"><?php echo __('Indicaciones Relacionadas'); ?></h3>
					<div class="box-tools pull-right">
						<?php echo $this->Html->link('<i class="glyphicon glyphicon-plus"></i> '.__('Nueva Indicacion'), array('controller' => 'indications', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>					</div><!-- /.actions -->
				</div>
				<?php if (!empty($diagnostic['Indication'])): ?>

					<div class="box-body table-responsive">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
									<th class="text-center"><?php echo __('N° Indicacion'); ?></th>
              		<!-- <th class="text-center"><?php echo __('Diagnostic Id'); ?></th>
              		<th class="text-center"><?php echo __('Treatment Id'); ?></th>
              		<th class="text-center"><?php echo __('Person Id'); ?></th> -->
              		<th class="text-center"><?php echo __('Indicacion'); ?></th>
              		<th class="text-center"><?php echo __('Creado'); ?></th>
              		<th class="text-center"><?php echo __('Modificado'); ?></th>
									<th class="text-center"><?php echo __('Acciones'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($diagnostic['Indication'] as $indication): ?>
		<tr>
			<td class="text-center"><?php echo $indication['id']; ?></td>
			<!-- <td class="text-center"><?php echo $indication['diagnostic_id']; ?></td>
			<td class="text-center"><?php echo $indication['treatment_id']; ?></td>
			<td class="text-center"><?php echo $indication['person_id']; ?></td> -->
			<td class="text-center"><?php echo $indication['indication']; ?></td>
			<td class="text-center"><?php echo $indication['created']; ?></td>
			<td class="text-center"><?php echo $indication['modified']; ?></td>
			<td class="text-center">
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('controller' => 'indications', 'action' => 'view', $indication['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Ver')); ?>
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('controller' => 'indications', 'action' => 'edit', $indication['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Editar')); ?>
				<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('controller' => 'indications', 'action' => 'delete', $indication['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Eliminar'), __('Esta Seguro de Eliminar la indiciacion # %s?', $indication['id'])); ?>
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
