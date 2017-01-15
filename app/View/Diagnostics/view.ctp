
<div class="row">
    <div class="col-xs-12">

		<div class="box box-primary">
			<div class="box-header">


				<h3 class="box-title"><?php

        echo __('Diagnostico Detallado')?></h3>
				<div class="box-tools pull-right">
	                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i> Editar'), array('action' => 'edit', $diagnostic['Diagnostic']['id']), array('class' => 'btn btn-primary', 'escape' => false)); ?>
	            </div>
			</div>

			<div class="box-body table-responsive">
                <table id="Diagnostics" class="table table-bordered table-striped">
					<tbody>
						<tr>
              <td><strong><?php echo __('Nº'); ?></strong></td>
          		<td>
          			<?php echo h($diagnostic['Diagnostic']['id']); ?>
          			&nbsp;
          		</td>

            </tr>
            <tr>
              <td><strong><?php echo __('Paciente'); ?></strong></td>
          		<td>
                <?php echo $this->Html->link($diagnostic['Person']['full_name'], array('controller' => 'people', 'action' => 'view', $diagnostic['Person']['id'])); ?>
          			&nbsp;
          		</td>

            </tr>
             <tr>
              <td><strong><?php echo __('Nº Historia'); ?></strong></td>
            		<td>
            			<?php echo $this->Html->link($diagnostic['History']['id'], array('controller' => 'histories', 'action' => 'view', $diagnostic['History']['id']), array('class' => '')); ?>
            			&nbsp;
            		</td>
            </tr>
<tr>		<td><strong><?php echo __('Motivo_Consulta'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['reason']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Tamaño Senos'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['size_boobs']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Forma Senos'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['form_boobs']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Simetria Senos'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['symmetry_boobs']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Piel Senos'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['skin_boobs']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('CAP Senos'); ?></strong></td>
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
</tr><tr>		<td><strong><?php echo __('Ano - Recto'); ?></strong></td>
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
</tr><tr>		<td><strong><?php echo __('Cesareas'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['cesareans']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Edad del Primer Parto'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['age_birth_one']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Diagnostico'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['diagnostico']); ?>
			&nbsp;
		</td>
</tr>				</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->

		</div><!-- /.view -->





	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
<div class="btn-group btn-group-justified col-sm-4">

<?php echo $this->Html->link(__('Nuevo Antecedente'), array('controller'=>'antecedents','action' => 'add'), array('class' => 'btn btn-info')); ?>
<?php echo $this->Html->link(__('Lista de Diagnosticos'), array('action' => 'index'), array('class' => 'btn btn-danger')); ?>
<?php echo $this->Html->link(__('Nuevo Diagnostico'), array('action' => 'add'), array('class' => 'btn btn-primary')); ?>

</div>
