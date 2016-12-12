<?php echo $this->Html->css('datatables/dataTables.bootstrap'); ?>
<div class="row">
    <div class="col-xs-12">

    <div class="box box-primary">
		<div class="box-header">
			<h3 class="box-title"><?php echo __('Diagnosticos'); ?></h3>
			<div class="box-tools pull-right">
                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-plus"></i> Nuevo Diagnostico'), array('action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>
            </div>
		</div>
			<div class="box-body table-responsive">
                <table id="Diagnostics" class="table table-bordered table-striped">
					<thead>
						<tr>
													<th class="text-center"><?php echo $this->Paginator->sort('N° de Diagnostico'); ?></th>
													<!-- <th class="text-center"><?php echo $this->Paginator->sort('Tamaño de Senos'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('Forma de Senos'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('Simetira de Senos'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('Piel de Senos'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('C.A.P de Senos'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('Vagina'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('Cuello Vagina'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('Coloscopia'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('Ano'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('Cabeza Cuello'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('Tacto Tumor'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('Forma Tumor'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('Superfice Tumor'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('Contorno Tumor'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('Eje Tumor'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('Consistencia Tumor'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('Laringoscopia'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('Menarguia'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('Reglas'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('PRS'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('Compañero Sexual'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('Distancia C.A.P'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('Gestas'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('R.S.I'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('Paras'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('Abdomen'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('Abortos'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('Vulva'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('Cesarea'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('Edad del Primer Parto'); ?></th> -->
													<th class="text-center"><?php echo $this->Paginator->sort('Diagnostico'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('Paciente'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('N° Historia'); ?></th>
												<th class="text-center"><?php echo __('Acciones'); ?></th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ($diagnostics as $diagnostic): ?>
	<tr>
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['id']); ?>&nbsp;</td>
		<!-- <td class="text-center"><?php echo h($diagnostic['Diagnostic']['size_boobs']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['form_boobs']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['symmetry_boobs']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['skin_boobs']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['cap_boobs']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['pussy']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['neck_pussy']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['coloscopia']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['ano_ straight']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['head_neck']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['touch_tumor']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['form_tumor']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['surface_tumor']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['contour_tumor']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['axis_tumor']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['consistency_tumor']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['laringoscopia']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['menarguia']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['reglas']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['prs']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['companion_sexual']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['distance_cap']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['gestas']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['rsi']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['paras']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['abdomen']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['misbirth']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['gynecological_vulva']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['cesareans']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['age_birth_one']); ?>&nbsp;</td> -->
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['diagnostico']); ?>&nbsp;</td>
		<td class="text-center">
			<?php echo $this->Html->link($diagnostic['Person']['name'], array('controller' => 'people', 'action' => 'view', $diagnostic['Person']['id'])); ?>
		</td>
		<td class="text-center">
			<?php echo $this->Html->link($diagnostic['History']['id'], array('controller' => 'histories', 'action' => 'view', $diagnostic['History']['id'])); ?>
		</td>
		<td class="text-center">
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('action' => 'view', $diagnostic['Diagnostic']['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Vista')); ?>
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('action' => 'edit', $diagnostic['Diagnostic']['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Editar')); ?>
			<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('action' => 'delete', $diagnostic['Diagnostic']['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Eliminar'), __('Esta seguro de eliminar el diagnostico # %s?', $diagnostic['Diagnostic']['id'])); ?>
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
        $("#Diagnostics").dataTable();
    });
</script>
