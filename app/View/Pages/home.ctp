<!DOCTYPE HTML>
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
Año: 2016 - 2017
-->
<html>
	<head >
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>

<body>
	<div class="content-wrapper">
				<div class="container-fluid">

					<div class="row treeview">
						<div class="col-md-12">
						<div class="col-md-12">
							<div class="page-title">
							<div class="page-title">
									<marquee loop="1" SCROLLAMOUNT="25" behavior = "slide" direction="left">

												<Titulo>
														<h3>Bienvenido a Medical Master  </h3><hr>
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
																<?php echo $this->Html->link(__('Pacientes'), array('controller' => 'people', 'action' => 'index'),
																	array('class'=>'stat-panel-title text-uppercase')); ?>
														</div>
													</div>
												</div>
												<center>
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
											</div>
										</div>
												<?php  if($current_user['group_id'] == '1'):                 ?>
												<div class="col-md-3">
													<div class="panel panel-default">
														<div class="panel-body bk-warning text-light">
															<div class="stat-panel text-center">
																<div class="stat-panel-number h1 ">
																	<i class="glyphicon glyphicon-eye-open"></i>
																</div>
																<div class="stat-panel-title text-uppercase">
																	<?php echo $this->Html->link(__('Grupos'), array('controller' => 'groups', 'action' => 'index')); ?>
																</div>
															</div>
														</div>
													</div>
												</div>
											<?php endif; ?>
											<?php  if($current_user['group_id'] == '2'):                 ?>
											<div class="col-md-3">
												<div class="panel panel-default">
													<div class="panel-body bk-warning text-light">
														<div class="stat-panel text-center">
															<div class="stat-panel-number h1 ">
																<i class="glyphicon glyphicon-calendar"></i>
															</div>
															<div class="stat-panel-title text-uppercase">
																<?php echo $this->Html->link(__('Citas'), array('citations' => 'diagnostics', 'action' => 'index')); ?>
															</div>
														</div>
													</div>
												</div>
											</div>
										<?php endif; ?>
										<?php  if($current_user['group_id'] == '3'):                 ?>
										<div class="col-md-3">
											<div class="panel panel-default">
												<div class="panel-body bk-warning text-light">
													<div class="stat-panel text-center">
														<div class="stat-panel-number h1 ">
															<i class="glyphicon glyphicon-briefcase"></i>
														</div>
														<div class="stat-panel-title text-uppercase">
															<?php echo $this->Html->link(__('Antecedentes'), array('controller' => 'antecedents', 'action' => 'index')); ?>
														</div>
													</div>
												</div>
											</div>
										</div>
									<?php endif; ?>

										<?php  if($current_user['group_id'] == '1'):                 ?>
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
											</div>
										</div>
									<?php endif; ?>
									<?php  if($current_user['group_id'] == '2'):                 ?>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-warning text-light">
												<div class="stat-panel text-center">
													<div class="stat-panel-number h1 ">
														<i class="glyphicon glyphicon-usd"></i>
													</div>
													<div class="stat-panel-title text-uppercase">
														<?php echo $this->Html->link(__('Pagos'), array('charges' => 'diagnostics', 'action' => 'index')); ?>
													</div>
												</div>
											</div>
										</div>
									</div>
								<?php endif; ?>
								<?php  if($current_user['group_id'] == '3'):                 ?>
								<div class="col-md-3">
									<div class="panel panel-default">
										<div class="panel-body bk-warning text-light">
											<div class="stat-panel text-center">
												<div class="stat-panel-number h1 ">
													<i class="glyphicon glyphicon-glass"></i>
												</div>
												<div class="stat-panel-title text-uppercase">
													<?php echo $this->Html->link(__('Diagnosticos'), array('controller' => 'diagnostics', 'action' => 'index')); ?>
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php endif; ?>

									</div>
								</div>
							</div>
	<div id="container" class="divcontainer"></div>
	</body>
