
<div class="row">
    <div class="col-xs-6 col-xs-offset-3">
		<div class="box box-primary">
			<div class="box-header">
			<h3 class="box-title"><?php echo __('Editar Paciente'); ?></h3>
			</div>
			<div class="box-body table-responsive">

			<?php echo $this->Form->create('Person', array('role' => 'form')); ?>

				<fieldset>

										<div class="form-group">
						<?php echo $this->Form->input('id', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('name', array('label'=>'Nombres','class' => 'form-control','onkeypress'=>'return IsNombre(event);','maxlength'=>'60')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('last_name', array('label'=>'Apellidos','class' => 'form-control','onkeypress'=>'return IsApellidos(event);','maxlength'=>'60')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('dni', array('type'=>'text','label'=>'Cedula','class' => 'form-control','onkeypress'=>'return IsCedula(event);','maxlength'=>'60')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('gender', array('label'=>'Genero','class' => 'form-control','type'=>'select','options'=>array(''=>'[SELECCIONE SEXO]','Femenino'=>'Femenino','Masculino'=>'Masculino'))); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('address', array('label'=>'Direccion','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('phone', array('label'=>'Telefono','class' => 'form-control','onkeypress'=>'return IsTelefono(event);','maxlength'=>'11')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('email', array('label'=>'Correo Electronico','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('nationality_id', array('label'=>'Nacionalidad','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('pass_app', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<!-- <div class="form-group">
						<?php echo $this->Form->input('token', array('class' => 'form-control')); ?>
					</div> -->
					<?php echo $this->Form->submit('Añadir', array('class' => 'btn btn-large btn-primary')); ?>

				</fieldset>

						<?php echo $this->Form->end(); ?>

		</div><!-- /.form -->

	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->
