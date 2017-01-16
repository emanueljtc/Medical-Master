
<div class="row">
    <div class="col-xs-6 col-xs-offset-3">
		<div class="box box-primary">
			<div class="box-header">
			<h3 class="box-title"><?php echo __('Editar Recipe'); ?></h3>
			</div>
			<div class="box-body table-responsive">

			<?php echo $this->Form->create('Prescription', array('role' => 'form')); ?>

				<fieldset>

					<div class="form-group">
						<?php echo $this->Form->input('id', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
          <div class="form-group col-sm-5">
						<?php echo $this->Form->input('person_id', array('label'=> 'Paciente','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-sm-3">
						<?php echo $this->Form->input('diagnostic_id', array('label'=>'Diagnostico','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-sm-4">
						<?php echo $this->Form->input('status_treament', array('label'=>'Estado','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-sm-12">
						<?php echo $this->Form->input('prescription', array('label'=>'Tratamiento','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-sm-12">
						<?php echo $this->Form->input('indications', array('label' => 'Indicaciones','class' => 'form-control')); ?>
					</div><!-- .form-group -->
          <center>
            <div>
   					<?php echo $this->Form->submit('Actualizar', array('class' => 'btn btn-large btn-primary')); ?>
            </div>
        </center>
				</fieldset>

						<?php echo $this->Form->end(); ?>

		</div><!-- /.form -->

	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->
<div class="btn-group btn-group-justified col-sm-4">

  <?php echo $this->Html->link(__('Nuevo Diagnostico'), array('controller'=>'diagnostics','action' => 'add'), array('class' => 'btn btn-info')); ?>
  <?php echo $this->Html->link(__('Lista de Recipes'), array('action' => 'index'), array('class' => 'btn btn-danger')); ?>
  <?php echo $this->Html->link(__('Nuevo Recipe'), array('action' => 'add'), array('class' => 'btn btn-primary')); ?>

</div>
