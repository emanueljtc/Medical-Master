
<div class="row">
    <div class="col-xs-12">

		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php  echo __('Historia'); ?></h3>
				<div class="box-tools pull-right">
	                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i> Editar '), array('action' => 'edit', $history['History']['id']), array('class' => 'btn btn-primary', 'escape' => false)); ?>
	            </div>
			</div>

			<div class="box-body table-responsive">
                <table id="Histories" class="table table-bordered table-striped">
					<tbody>
						<tr>
                <td><strong><?php echo __('N° de Historia'); ?></strong></td>
            		<td>
            			<?php echo h($history['History']['id']); ?>
            			&nbsp;
            		</td>
            </tr>
<tr>
  <td><strong><?php echo __('Paciente'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($history['Person']['name'], array('controller' => 'people', 'action' => 'view', $history['Person']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr>
<tr>		<td><strong><?php echo __('N° Antecedente'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($history['Antecedent']['id'], array('controller' => 'antecedents', 'action' => 'view', $history['Antecedent']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr>
<tr>
    <td><strong><?php echo __('Fecha de Nacimiento'); ?></strong></td>
		<td>
			<?php echo h($history['History']['born_date']); ?>
			&nbsp;
		</td>
</tr>
<tr>
    <td><strong><?php echo __('Edad'); ?></strong></td>
		<td>
			<?php echo h($history['History']['age']); ?>
			&nbsp;
		</td>
</tr>
<tr>		<td><strong><?php echo __('Tamaño'); ?></strong></td>
		<td>
			<?php echo h($history['History']['weight']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Peso'); ?></strong></td>
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
					<h3 class="box-title"><?php echo __('Diagnosticos Relacionados'); ?></h3>
					<div class="box-tools pull-right">
						<?php echo $this->Html->link('<i class="glyphicon glyphicon-plus"></i> '.__('Nuevo Diagnostico'), array('controller' => 'diagnostics', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>					</div><!-- /.actions -->
				</div>
				<?php if (!empty($history['Diagnostic'])): ?>

					<div class="box-body table-responsive">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
		<th class="text-center"><?php echo __('N° Diagnostico'); ?></th>
		<!-- <th class="text-center"><?php echo __('Size Boobs'); ?></th>
		<th class="text-center"><?php echo __('Form Boobs'); ?></th>
		<th class="text-center"><?php echo __('Symmetry Boobs'); ?></th>
		<th class="text-center"><?php echo __('Skin Boobs'); ?></th>
		<th class="text-center"><?php echo __('Cap Boobs'); ?></th>
		<th class="text-center"><?php echo __('Pussy'); ?></th>
		<th class="text-center"><?php echo __('Neck Pussy'); ?></th>
		<th class="text-center"><?php echo __('Coloscopia'); ?></th>
		<th class="text-center"><?php echo __('Ano  Straight'); ?></th>
		<th class="text-center"><?php echo __('Head Neck'); ?></th>
		<th class="text-center"><?php echo __('Touch Tumor'); ?></th>
		<th class="text-center"><?php echo __('Form Tumor'); ?></th>
		<th class="text-center"><?php echo __('Surface Tumor'); ?></th>
		<th class="text-center"><?php echo __('Contour Tumor'); ?></th>
		<th class="text-center"><?php echo __('Axis Tumor'); ?></th>
		<th class="text-center"><?php echo __('Consistency Tumor'); ?></th>
		<th class="text-center"><?php echo __('Laringoscopia'); ?></th>
		<th class="text-center"><?php echo __('Menarguia'); ?></th>
		<th class="text-center"><?php echo __('Reglas'); ?></th>
		<th class="text-center"><?php echo __('Prs'); ?></th>
		<th class="text-center"><?php echo __('Companion Sexual'); ?></th>
		<th class="text-center"><?php echo __('Distance Cap'); ?></th>
		<th class="text-center"><?php echo __('Gestas'); ?></th>
		<th class="text-center"><?php echo __('Rsi'); ?></th>
		<th class="text-center"><?php echo __('Paras'); ?></th>
		<th class="text-center"><?php echo __('Abdomen'); ?></th>
		<th class="text-center"><?php echo __('Misbirth'); ?></th>
		<th class="text-center"><?php echo __('Gynecological Vulva'); ?></th>
		<th class="text-center"><?php echo __('Cesareans'); ?></th>
		<th class="text-center"><?php echo __('Age Birth One'); ?></th> -->
		<th class="text-center"><?php echo __('Diagnostico'); ?></th>
		<!-- <th class="text-center"><?php echo __('Person Id'); ?></th>
		<th class="text-center"><?php echo __('History Id'); ?></th> -->
									<th class="text-center"><?php echo __('Acciones'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($history['Diagnostic'] as $diagnostic): ?>
		<tr>
			<td class="text-center"><?php echo $diagnostic['id']; ?></td>
			<!-- <td class="text-center"><?php echo $diagnostic['size_boobs']; ?></td>
			<td class="text-center"><?php echo $diagnostic['form_boobs']; ?></td>
			<td class="text-center"><?php echo $diagnostic['symmetry_boobs']; ?></td>
			<td class="text-center"><?php echo $diagnostic['skin_boobs']; ?></td>
			<td class="text-center"><?php echo $diagnostic['cap_boobs']; ?></td>
			<td class="text-center"><?php echo $diagnostic['pussy']; ?></td>
			<td class="text-center"><?php echo $diagnostic['neck_pussy']; ?></td>
			<td class="text-center"><?php echo $diagnostic['coloscopia']; ?></td>
			<td class="text-center"><?php echo $diagnostic['ano_ straight']; ?></td>
			<td class="text-center"><?php echo $diagnostic['head_neck']; ?></td>
			<td class="text-center"><?php echo $diagnostic['touch_tumor']; ?></td>
			<td class="text-center"><?php echo $diagnostic['form_tumor']; ?></td>
			<td class="text-center"><?php echo $diagnostic['surface_tumor']; ?></td>
			<td class="text-center"><?php echo $diagnostic['contour_tumor']; ?></td>
			<td class="text-center"><?php echo $diagnostic['axis_tumor']; ?></td>
			<td class="text-center"><?php echo $diagnostic['consistency_tumor']; ?></td>
			<td class="text-center"><?php echo $diagnostic['laringoscopia']; ?></td>
			<td class="text-center"><?php echo $diagnostic['menarguia']; ?></td>
			<td class="text-center"><?php echo $diagnostic['reglas']; ?></td>
			<td class="text-center"><?php echo $diagnostic['prs']; ?></td>
			<td class="text-center"><?php echo $diagnostic['companion_sexual']; ?></td>
			<td class="text-center"><?php echo $diagnostic['distance_cap']; ?></td>
			<td class="text-center"><?php echo $diagnostic['gestas']; ?></td>
			<td class="text-center"><?php echo $diagnostic['rsi']; ?></td>
			<td class="text-center"><?php echo $diagnostic['paras']; ?></td>
			<td class="text-center"><?php echo $diagnostic['abdomen']; ?></td>
			<td class="text-center"><?php echo $diagnostic['misbirth']; ?></td>
			<td class="text-center"><?php echo $diagnostic['gynecological_vulva']; ?></td>
			<td class="text-center"><?php echo $diagnostic['cesareans']; ?></td>
			<td class="text-center"><?php echo $diagnostic['age_birth_one']; ?></td> -->
			<td class="text-center"><?php echo $diagnostic['diagnostico']; ?></td>
			<!-- <td class="text-center"><?php echo $diagnostic['person_id']; ?></td>
			<td class="text-center"><?php echo $diagnostic['history_id']; ?></td> -->
			<td class="text-center">
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('controller' => 'diagnostics', 'action' => 'view', $diagnostic['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Ver')); ?>
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('controller' => 'diagnostics', 'action' => 'edit', $diagnostic['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Editar')); ?>
				<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('controller' => 'diagnostics', 'action' => 'delete', $diagnostic['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Eliminar'), __('Esta Seguro de Eliminar Diagnostico # %s?', $diagnostic['id'])); ?>
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
