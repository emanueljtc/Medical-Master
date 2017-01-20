
<div class="row">
    <div class="col-xs-6 col-xs-offset-3">
		<div class="box box-primary">
			<div class="box-header">
			<h3 class="box-title"><?php echo __('Edit Antecedents Ginecologycal'); ?></h3>
			</div>
			<div class="box-body table-responsive">

			<?php echo $this->Form->create('AntecedentsGinecologycal', array('role' => 'form')); ?>

				<fieldset>

										<div class="form-group">
						<?php echo $this->Form->input('id', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
          <div class="form-group col-sm-8">
           <?php echo $this->Form->input('person_id', array('label'=>'Paciente','class' => 'form-control')); ?>
         </div><!-- .form-group -->
         <div class="form-group col-sm-4">
           <?php $numero= $this->Form->input('history_id', array('label'=>'N° Historia','class' => 'form-control'));
               echo $numero;
           ?>
         </div>
					<div class="form-group col-sm-6">
						<?php echo $this->Form->input('menargia', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-sm-6">
						<?php echo $this->Form->input('rules', array('label'=>'Reglas','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-sm-6">
						<?php echo $this->Form->input('prs', array('label'=>'P.R.S','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-sm-6">
						<?php echo $this->Form->input('sexual_partners', array('label'=>'Compañeros Sexuales','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-sm-6">
						<?php echo $this->Form->input('gestas', array('label'=>'Gestas','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-sm-6">
						<?php echo $this->Form->input('paras', array('label'=>'Paras','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-sm-6">
						<?php echo $this->Form->input('misbirth', array('label'=>'Abortos','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-sm-6">
						<?php echo $this->Form->input('cesareas', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-sm-6">
						<?php echo $this->Form->input('first_birth', array('type'=>'text','label'=>'Edad Primer Parto','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-sm-6">
						<?php echo $this->Form->input('lactation', array('label'=>'Lactancia','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-sm-6">
						<?php echo $this->Form->input('aco', array('label'=>'Uso de la A.C.O','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-sm-6">
						<?php echo $this->Form->input('diu', array('label'=>'Uso de D.I.U','class' => 'form-control')); ?>
					</div><!-- .form-group -->
          <center>
					  <?php echo $this->Form->submit('Actualizar', array('class' => 'btn btn-large btn-primary')); ?>
          </center>
				</fieldset>

						<?php echo $this->Form->end(); ?>

		</div><!-- /.form -->

	</div><!-- /#page-content .col-sm-9 -->
  <div class="btn-group btn-group-justified col-sm-4">

          <?php echo $this->Html->link(__('Nuevo Diagnostico'), array('controller'=>'diagnostics','action' => 'add'), array('class' => 'btn btn-info')); ?>
          <?php echo $this->Html->link(__('Lista de Antedecentes G.'), array('action' => 'index'), array('class' => 'btn btn-danger')); ?>
          <?php echo $this->Html->link(__('Nuevo Paciente'), array('controller' => 'people', 'action' => 'add'), array('class' => 'btn btn-primary')); ?>

  </div>
</div><!-- /#page-container .row-fluid -->
