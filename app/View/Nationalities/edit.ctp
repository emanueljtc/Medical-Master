
<div class="row">
    <div class="col-xs-6 col-xs-offset-3">
		<div class="box box-primary">
			<div class="box-header">
			<h3 class="box-title"><?php echo __('Editar Nationalidad'); ?></h3>
			</div>
			<div class="box-body table-responsive">

			<?php echo $this->Form->create('Nationality', array('role' => 'form')); ?>

				<fieldset>

										<div class="form-group">
						<?php echo $this->Form->input('id', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('nacionalidad', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->

					<?php echo $this->Form->submit('Modificar', array('class' => 'btn btn-large btn-primary')); ?>

				</fieldset>

						<?php echo $this->Form->end(); ?>

		</div><!-- /.form -->

	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->
<div class="btn-group btn-group-justified col-sm-4">

  <?php echo $this->Html->link(__('Nuevo Paciente'), array('controller'=>'people','action' => 'add'), array('class' => 'btn btn-info')); ?>
  <?php echo $this->Html->link(__('Lista de Nacionalidades'), array('action' => 'index'), array('class' => 'btn btn-danger')); ?>
  <?php echo $this->Html->link(__('Nueva Nacionalidad'), array('action' => 'add'), array('class' => 'btn btn-primary')); ?>

</div>
