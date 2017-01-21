<!-- MEDICAL_MASTER
Software Medico Asistencial
Sistema de Información: Desarrollado en CAKEPHP 2.6
Aplicativo Movil: Desarrollado en IONIC 2
Licencia Privativa.
Desarrolladores:
Ing. Guillermo Ochoa Torres
Ing. Emanuel Torres Clemente
Lugar: Maracay - Estado Aragua - Venezuela
Version: 1.1
Año: 2016 - 2017 -->
<?php $this->layout = 'p_login'; ?>

 <div class="wrapper">


        <div class="logo">

        </div>

        <div class="form-signin zoom">
          <!-- <marquee loop="1" SCROLLAMOUNT="25" behavior = "slide" direction="right"> -->

              <h3 class="title">Login</h3>
              <!-- </marquee> -->
              <div class="col-xs-12">
                    <?php echo $this->Form->create('User'); ?>
                        <fieldset>

                            <?php
                              echo $this->Form->input('username',array('label'=>'Usuario','class'=>'form-control'));

                              echo $this->Form->input('password',array('label'=>'Contraseña','class'=>'form-control'));
                            ?>
                        </fieldset>

              </div>

              <div class="col-xs-12">
                  <label class="checkbox">
                    <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Recuerdame
                  </label>
              </div>
               <center>
                  <button class="btn btn-md btn-primary" type="submit">Entrar</button>
                  <!-- <button class="btn btn-md btn-danger" type="submit">Limpiar</button> -->
              </center>

        </div>
        <br><br>


</div>
<footer id="footer-zone">
    <center>
      <h4 class="developers">Developers: Emanuel Torres & Guillermo Ochoa T.</h4>
  </center>
</footer>
