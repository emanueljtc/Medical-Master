<script>
function calcularEdad()
{
    var fecha=document.getElementById("f_date2").value;

        // Si la fecha es correcta, calculamos la edad
        var values=fecha.split("-");
        var dia = values[0];
        var mes = values[1];
        var ano = values[2];


        // cogemos los valores actuales
        var fecha_hoy = new Date();
        var ahora_ano = fecha_hoy.getYear();
        var ahora_mes = fecha_hoy.getMonth();
        var ahora_dia = fecha_hoy.getDate();

        var otra_fecha = new Date();
        var anoa = otra_fecha.getFullYear()

     if (ano < anoa){
        // realizamos el calculo
        var edad = (ahora_ano + 1900) - ano;
        if ( ahora_mes < (mes - 1))
        {
            edad--;
        }
        if (((mes - 1) == ahora_mes) && (ahora_dia < dia))
        {
            edad--;
        }
        if (edad > 1900)
        {
            edad -= 1900;
        }
    if(edad == 1){
        document.getElementById("edad").value=edad;
    }else{
    document.getElementById("edad").value=edad;
      }
  }else if(ano >= anoa){

    document.getElementById("edad").value="Edad Incorrecta";

    }
}
</script>

<style>
            .estatus{
              display:none;
            }
</style>
<div class="row">
    <div class="col-xs-6 col-xs-offset-3">
		<div class="box box-primary">
			<div class="box-header">
			<h3 class="box-title"><?php echo __('REGISTRO DE DATOS FILIARES DEL PACIENTE'); ?></h3>
			</div>
			<div class="box-body table-responsive">

			<?php echo $this->Form->create('Person', array('role' => 'form')); ?>

				<fieldset>

          <div class="form-group col-sm-6">
						<?php echo $this->Form->input('name', array('type'=>'text','label'=>'Nombres','onkeypress'=>'return IsNombre(event);','maxlength'=>'60','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-sm-6">
						<?php echo $this->Form->input('last_name', array('label'=>'Apellidos','class' => 'form-control','onkeypress'=>'return IsApellidos(event);','maxlength'=>'60')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-sm-6">
						<?php echo $this->Form->input('dni', array('type'=>'text','label'=>'Cedula','class' => 'form-control','onkeypress'=>'return IsCedula(event);','maxlength'=>'60')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-sm-6 hiden">
						<?php echo $this->Form->input('gender', array('label'=>'Genero','type'=>'select','options'=>array(''=>'[SELECCIONE SEXO]','Femenino'=>'Femenino','Masculino'=>'Masculino'),'class' => 'form-control')); ?>
					</div><!-- .form-group -->
          <div class="form-group col-sm-4">
            <?php echo $this->Form->input('born_date', array('label'=>'Nacimiento','placeholder' => '','class'=>'form-control','id'=>'f_date2','readonly'=>'readonly')); ?>
              <button id="fnac"><span class="input-group-addon glyphicon glyphicon-calendar"></span></button>

					</div>
					<div class="form-group col-sm-4">
            <?php echo $this->Form->input('age', array(
            'label'=>'Edad','placeholder' => 'Edad','type'=>'text','class'=>'form-control','onkeypress'=>'return IsEdad(event);','maxlength'=>'3','id'=>'edad','readonly'=>'readonly','onClick'=>'calcularEdad();'
              )); ?>
					</div><!-- .form-group -->
					<div class="form-group col-sm-2">
						<?php echo $this->Form->input('weight', array('type'=>'text','label'=>'Peso','placeholder'=>'KG','class' => 'form-control','onkeypress'=>'return IsCedula(event);','maxlength'=>'60')); ?>

          </div><!-- .form-group -->
					<div class="form-group col-sm-2">

						<?php echo $this->Form->input('height', array('type'=>'text','label'=>'Altura','placeholder'=>'CM','class' => 'form-control','onkeypress'=>'return IsCedula(event);','maxlength'=>'60')); ?>
              <hr />
          </div><!-- .form-group -->

					<div class="form-group col-sm-4">

						<?php echo $this->Form->input('phone', array('label'=>'Tel Personal','class' => 'form-control','onkeypress'=>'return IsTelefono(event);','maxlength'=>'11')); ?>
					</div><!-- .form-group -->
          <div class="form-group col-sm-4">
						<?php echo $this->Form->input('phone_dos', array('label'=>'Tel_Emergencia','class' => 'form-control','onkeypress'=>'return IsTelefono(event);','maxlength'=>'11')); ?>
					</div><!-- .form-group -->
          <div class="form-group col-sm-4">
            <?php echo $this->Form->input('nationality_id', array('label'=>'Nacionalidad','class' => 'form-control')); ?>
          </div><!-- .form-group -->
					<div class="form-group col-sm-6">
						<?php echo $this->Form->input('email', array('label'=>'Correo Electronico','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-sm-4">
						<?php echo $this->Form->input('pass_app', array('label'=>'Pass App','class' => 'form-control','type'=>'password')); ?>
					</div><!-- .form-group -->
          <div class="form-group col-sm-12">
						<?php echo $this->Form->input('address', array('label'=>'Direccion','class' => 'form-control')); ?>

					</div><!-- .form-group -->
                <script type="text/javascript">
                    function confirmar() {
                        var r = confirm("¿Desea Añadir el Paciente?")
                    if(r==true) {

                      document.Person.submit()

                    }else{
                      return false;
                    }

                    }
                    </script>
          <div class="form-group col-sm-12">
            <center>
            <?php echo $this->Form->submit('Añadir', array('class' => 'btn btn-large btn-primary','onClick'=>'confirmar();')); ?>
          </center>
					</div><!-- .form-group -->

				</fieldset>

						<?php echo $this->Form->end(); ?>

		</div><!-- /.form -->

	</div><!-- /#page-content .col-sm-9 -->
  <div class="btn-group btn-group-justified col-sm-4">

          <?php echo $this->Html->link(__('Nuevo Antecedente'), array('controller'=>'antecedents','action' => 'add'), array('class' => 'btn btn-info')); ?>
          <?php echo $this->Html->link(__('Lista de Historias'), array('controller' => 'histories','action' => 'index'), array('class' => 'btn btn-danger')); ?>
          <?php echo $this->Html->link(__('Nueva Historia'), array('controller' => 'histories', 'action' => 'add'), array('class' => 'btn btn-primary')); ?>

  </div>

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
