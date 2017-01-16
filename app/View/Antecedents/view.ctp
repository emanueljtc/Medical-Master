
<div class="row">
    <div class="col-xs-12">

		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php  echo __('Antecedente'); ?></h3>
				<div class="box-tools pull-right">
	                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i> Editar'), array('action' => 'edit', $antecedent['Antecedent']['id']), array('class' => 'btn btn-primary', 'escape' => false)); ?>
	            </div>
			</div>

			<div class="box-body table-responsive">
                <table id="Antecedents" class="table table-bordered table-striped">
					<tbody>
						<tr>		<td><strong><?php echo __('N° Antecedente'); ?></strong></td>
		<td>
			<?php echo h($antecedent['Antecedent']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Paciente'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($antecedent['Person']['full_name'], array('controller' => 'people', 'action' => 'view', $antecedent['Person']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('N° Historia'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($antecedent['History']['id'], array('controller' => 'histories', 'action' => 'view', $antecedent['History']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Antecedente'); ?></strong></td>
		<td>
			<?php echo h($antecedent['Antecedent']['name_antecendent']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Origen'); ?></strong></td>
		<td>
			<?php echo h($antecedent['Antecedent']['origin']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Tiempo de Padecimiento'); ?></strong></td>
		<td>
			<?php echo h($antecedent['Antecedent']['time_ suffering']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Familia'); ?></strong></td>
		<td>
			<?php echo h($antecedent['Antecedent']['family']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Doctor Tratante'); ?></strong></td>
		<td>
			<?php echo h($antecedent['Antecedent']['personals_doctors']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Cirugias'); ?></strong></td>
		<td>
			<?php echo h($antecedent['Antecedent']['surgicals']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Creado'); ?></strong></td>
		<td>
			<?php echo h($antecedent['Antecedent']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modificado'); ?></strong></td>
		<td>
			<?php echo h($antecedent['Antecedent']['modified']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->

		</div><!-- /.view -->


	</div><!-- /#page-content .span9 -->
  <div class="btn-group btn-group-justified col-sm-4">

          <?php echo $this->Html->link(__('Nuevo Diagnostico'), array('controller'=>'diagnostics','action' => 'add'), array('class' => 'btn btn-info')); ?>
          <?php echo $this->Html->link(__('Lista de Antecedentes'), array('action' => 'index'), array('class' => 'btn btn-danger')); ?>
          <?php echo $this->Html->link(__('Nuevo Paciente'), array('controller' => 'people', 'action' => 'add'), array('class' => 'btn btn-primary')); ?>

  </div>
</div><!-- /#page-container .row-fluid -->
