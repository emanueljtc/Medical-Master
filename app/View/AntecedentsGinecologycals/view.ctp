
<div class="row">
    <div class="col-xs-12">

		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php  echo __('Antecedente Ginecológico'); ?></h3>
				<div class="box-tools pull-right">
	                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i> Editar'), array('action' => 'edit', $antecedentsGinecologycal['AntecedentsGinecologycal']['id']), array('class' => 'btn btn-primary', 'escape' => false)); ?>
	            </div>
			</div>

			<div class="box-body table-responsive">
                <table id="AntecedentsGinecologycals" class="table table-bordered table-striped">
					<tbody>
						<tr>		<td><strong><?php echo __('N°'); ?></strong></td>
		<td>
			<?php echo h($antecedentsGinecologycal['AntecedentsGinecologycal']['id']); ?>
			&nbsp;
		</td>
    <tr>		<td><strong><?php echo __('Paciente'); ?></strong></td>
    		<td>
    			<?php echo $this->Html->link($antecedentsGinecologycal['Person']['full_name'], array('controller' => 'people', 'action' => 'view', $antecedentsGinecologycal['Person']['id']), array('class' => '')); ?>
    			&nbsp;
    		</td>
    </tr><tr>		<td><strong><?php echo __('N° Historia'); ?></strong></td>
    		<td>
    			<?php echo $this->Html->link($antecedentsGinecologycal['History']['id'], array('controller' => 'histories', 'action' => 'view', $antecedentsGinecologycal['History']['id']), array('class' => '')); ?>
    			&nbsp;
    		</td>
    </tr>
</tr><tr>		<td><strong><?php echo __('Menargia'); ?></strong></td>
		<td>
			<?php echo h($antecedentsGinecologycal['AntecedentsGinecologycal']['menargia']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Reglas'); ?></strong></td>
		<td>
			<?php echo h($antecedentsGinecologycal['AntecedentsGinecologycal']['rules']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Primera Relación Sexual'); ?></strong></td>
		<td>
			<?php echo h($antecedentsGinecologycal['AntecedentsGinecologycal']['prs']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Compañeros Sexuales'); ?></strong></td>
		<td>
			<?php echo h($antecedentsGinecologycal['AntecedentsGinecologycal']['sexual_partners']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Gestas'); ?></strong></td>
		<td>
			<?php echo h($antecedentsGinecologycal['AntecedentsGinecologycal']['gestas']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Paras'); ?></strong></td>
		<td>
			<?php echo h($antecedentsGinecologycal['AntecedentsGinecologycal']['paras']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Abortos'); ?></strong></td>
		<td>
			<?php echo h($antecedentsGinecologycal['AntecedentsGinecologycal']['misbirth']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Cesareas'); ?></strong></td>
		<td>
			<?php echo h($antecedentsGinecologycal['AntecedentsGinecologycal']['cesareas']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Edad del Primer Parto'); ?></strong></td>
		<td>
			<?php echo h($antecedentsGinecologycal['AntecedentsGinecologycal']['first_birth']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Lactancia'); ?></strong></td>
		<td>
			<?php echo h($antecedentsGinecologycal['AntecedentsGinecologycal']['lactation']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Uso del A.C.O'); ?></strong></td>
		<td>
			<?php echo h($antecedentsGinecologycal['AntecedentsGinecologycal']['aco']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Uso del D.I.U'); ?></strong></td>
		<td>
			<?php echo h($antecedentsGinecologycal['AntecedentsGinecologycal']['diu']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->

		</div><!-- /.view -->


	</div><!-- /#page-content .span9 -->
</div><!-- /#page-container .row-fluid -->
<div class="btn-group btn-group-justified col-sm-4">

  <?php echo $this->Html->link(__('Nuevo Diagnostico'), array('controller'=>'diagnostics','action' => 'add'), array('class' => 'btn btn-info')); ?>
  <?php echo $this->Html->link(__('Lista de Antedecentes G.'), array('action' => 'index'), array('class' => 'btn btn-danger')); ?>
  <?php echo $this->Html->link(__('Nuevo Paciente'), array('controller' => 'people', 'action' => 'add'), array('class' => 'btn btn-primary')); ?>

</div>
