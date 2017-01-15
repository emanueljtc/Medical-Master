
<div class="row">
    <div class="col-xs-6 col-xs-offset-3">
		<div class="box box-primary">
			<div class="box-header">
			<h3 class="box-title"><?php echo __('Añadir Diagnostico'); ?></h3>
			</div>
			<div class="box-body table-responsive">

			<?php echo $this->Form->create('Diagnostic', array('role' => 'form')); ?>

				<fieldset>

										<div class="form-group ">
                      <div class="form-group col-sm-6">
                        <?php echo $this->Form->input('person_id', array('label'=>'Paciente','class' => 'form-control')); ?>
                      </div><!-- .form-group -->
                      <div class="form-group col-sm-6">
                        <?php echo $this->Form->input('history_id', array('label'=>'N° de Historia','class' => 'form-control')); ?>
                      </div>
                      <br><br><br>


					</div><!-- .form-group -->
          <div class="form-group col-sm-12">
            <?php echo $this->Form->input('reason', array('label'=>'Motivo_Consulta','class' => 'form-control')); ?>
					</div><!-- .form-group -->
          <div class="form-group col-sm-4">
            <?php echo $this->Form->input('size_boobs', array('onkeypress'=>'return TamañoSeno(event);','maxlength'=>'3','label'=>'Tamaño de Senos','class' => 'form-control')); ?>
          </div><!-- .form-group -->
					<div class="form-group col-sm-4">
            <?php echo $this->Form->input('form_boobs', array('label'=>'Forma de Senos','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<!-- <div class="form-group col-sm-4">
            <?php echo $this->Form->input('symmetry_boobs', array('label'=>'Simetria de Senos','class' => 'form-control')); ?>
          </div>-->
          <div class="form-group col-sm-4">
            <?php echo $this->Form->input('symmetry_boobs', array('label'=>'Simetria Senos','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-sm-4">
            <?php echo $this->Form->input('skin_boobs', array('label'=>'Piel de Senos','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-sm-4">
            <?php echo $this->Form->input('cap_boobs', array('label'=>'C A P Senos','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-sm-4">
            <?php echo $this->Form->input('pussy', array('label'=>'Vagina','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-sm-4">
            <?php echo $this->Form->input('neck_pussy', array('label'=>'Cuello Vagina','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-sm-4">
            <?php echo $this->Form->input('coloscopia', array('label'=>'Coloscopia','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-sm-4">
            <?php echo $this->Form->input('ano_ straight', array('label'=>'Ano','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-sm-4">
            <?php echo $this->Form->input('head_neck', array('label'=>'Cabeza Cuello','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-sm-4">
            <?php echo $this->Form->input('touch_tumor', array('label'=>'Tacto Tumor','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-sm-4">
            <?php echo $this->Form->input('form_tumor', array('label'=>'Forma Tumor','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-sm-4">
            <?php echo $this->Form->input('surface_tumor', array('label'=>'Superfice Tumor','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-sm-4">
            <?php echo $this->Form->input('contour_tumor', array('label'=>'Contorno Tumor','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-sm-4">
            <?php echo $this->Form->input('axis_tumor', array('label'=>'Eje Tumor','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-sm-4">
            <?php echo $this->Form->input('consistency_tumor', array('label'=>'Consistencia T.','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-sm-4">
            <?php echo $this->Form->input('laringoscopia', array('label'=>'Laringoscopia','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-sm-4">
            <?php echo $this->Form->input('menarguia', array('label'=>'Menarguia','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-sm-4">
            <?php echo $this->Form->input('reglas', array('label'=>'Reglas','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-sm-4">
            <?php echo $this->Form->input('prs', array('label'=>'P R S','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-sm-4">
            <?php echo $this->Form->input('companion_sexual', array('label'=>'Compañero Sexual','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-sm-4">
            <?php echo $this->Form->input('distance_cap', array('label'=>'Distancia C.A.P','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-sm-4">
            <?php echo $this->Form->input('gestas', array('label'=>'Gestas','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-sm-4">
            <?php echo $this->Form->input('rsi', array('label'=>'R.S.I','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-sm-4">
            <?php echo $this->Form->input('paras', array('label'=>'Paras','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-sm-4">
            <?php echo $this->Form->input('abdomen', array('label'=>'Abdomen','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-sm-4">
            <?php echo $this->Form->input('misbirth', array('label'=>'Abortos','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-sm-4">
            <?php echo $this->Form->input('gynecological_vulva', array('label'=>'Vulva','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-sm-4">
            <?php echo $this->Form->input('cesareans', array('label'=>'Cesareas','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-sm-4">
            <?php echo $this->Form->input('age_birth_one', array('label'=>'E.P.P','type'=>'text','onkeypress'=>'return EdadParto(event);','maxlength'=>'3','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-sm-12">
            <?php echo $this->Form->input('diagnostico', array('label'=>'Diagnostico','class' => 'form-control')); ?>
					</div><!-- .form-group -->
          <center>
					<?php echo $this->Form->submit('Añadir', array('class' => 'btn btn-large btn-primary')); ?>
        </center>
				</fieldset>

						<?php echo $this->Form->end(); ?>

		</div><!-- /.form -->

	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->
<div class="btn-group btn-group-justified col-sm-4">

  <?php echo $this->Html->link(__('Nuevo Antecedente'), array('controller'=>'antecedents','action' => 'add'), array('class' => 'btn btn-info')); ?>
  <?php echo $this->Html->link(__('Lista de Diagnosticos'), array('action' => 'index'), array('class' => 'btn btn-danger')); ?>
  <?php echo $this->Html->link(__('Nuevo Paciente'), array('controller' => 'people', 'action' => 'add'), array('class' => 'btn btn-primary')); ?>

</div>
