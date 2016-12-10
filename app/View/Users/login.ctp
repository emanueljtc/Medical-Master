<?php $this->layout = 'p_login'; ?>
<style>
@import "bourbon";
@import "bourbon";

body {
  background: -moz-radial-gradient(center, ellipse cover, rgba(24,118,205,1) 0%, rgba(20,92,173,1) 75%, rgba(20,92,173,1) 85%);
  background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, rgba(24,118,205,1)), color-stop(75%, rgba(20,92,173,1)), color-stop(85%, rgba(20,92,173,1)));
  background: -webkit-radial-gradient(center, ellipse cover, rgba(24,118,205,1) 0%, rgba(20,92,173,1) 75%, rgba(20,92,173,1) 85%);
  background: -o-radial-gradient(center, ellipse cover, rgba(24,118,205,1) 0%, rgba(20,92,173,1) 75%, rgba(20,92,173,1) 85%);
  background: -ms-radial-gradient(center, ellipse cover, rgba(24,118,205,1) 0%, rgba(20,92,173,1) 75%, rgba(20,92,173,1) 85%);
  background: radial-gradient(ellipse at center, rgba(24,118,205,1) 0%, rgba(20,92,173,1) 75%, rgba(20,92,173,1) 85%);

}

.wrapper {
  margin-top: 206px;
  margin-bottom: 80px;
}

.form-signin {
  max-width: 437px;
  padding: 15px 27px 24px;
  margin: 0 auto;
  background-color: rgb(255, 255, 255);
      -webkit-box-shadow: 14px 5px 43px 3px rgba(0,0,0,0.83);
      -moz-box-shadow: 14px 5px 43px 3px rgba(0,0,0,0.83);
      box-shadow: 14px 5px 43px 3px rgba(0,0,0,0.83);
      -webkit-border-top-left-radius: 45px;
      -webkit-border-top-right-radius: 12px;
      -webkit-border-bottom-right-radius: 73px;
      -webkit-border-bottom-left-radius: 12px;
      -moz-border-radius-topleft: 45px;
      -moz-border-radius-topright: 12px;
      -moz-border-radius-bottomright: 73px;
      -moz-border-radius-bottomleft: 12px;
      border-top-left-radius: 45px;
      border-top-right-radius: 12px;
      border-bottom-right-radius: 73px;
      border-bottom-left-radius: 12px;
      .form-signin-heading,
      .checkbox {
        margin-bottom: 30px;
      }
      .checkbox {
    font-weight: normal;
    }
  .form-control {
    position: relative;
    font-size: 16px;
    height: auto;
    padding: 10px;
  @include box-sizing(border-box) &:focus {
  z-index: 2;
  }
  }
  input[type="text"] {
    margin-bottom: -1px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
  }
  input[type="password"] {
    margin-bottom: 20px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
  }

}
</style>
 <div class="wrapper">



        <div class="form-signin">
          <marquee loop="1" SCROLLAMOUNT="25" behavior = "slide" direction="right">

              <h3 style="font-size:24">____Medical_Master____</h3>
              </marquee>
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

                <button class="btn btn-lg btn-primary btn-block" type="submit">Acceder</button>



        </div>
        <br><br><br>
        <center>
    <h4>Hecho por Emanuel Torres C.</h4>
  </center>
</div>
