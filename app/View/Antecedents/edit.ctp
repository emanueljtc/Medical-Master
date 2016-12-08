
<div class="row">
    <div class="col-xs-6 col-xs-offset-3">
		<div class="box box-primary">
			<div class="box-header">
			<h3 class="box-title"><?php echo __('Editar Antecedente'); ?></h3>
			</div>
			<div class="box-body table-responsive">

			<?php echo $this->Form->create('Antecedent', array('role' => 'form')); ?>

				<fieldset>

										<div class="form-group">
						<?php echo $this->Form->input('id', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('person_id', array('label'=>'Paciente','class' => 'form-control')); ?>
					</div><!-- .form-group -->
          <div class="form-group">
						<?php echo $this->Form->input('history_id', array('label'=>'N° Historia','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('name_antecendent', array('label'=>'Antecedente','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('origin', array('label'=>'Origen','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('time_ suffering', array('label'=>'Tiempo de Padecimiento','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('family', array('label'=>'Familia','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('personals_doctors', array('label'=>'Doctor Tratante','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('surgicals', array('type'=>'select','options'=>array(''=>'[SELECCIONE]','Si'=>'Si','No'=>'No'),'label'=>'Sirugias','class' => 'form-control')); ?>
					</div><!-- .form-group -->

					<?php echo $this->Form->submit('Guardar', array('class' => 'btn btn-large btn-primary')); ?>

				</fieldset>

						<?php echo $this->Form->end(); ?>

		</div><!-- /.form -->

	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->
