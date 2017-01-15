
<div class="row">
    <div class="col-xs-12">

		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php  echo __('Vista Paciente'); ?></h3>
				<div class="box-tools pull-right">
	                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i> Editar'), array('action' => 'edit', $person['Person']['id']), array('class' => 'btn btn-primary', 'escape' => false)); ?>
	            </div>
			</div>

			<div class="box-body table-responsive">
                <table id="People" class="table table-bordered table-striped">
			<tbody>
					 <tr>
              <td><strong>Nombres <?php echo __(''); ?></strong></td>
          		<td>
          			<?php echo h($person['Person']['name']); ?>
          			&nbsp;
          		</td>
          </tr>
          <tr>
            <td><strong>Apellidos <?php echo __(''); ?></strong></td>
        		<td>
        			<?php echo h($person['Person']['last_name']); ?>
        			&nbsp;
        		</td>
          </tr>

          <tr>
            <td><strong>Cedula <?php echo __(''); ?></strong></td>
        		<td>
        			<?php echo h($person['Person']['dni']); ?>
        			&nbsp;
        		</td>
          </tr>

          <tr>
              <td><strong>Genero <?php echo __(''); ?></strong></td>
          		<td>
          			<?php echo h($person['Person']['gender']); ?>
          			&nbsp;
          		</td>
          </tr>

          <tr>
            <td><strong>Fecha_Nacimiento <?php echo __(''); ?></strong></td>
          		<td>
          			<?php echo h($person['Person']['born_date']); ?>
          			&nbsp;
          		</td>
          </tr>

          <tr>
            <td><strong>Edad <?php echo __(''); ?></strong></td>
          		<td>
          			<?php echo h($person['Person']['age']); ?>
          			&nbsp;
          		</td>
          </tr>

          <tr>
            <td><strong>Telefono <?php echo __(''); ?></strong></td>
          		<td>
          			<?php echo h($person['Person']['phone']); ?>
          			&nbsp;
          		</td>
          </tr>

            <tr>
              <td><strong>Telefono_Emergencia <?php echo __(''); ?></strong></td>
            		<td>
            			<?php echo h($person['Person']['phone_dos']); ?>
            			&nbsp;
            		</td>
            </tr>

        <tr>
          <td><strong>Peso <?php echo __(''); ?></strong></td>
        		<td>
        			<?php echo h($person['Person']['weight']); ?>
        			&nbsp;
        		</td>
        </tr>

        <tr>
          	<td><strong>Alto <?php echo __(''); ?></strong></td>
        		<td>
        			<?php echo h($person['Person']['height']); ?>
        			&nbsp;
        		</td>
        </tr>

        <tr>
          <td><strong>Correo Electronico <?php echo __(''); ?></strong></td>
        		<td>
        			<?php echo h($person['Person']['email']); ?>
        			&nbsp;
        		</td>
        </tr>

        <tr>
          <td><strong>Nacionalidad <?php echo __(''); ?></strong></td>
        		<td>
        			<?php echo $this->Html->link($person['Nationality']['nacionalidad'], array('controller' => 'nationalities', 'action' => 'view', $person['Nationality']['id']), array('class' => '')); ?>
        			&nbsp;
        		</td>
        </tr>
        <tr>
          	<td><strong><?php echo __('Pass App'); ?></strong></td>
        		<td>
        			<?php echo h($person['Person']['pass_app']); ?>
        			&nbsp;
        		</td>
        <!-- </tr><tr>		<td><strong><?php echo __('Token'); ?></strong></td> -->
        		<!-- <td>
        			<?php echo h($person['Person']['token']); ?>
        			&nbsp;
        		</td> -->
        </tr>
        <tr>
          	<td><strong>Direccion <?php echo __(''); ?></strong></td>
        		<td>
        			<?php echo h($person['Person']['address']); ?>
        			&nbsp;
        		</td>
        </tr>

    </tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->

		</div><!-- /.view -->
    <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title"><?php echo __('Historias Relacionadas'); ?></h3>
                  <div class="box-tools pull-right">
                    <?php echo $this->Html->link('<i class="glyphicon glyphicon-plus"></i> '.__('Nueva Historia'), array('controller' => 'histories', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>					</div><!-- /.actions -->
                </div>
                <?php if (!empty($person['History'])): ?>

                  <div class="box-body table-responsive">
                    <table class="table table-bordered table-striped">
                      <thead>
                        <tr>
                              <th class="text-center"><?php echo __('N° Historia'); ?></th>

                          <th class="text-center"><?php echo __('Acciones'); ?></th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php
                            $i = 0;
                            foreach ($person['History'] as $history): ?>
            <tr>
              <td class="text-center"><?php echo $history['id']; ?></td>
              <!-- <td class="text-center"><?php echo $history['person_id']; ?></td> -->
              <!-- <td class="text-center"><?php echo $history['antecedent_id']; ?></td> -->

              <td class="text-center">
                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('controller' => 'histories', 'action' => 'view', $history['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'view')); ?>
                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('controller' => 'histories', 'action' => 'edit', $history['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'edit')); ?>
                <?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('controller' => 'histories', 'action' => 'delete', $history['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'delete'), __('Are you sure you want to delete # %s?', $history['id'])); ?>
              </td>
            </tr>
          <?php endforeach; ?>
                      </tbody>
                    </table><!-- /.table table-striped table-bordered -->
                  </div><!-- /.table-responsive -->

                <?php endif; ?>



    </div><!-- /.related -->


			<div class="box box-primary">
				<div class="box-header">
					<h3 class="box-title"><?php echo __('Antecedentes Relacionados'); ?></h3>
					<div class="box-tools pull-right">
						<?php echo $this->Html->link('<i class="glyphicon glyphicon-plus"></i> '.__('Nuevo Antecedente'), array('controller' => 'antecedents', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>					</div><!-- /.actions -->
				</div>
				<?php if (!empty($person['Antecedent'])): ?>

					<div class="box-body table-responsive">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
											<th class="text-center"><?php echo __('N° Antecendente'); ?></th>
                      		<!-- <th class="text-center"><?php echo __('Paciente'); ?></th> -->
                      		<th class="text-center"><?php echo __('Antecedente'); ?></th>
                      		<th class="text-center"><?php echo __('Origen'); ?></th>
                      		<th class="text-center"><?php echo __('Padecimento'); ?></th>
                      		<th class="text-center"><?php echo __('Familia'); ?></th>
                      		<th class="text-center"><?php echo __('Sirugias'); ?></th>
                      		<!-- <th class="text-center"><?php echo __('Creado'); ?></th> -->
                      		<!-- <th class="text-center"><?php echo __('Modificado'); ?></th> -->
									<th class="text-center"><?php echo __('Acciones'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($person['Antecedent'] as $antecedent): ?>
		<tr>
			<td class="text-center"><?php echo $antecedent['id']; ?></td>
			<!-- <td class="text-center"><?php echo $antecedent['person_id']; ?></td> -->
			<td class="text-center"><?php echo $antecedent['name_antecendent']; ?></td>
			<td class="text-center"><?php echo $antecedent['origin']; ?></td>
			<td class="text-center"><?php echo $antecedent['time_ suffering']; ?></td>
			<td class="text-center"><?php echo $antecedent['family']; ?></td>
			<td class="text-center"><?php echo $antecedent['surgicals']; ?></td>
			<!-- <td class="text-center"><?php echo $antecedent['created']; ?></td> -->
			<!-- <td class="text-center"><?php echo $antecedent['modified']; ?></td> -->
			<td class="text-center">
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('controller' => 'antecedents', 'action' => 'view', $antecedent['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Ver')); ?>
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('controller' => 'antecedents', 'action' => 'edit', $antecedent['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Editar')); ?>
				<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('controller' => 'antecedents', 'action' => 'delete', $antecedent['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Eliminar'), __('Are you sure you want to delete # %s?', $antecedent['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->

				<?php endif; ?>



			</div><!-- /.related -->

			<div class="box box-primary">
				<div class="box-header">
					<h3 class="box-title"><?php echo __('Diagnosticos Relacionados'); ?></h3>
					<div class="box-tools pull-right">
						<?php echo $this->Html->link('<i class="glyphicon glyphicon-plus"></i> '.__('Nuevo Diagnostico'), array('controller' => 'diagnostics', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>					</div><!-- /.actions -->
				</div>
				<?php if (!empty($person['Diagnostic'])): ?>

					<div class="box-body table-responsive">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
										<th class="text-center"><?php echo __('N° Diagnostico'); ?></th>
                		<th class="text-center"><?php echo __('Diagnostico'); ?></th>
									<th class="text-center"><?php echo __('Acciones'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($person['Diagnostic'] as $diagnostic): ?>
		<tr>
			<td class="text-center"><?php echo $diagnostic['id']; ?></td>
			<td class="text-center"><?php echo $diagnostic['diagnostico']; ?></td>
			<td class="text-center">
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('controller' => 'diagnostics', 'action' => 'view', $diagnostic['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Ver')); ?>
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('controller' => 'diagnostics', 'action' => 'edit', $diagnostic['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Editar')); ?>
				<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('controller' => 'diagnostics', 'action' => 'delete', $diagnostic['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Eliminar'), __('Esta Seguro de Eliminar el Diagnostico # %s?', $diagnostic['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->

				<?php endif; ?>



			</div><!-- /.related -->
      <div class="box box-primary">
				<div class="box-header">
					<h3 class="box-title"><?php echo __('Recipes Relacionados'); ?></h3>
					<div class="box-tools pull-right">
						<?php echo $this->Html->link('<i class="glyphicon glyphicon-plus"></i> '.__('Nuevo Tratamiento'), array('controller' => 'prescriptions', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>					</div><!-- /.actions -->
				</div>
				<?php if (!empty($person['Prescription'])): ?>

					<div class="box-body table-responsive">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
											<th class="text-center"><?php echo __('N° Recipe'); ?></th>
                  	 <th class="text-center"><?php echo __('Paciente'); ?></th>
                  		<th class="text-center"><?php echo __('Nº Diagnostico'); ?></th>
                  		<th class="text-center"><?php echo __('Estado'); ?></th>
                  		<th class="text-center"><?php echo __('Modificado'); ?></th>
									<th class="text-center"><?php echo __('Acciones'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($person['Prescription'] as $prescription): ?>
		<tr>
			<td class="text-center"><?php echo $prescription['id']; ?></td>
			 <td class="text-center"><?php echo $prescription['person_id']; ?></td>
			<td class="text-center"><?php echo $prescription['diagnostic_id']; ?></td>
			<td class="text-center"><?php echo $prescription['status_treament']; ?></td>
			<td class="text-center"><?php echo $prescription['modified']; ?></td>
			<td class="text-center">
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('controller' => 'prescriptions', 'action' => 'view', $prescription['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Ver')); ?>
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('controller' => 'prescriptions', 'action' => 'edit', $prescription['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Editar')); ?>
				<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('controller' => 'prescriptions', 'action' => 'delete', $prescription['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Eliminar'), __('Estas Seguro de Eliminar el Tratamiento # %s?', $prescription['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->

				<?php endif; ?>



			</div><!-- /.related -->




			<div class="box box-primary">
				<div class="box-header">
					<h3 class="box-title"><?php echo __('Relaciones Estudios'); ?></h3>
					<div class="box-tools pull-right">
						<?php echo $this->Html->link('<i class="glyphicon glyphicon-plus"></i> '.__('Nuevo Estudio'), array('controller' => 'studies', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>					</div><!-- /.actions -->
				</div>
				<?php if (!empty($person['Study'])): ?>

					<div class="box-body table-responsive">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
											<th class="text-center"><?php echo __('N° Estudio'); ?></th>
                  		<!-- <th class="text-center"><?php echo __('Diagnostic Id'); ?></th> -->
                  		<!-- <th class="text-center"><?php echo __('Person Id'); ?></th> -->
                  		<th class="text-center"><?php echo __('Estudio'); ?></th>
                  		<th class="text-center"><?php echo __('Observaciones'); ?></th>
                  		<th class="text-center"><?php echo __('Creado'); ?></th>
                  		<th class="text-center"><?php echo __('Modificado'); ?></th>
									<th class="text-center"><?php echo __('Acciones'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($person['Study'] as $study): ?>
		<tr>
			<td class="text-center"><?php echo $study['id']; ?></td>
			<!-- <td class="text-center"><?php echo $study['diagnostic_id']; ?></td> -->
			<!-- <td class="text-center"><?php echo $study['person_id']; ?></td> -->
			<td class="text-center"><?php echo $study['name_studie']; ?></td>
			<td class="text-center"><?php echo $study['observations']; ?></td>
			<td class="text-center"><?php echo $study['created']; ?></td>
			<td class="text-center"><?php echo $study['modified']; ?></td>
			<td class="text-center">
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('controller' => 'studies', 'action' => 'view', $study['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Ver')); ?>
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('controller' => 'studies', 'action' => 'edit', $study['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Editar')); ?>
				<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('controller' => 'studies', 'action' => 'delete', $study['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Eliminar'), __('Esta Seguro de Eliminar Estudio # %s?', $study['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->

				<?php endif; ?>



			</div><!-- /.related -->
      <div class="box box-primary">
				<div class="box-header">
					<h3 class="box-title"><?php echo __('Citas Relacionados'); ?></h3>
					<div class="box-tools pull-right">
						<?php echo $this->Html->link('<i class="glyphicon glyphicon-plus"></i> '.__('Nueva Cita'), array('controller' => 'citations', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>					</div><!-- /.actions -->
				</div>
				<?php if (!empty($person['Citation'])): ?>

					<div class="box-body table-responsive">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
											<th class="text-center"><?php echo __('N° Cita'); ?></th>
                  		<!-- <th class="text-center"><?php echo __('Person Id'); ?></th> -->
                  		<th class="text-center"><?php echo __('Hora'); ?></th>
                  		<th class="text-center"><?php echo __('Fecha'); ?></th>
                  		<!-- <th class="text-center"><?php echo __('Created'); ?></th> -->
                  		<!-- <th class="text-center"><?php echo __('Modified'); ?></th> -->
                  		<!-- <th class="text-center"><?php echo __('Datecitation Id'); ?></th> -->
									<th class="text-center"><?php echo __('Acciones'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($person['Citation'] as $citation): ?>
		<tr>
			<td class="text-center"><?php echo $citation['id']; ?></td>
			<!-- <td class="text-center"><?php echo $citation['person_id']; ?></td> -->
			<td class="text-center"><?php echo $citation['hour']; ?></td>
			<td class="text-center"><?php echo $citation['date']; ?></td>
			<!-- <td class="text-center"><?php echo $citation['created']; ?></td> -->
			<!-- <td class="text-center"><?php echo $citation['modified']; ?></td> -->
			<!-- <td class="text-center"><?php echo $citation['datecitation_id']; ?></td> -->
			<td class="text-center">
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('controller' => 'citations', 'action' => 'view', $citation['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Ver')); ?>
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('controller' => 'citations', 'action' => 'edit', $citation['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Editar')); ?>
				<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('controller' => 'citations', 'action' => 'delete', $citation['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Eliminar'), __('Esta Seguro de Eliminar la Cita # %s?', $citation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->

				<?php endif; ?>
			</div><!-- /.related -->
      <div class="box box-primary">
				<div class="box-header">
					<h3 class="box-title"><?php echo __('Pagos Relacionados'); ?></h3>
					<div class="box-tools pull-right">
						<?php echo $this->Html->link('<i class="glyphicon glyphicon-plus"></i> '.__('Nuevo Pago'), array('controller' => 'charges', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>					</div><!-- /.actions -->
				</div>
				<?php if (!empty($person['Charge'])): ?>

					<div class="box-body table-responsive">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
											<th class="text-center"><?php echo __('N° Pago'); ?></th>
                  		<th class="text-center"><?php echo __('Costo Total'); ?></th>
                      <th class="text-center"><?php echo __('N° Cita'); ?></th>
                  		<!-- <th class="text-center"><?php echo __('Person Id'); ?></th> -->
                  		<th class="text-center"><?php echo __('Estado'); ?></th>
                  		<!-- <th class="text-center"><?php echo __('Typepayment Id'); ?></th> -->
                  		<!-- <th class="text-center"><?php echo __('Observations'); ?></th> -->
                  		<!-- <th class="text-center"><?php echo __('Created'); ?></th> -->
                  		<th class="text-center"><?php echo __('Fecha'); ?></th>
									<th class="text-center"><?php echo __('Acciones'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($person['Charge'] as $charge): ?>
		<tr>
			<td class="text-center"><?php echo $charge['id']; ?></td>
			<td class="text-center"><?php echo $charge['total_cost']; ?></td>
      <td class="text-center"><?php echo $charge['citation_id']; ?></td>
			<!-- <td class="text-center"><?php echo $charge['person_id']; ?></td> -->
			<td class="text-center"><?php echo $charge['state_charge']; ?></td>
			<!-- <td class="text-center"><?php echo $charge['typepayment_id']; ?></td> -->
			<!-- <td class="text-center"><?php echo $charge['observations']; ?></td> -->
			<!-- <td class="text-center"><?php echo $charge['created']; ?></td> -->
			<td class="text-center"><?php echo $charge['modified']; ?></td>
			<td class="text-center">
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('controller' => 'charges', 'action' => 'view', $charge['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Ver')); ?>
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('controller' => 'charges', 'action' => 'edit', $charge['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Editar')); ?>
				<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('controller' => 'charges', 'action' => 'delete', $charge['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Eliminar'), __('Esta Seguro de Eliminar el Pago # %s?', $charge['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->

				<?php endif; ?>



			</div><!-- /.related -->

      <div class="btn-group btn-group-justified col-sm-4">

              <?php echo $this->Html->link(__('Nuevo Antecedente'), array('controller'=>'antecedents','action' => 'add'), array('class' => 'btn btn-info')); ?>
              <?php echo $this->Html->link(__('Lista de Historias'), array('controller' => 'histories','action' => 'index'), array('class' => 'btn btn-danger')); ?>
              <?php echo $this->Html->link(__('Nueva Historia'), array('controller' => 'histories', 'action' => 'add'), array('class' => 'btn btn-primary')); ?>

      </div>

	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
