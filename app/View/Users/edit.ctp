
<div class="row">
    <div class="col-xs-6 col-xs-offset-3">
		<div class="box box-primary">
			<div class="box-header">
			<h3 class="box-title"><?php echo __('Editar Usuario'); ?></h3>
			</div>
			<div class="box-body table-responsive">

			<?php echo $this->Form->create('User', array('role' => 'form','type'=>'file', 'novalidate'=>'novalidate')); ?>

				<fieldset>

										<div class="form-group">
						<?php echo $this->Form->input('id', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->

					<div class="form-group">
          <?php echo $this->Form->input('full_name', array('label'=>'Nombre Completo','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('username', array('label'=>'Usuario','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('password', array('label'=>'Contraseña','class' => 'form-control')); ?>
					</div><!-- .form-group -->
          <!-- <div class="form-group">
            <?php
            echo $this->Form->input('foto',array('label'=>'Foto','type'=>'file','class'=>'form-control'));
            echo $this->Form->input('foto_dir',array('type'=>'hidden'));
            ?>
          </div> -->
					<div class="form-group">
						<?php echo $this->Form->input('group_id', array('label'=>'Grupo','class' => 'form-control')); ?>
					</div><!-- .form-group -->

					<?php echo $this->Form->submit('Añadir', array('class' => 'btn btn-large btn-primary')); ?>

				</fieldset>

						<?php echo $this->Form->end(); ?>

		</div><!-- /.form -->

	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->
