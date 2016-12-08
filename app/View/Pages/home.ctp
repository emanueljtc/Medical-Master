<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <div class="content-wrapper">
    			<div class="container-fluid">

    				<div class="row">
    					<div class="col-md-12">
    					<div class="col-md-12">
                <div class="page-title">
                <div class="page-title">
                    <marquee loop="1" SCROLLAMOUNT="25" behavior = "slide" direction="left">

                          <Titulo>
                              <h3>Sistema de Gestion de Historias Médicas</h3><hr>
                          </Titulo>
              				</marquee>
                </div>
    						<div class="row">
    							<div class="col-md-12">
    								<div class="row">
    									<div class="col-md-3">
    										<div class="panel panel-default">
    											<div class="panel-body bk-primary text-light">
    												<div class="stat-panel text-center">
    													<div class="stat-panel-number h1 ">

                                  <i class="glyphicon glyphicon-user"></i>
                                </div>
    													<div class="stat-panel-title text-uppercase">
                                  <?php echo $this->Html->link(__('Pacientes'), array('controller' => 'personals', 'action' => 'index'),
                                    array('class'=>'stat-panel-title text-uppercase')); ?>
                              </div>
    												</div>
    											</div>
                          <center>
    											<!-- <a href="http://127.0.0.1/medical_master/people" class="block-anchor panel-footer">Acceder <i class="fa fa-arrow-right"></i></a> -->
                        </center>
                        </div>
    									</div>
    									<div class="col-md-3">
    										<div class="panel panel-default">
    											<div class="panel-body bk-success text-light">
    												<div class="stat-panel text-center">
    													<div class="stat-panel-number h1 ">
                                  <i class="glyphicon glyphicon-paperclip"></i>
                              </div>
    													<div class="stat-panel-title text-uppercase">
                                <?php echo $this->Html->link(__('Historias'), array('controller' => 'histories', 'action' => 'index')); ?>
                              </div>
    												</div>
    											</div>
    											<!-- <a href="http://127.0.0.1/system_security/positions" class="block-anchor panel-footer text-center">Acceder &nbsp; <i class="fa fa-arrow-right"></i></a> -->
    										</div>
    									</div>
    									<div class="col-md-3">
    										<div class="panel panel-default">
    											<div class="panel-body bk-info text-light">
    												<div class="stat-panel text-center">
    													<div class="stat-panel-number h1 ">
                                  <i class="glyphicon glyphicon-glass"></i>
                              </div>
    													<div class="stat-panel-title text-uppercase">
                              <?php echo $this->Html->link(__('Diagnosticos'), array('controller' => 'diagnostics', 'action' => 'index')); ?>
                              </div>
    												</div>
    											</div>
    											<!-- <a href="http://127.0.0.1/system_security/wakes" class="block-anchor panel-footer text-center">Acceder &nbsp; <i class="fa fa-arrow-right"></i></a> -->
    										</div>
    									</div>
    									<div class="col-md-3">
    										<div class="panel panel-default">
    											<div class="panel-body bk-warning text-light">
    												<div class="stat-panel text-center">
    													<div class="stat-panel-number h1 ">
                                <i class="glyphicon glyphicon-lock"></i>
                              </div>
    													<div class="stat-panel-title text-uppercase">
                                <?php echo $this->Html->link(__('Usuarios'), array('controller' => 'users', 'action' => 'index')); ?>
                              </div>
    												</div>
    											</div>
    											<!-- <a href="http://127.0.0.1/system_security/users" class="block-anchor panel-footer text-center">Acceder &nbsp; <i class="fa fa-arrow-right"></i></a> -->
    										</div>
    									</div>
    								</div>
    							</div>
    						</div>



	</head>


	<body>

<div id="container" style="min-width: 310px; height: 500px; max-width: 600px; margin: 0 auto"></div>
