<?php $this->layout = 'p_login'; ?>

</style>
 <div class="wrapper">



        <div class="form-signin zoom">
          <!-- <marquee loop="1" SCROLLAMOUNT="25" behavior = "slide" direction="right"> -->

              <h3 class="title">____Medical_Master____</h3>
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
              <br><br><br><br><br><br>
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
          <footer id="footer">
              <center>
                <h4 class="developers">Desarrollado por Emanuel Torres C. & Guillermo Ochoa T.</h4>
            </center>
          </footer>

</div>
