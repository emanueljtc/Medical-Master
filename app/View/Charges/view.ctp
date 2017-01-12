
<div class="row">
    <div class="col-xs-12">

		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php  echo __('Pago'); ?></h3>
				<div class="box-tools pull-right">
	                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i> Editar'), array('action' => 'edit', $charge['Charge']['id']), array('class' => 'btn btn-primary', 'escape' => false)); ?>
	            </div>
			</div>

			<div class="box-body table-responsive">
                <table id="Charges" class="table table-bordered table-striped">
					<tbody>
						<tr>		<td><strong><?php echo __('N° Pago'); ?></strong></td>
		<td>
			<?php echo h($charge['Charge']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Costo Total'); ?></strong></td>
		<td>
			<?php echo h($charge['Charge']['total_cost']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Paciente'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($charge['Person']['full_name'], array('controller' => 'people', 'action' => 'view', $charge['Person']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('N° Cita'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($charge['Citation']['id'], array('controller' => 'citations', 'action' => 'view', $charge['Citation']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr>
<tr>		<td><strong><?php echo __('Estado'); ?></strong></td>
		<td>
			<?php echo h($charge['Charge']['state_charge']); ?>
			&nbsp;
		</td>
</tr>
<tr>		<td><strong><?php echo __('Tipo'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($charge['Typepayment']['type_payment'], array('controller' => 'typepayments', 'action' => 'view', $charge['Typepayment']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Observacion'); ?></strong></td>
		<td>
			<?php echo h($charge['Charge']['observations']); ?>
			&nbsp;
		</td>
</tr>
<!-- <tr>		<td><strong><?php echo __('Created'); ?></strong></td>
		<td>
			<?php echo h($charge['Charge']['created']); ?>
			&nbsp;
		</td>
</tr> -->
<tr>		<td><strong><?php echo __('Fecha Pago'); ?></strong></td>
		<td>
			<?php echo h($charge['Charge']['modified']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->

		</div><!-- /.view -->


	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
