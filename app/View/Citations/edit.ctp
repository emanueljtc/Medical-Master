<style>
            .estatus{
              display:none;
            }
</style>
<div class="row">
    <div class="col-xs-6 col-xs-offset-3">
		<div class="box box-primary">
			<div class="box-header">
			<h3 class="box-title"><?php echo __('Editar Cita'); ?></h3>
			</div>
			<div class="box-body table-responsive">

			<?php echo $this->Form->create('Citation', array('role' => 'form')); ?>

				<fieldset>

					<div class="form-group">
              <?php echo $this->Form->input('id', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
            <?php echo $this->Form->input('person_id', array('label'=>'Paciente','class' => 'form-control')); ?>

					</div><!-- .form-group -->
          <div class="form-group">
            <?php echo $this->Form->input('date_hour', array('label'=>'','placeholder' => '','class'=>'form-control','id'=>'f_date2','readonly'=>'readonly')); ?>
              <button id="fnac"><span class="input-group-addon glyphicon glyphicon-calendar"></span></button>
          </div><!-- .form-group -->
					<div class="form-group">
            <?php echo $this->Form->input('datecitation_id', array('label'=>'Estado','class' => 'form-control')); ?>
					</div><!-- .form-group -->

					<?php echo $this->Form->submit('Modificar', array('class' => 'btn btn-large btn-primary')); ?>

				</fieldset>

						<?php echo $this->Form->end(); ?>

		</div><!-- /.form -->

	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->
<script>
      Calendar.setup({
                  inputField : "f_date2",
                  trigger    : "fnac",
                  onSelect   : function() { this.hide() },
                  showTime   : 12,
                  dateFormat : "%d-%m-%Y"
                });

</script>
