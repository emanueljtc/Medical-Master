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
			<h3 class="box-title"><?php echo __('Editar Historia'); ?></h3>
			</div>
			<div class="box-body table-responsive">

			<?php echo $this->Form->create('History', array('role' => 'form')); ?>

				<fieldset>

										<div class="form-group">
						<?php echo $this->Form->input('id', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					
          <label>Fecha de Nacimiento:</label>

          <div class="form-group">
            <?php echo $this->Form->input('born_date', array('label'=>'','placeholder' => '','class'=>'form-control','id'=>'f_date2','readonly'=>'readonly')); ?>
              <button id="fnac"><span class="input-group-addon glyphicon glyphicon-calendar"></span></button>
					</div>
					<div class="form-group">
            <?php echo $this->Form->input('age', array(
            'label'=>'','placeholder' => 'Edad','type'=>'text','class'=>'form-control','onkeypress'=>'return IsEdad(event);','maxlength'=>'3','id'=>'edad','readonly'=>'readonly','onClick'=>'calcularEdad();'
              )); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('weight', array('label'=>'Peso','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('height', array('label'=>'Altura','class' => 'form-control')); ?>
					</div><!-- .form-group -->

					<?php echo $this->Form->submit('Editar', array('class' => 'btn btn-large btn-primary')); ?>

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
