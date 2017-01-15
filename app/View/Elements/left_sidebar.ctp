
<!-- Left side column. contains the logo and sidebar -->
<aside class="left-side sidebar-offcanvas">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <!-- <?php echo $this->Html->image('../files/user/foto/'.$user['User']['foto_dir'].'/'.'thumb_'.$user['User']['foto'], array('class' => 'img-circle')); ?> -->
                    <?php  if($current_user['group_id'] == '1'):                 ?>
                      <?= $this->Html->image('avatar04.png', array('class' => 'img-circle')); ?>
                    <?php endif; ?>
                    <?php  if($current_user['group_id'] == '2'):                 ?>
                      <?= $this->Html->image('avatar3.png', array('class' => 'img-circle')); ?>
                    <?php endif; ?>
                    <?php  if($current_user['group_id'] == '3'):                 ?>
                      <?= $this->Html->image('avatar5.png', array('class' => 'img-circle')); ?>
                    <?php endif; ?>
            </div>
            <div class="pull-left info">
              <br>

                <p><?php	echo $this->Session->read('Auth.User.full_name')?></p>


            </div>
        </div>
        <!-- search form -->
       <!-- <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Buscar..."/>
                <span class="input-group-btn">
                    <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>-->
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="active">
                <?= $this->Html->link('<i class="fa fa-dashboard"></i> <span>Inicio</span>', '/', array('escape' => false)); ?>
            </li>

            <li>
            <li class="treeview">
                <a href="#">
                    <i class="glyphicon glyphicon-user"></i>
                    <span>Datos Filiatorios</span>
                    <i class="fa fa-angle-left pull-right"></i>

                </a>
                <ul id="id" class="treeview-menu">
                    <li class="menu">
                        <?php echo $this->Html->link(__(' Pacientes Registrados'), array('controller' => 'people', 'action' => 'index'), array('class'=>'fa fa-angle-double-right')); ?>
                    </li>
                    <li class="menu">
                      <?php echo $this->Html->link(__(' Nuevo Paciente'), array('controller' => 'people', 'action' => 'add'), array('class'=>'fa fa-angle-double-right')); ?>
                  </li>
                </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="glyphicon glyphicon-paperclip"></i>
                <span>Historias</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul id="id" class="treeview-menu">
                <li class="menu">
                  <?php echo $this->Html->link(__(' Historias Registradas'), array('controller' => 'histories', 'action' => 'index'), array('class'=>'fa fa-angle-double-right')); ?>
                </li>
                <li class="menu">
                  <?php echo $this->Html->link(__(' Nueva Historia'), array('controller' => 'histories', 'action' => 'add'), array('class'=>'fa fa-angle-double-right')); ?>
                </li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="glyphicon glyphicon-briefcase"></i>
                <span>Antecedentes</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul id="id" class="treeview-menu">
                <li class="menu">
                  <?php echo $this->Html->link(__(' Antecedentes Registrados'), array('controller' => 'antecedents', 'action' => 'index'), array('class'=>'fa fa-angle-double-right')); ?>
                </li>
                <li class="menu">
                  <?php echo $this->Html->link(__(' Nuevo Antecedentes'), array('controller' => 'antecedents', 'action' => 'add'), array('class'=>'fa fa-angle-double-right')); ?>
                </li>
              </ul>
            </li>
            <?php  if($current_user['group_id'] == '3' or '1'): ?>

            <li class="treeview">
              <a href="#">
                  <i class="glyphicon glyphicon-glass"></i>
                  <span>Diagnosticos</span>
                  <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul id="id" class="treeview-menu">
                  <li class="menu">
                      <?php echo $this->Html->link(__(' Diagnosticos Registrados'), array('controller' => 'diagnostics', 'action' => 'index'), array('class'=>'fa fa-angle-double-right')); ?>
                  </li>
                  <li class="menu">
                    <?php echo $this->Html->link(__(' Nuevo Diagnostico'), array('controller' => 'diagnostics', 'action' => 'add'), array('class'=>'fa fa-angle-double-right')); ?>
                </li>
              </ul>
            </li>
          <?php endif; ?>
          <?php  if($current_user['group_id'] == '3' or '1' ): ?>

            <li class="treeview">
              <a href="#">
                  <i class="glyphicon glyphicon-file"></i>
                  <span>Recipes</span>
                  <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul id="id" class="treeview-menu">
                  <li class="menu">
                      <?php echo $this->Html->link(__(' Recipes Registrados'), array('controller' => 'prescriptions', 'action' => 'index'), array('class'=>'fa fa-angle-double-right')); ?>
                  </li>
                  <li class="menu">
                    <?php echo $this->Html->link(__(' Nuevo Recipe'), array('controller' => 'prescriptions', 'action' => 'add'), array('class'=>'fa fa-angle-double-right')); ?>
                </li>
              </ul>
            </li>
            <?php endif; ?>
            <!-- <?php  if($current_user['group_id'] == '3' ): ?>

            <li class="treeview">
              <a href="#">
                  <i class="glyphicon glyphicon-list-alt"></i>
                  <span>Indicaciones</span>
                  <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul id="id" class="treeview-menu">
                  <li class="menu">
                      <?php echo $this->Html->link(__(' Indicaciones Registradas'), array('controller' => 'indications', 'action' => 'index'), array('class'=>'fa fa-angle-double-right')); ?>
                  </li>
                  <li class="menu">
                    <?php echo $this->Html->link(__(' Nueva Indicación'), array('controller' => 'indications', 'action' => 'add'), array('class'=>'fa fa-angle-double-right')); ?>
                </li>
              </ul>
            </li>
          <?php endif; ?> -->
          <?php  if($current_user['group_id'] == '3' or '1' ): ?>
            <li class="treeview">
              <a href="#">
                  <i class="glyphicon glyphicon-tasks"></i>
                  <span>Estudios</span>
                  <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul id="id" class="treeview-menu">
                  <li class="menu">
                      <?php echo $this->Html->link(__('Estudios registrados'), array('controller' => 'studies', 'action' => 'index'), array('class'=>'fa fa-angle-double-right')); ?>
                  </li>
                  <li class="menu">
                    <?php echo $this->Html->link(__(' Nuevo Estudio'), array('controller' => 'studies', 'action' => 'add'), array('class'=>'fa fa-angle-double-right')); ?>
                </li>
              </ul>
            </li>
          <?php endif; ?>

            <li class="treeview">
              <a href="#">
                  <i class="glyphicon glyphicon-calendar"></i>
                  <span>Citas</span>
                  <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul id="id" class="treeview-menu">
                  <li class="menu">
                      <?php echo $this->Html->link(__(' Citas Registradas'), array('controller' => 'citations', 'action' => 'index'), array('class'=>'fa fa-angle-double-right')); ?>
                  </li>
                  <li class="menu">
                    <?php echo $this->Html->link(__(' Nueva Cita'), array('controller' => 'citations', 'action' => 'add'), array('class'=>'fa fa-angle-double-right')); ?>
                </li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                  <i class="glyphicon glyphicon-usd"></i>
                  <span>Pagos</span>
                  <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul id="id" class="treeview-menu">
                  <li class="menu">
                      <?php echo $this->Html->link(__(' Pagos Registrados'), array('controller' => 'charges', 'action' => 'index'), array('class'=>'fa fa-angle-double-right')); ?>
                  </li>
                  <?php  if($current_user['group_id'] == '2' ): ?>

                  <li class="menu">
                    <?php echo $this->Html->link(__(' Nuevo Pago'), array('controller' => 'charges', 'action' => 'add'), array('class'=>'fa fa-angle-double-right')); ?>
                </li>
              <?php endif; ?>
              <?php  if($current_user['group_id'] == '1' ): ?>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                  <i class="glyphicon glyphicon-pushpin"></i>
                  <span>Usuarios</span>
                  <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul id="id" class="treeview-menu">
                  <li class="menu">
                      <?php echo $this->Html->link(__(' Usuarios'), array('controller' => 'users', 'action' => 'index'), array('class'=>'fa fa-angle-double-right')); ?>
                  </li>
                  <li class="menu">
                    <?php echo $this->Html->link(__(' Grupos'), array('controller' => 'groups', 'action' => 'index'), array('class'=>'fa fa-angle-double-right')); ?>
                </li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                  <i class="glyphicon glyphicon-tasks"></i>
                  <span>Extras</span>
                  <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul id="id" class="treeview-menu">
                  <li class="menu">
                      <?php echo $this->Html->link(__(' Nacionalidades'), array('controller' => 'nationalities', 'action' => 'index'), array('class'=>'fa fa-angle-double-right')); ?>
                  </li>
                  <li class="menu">
                    <?php echo $this->Html->link(__(' Estado Citas'), array('controller' => 'datecitations', 'action' => 'index'), array('class'=>'fa fa-angle-double-right')); ?>
                </li>
                <li class="menu">
                  <?php echo $this->Html->link(__(' Backup'), array('controller'=>'users','action'=>'backup'), array('class' => 'fa fa-angle-double-right')); ?>
                </li>
              </ul>
            </li>
            <?php endif; ?>
            <!-- <li>
                <a href="pages/mailbox.html">
                    <i class="fa fa-envelope"></i> <span>Mailbox</span>
                    <small class="badge pull-right bg-yellow">12</small>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-folder"></i> <span>Examples</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/examples/invoice.html"><i class="fa fa-angle-double-right"></i> Invoice</a></li>
                    <li><a href="pages/examples/login.html"><i class="fa fa-angle-double-right"></i> Login</a></li>
                    <li><a href="pages/examples/register.html"><i class="fa fa-angle-double-right"></i> Register</a></li>
                    <li><a href="pages/examples/lockscreen.html"><i class="fa fa-angle-double-right"></i> Lockscreen</a></li>
                    <li><a href="pages/examples/404.html"><i class="fa fa-angle-double-right"></i> 404 Error</a></li>
                    <li><a href="pages/examples/500.html"><i class="fa fa-angle-double-right"></i> 500 Error</a></li>
                    <li><a href="pages/examples/blank.html"><i class="fa fa-angle-double-right"></i> Blank Page</a></li>
                </ul>
            </li> -->
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
