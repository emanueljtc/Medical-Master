
<div class="row">
    <div class="col-xs-12">
		
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php  echo __('Person'); ?></h3>
				<div class="box-tools pull-right">
	                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i> Edit'), array('action' => 'edit', $person['Person']['id']), array('class' => 'btn btn-primary', 'escape' => false)); ?>
	            </div>
			</div>
			
			<div class="box-body table-responsive">
                <table id="People" class="table table-bordered table-striped">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($person['Person']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Name'); ?></strong></td>
		<td>
			<?php echo h($person['Person']['name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Last Name'); ?></strong></td>
		<td>
			<?php echo h($person['Person']['last_name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Dni'); ?></strong></td>
		<td>
			<?php echo h($person['Person']['dni']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Gender'); ?></strong></td>
		<td>
			<?php echo h($person['Person']['gender']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Address'); ?></strong></td>
		<td>
			<?php echo h($person['Person']['address']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Phone'); ?></strong></td>
		<td>
			<?php echo h($person['Person']['phone']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Email'); ?></strong></td>
		<td>
			<?php echo h($person['Person']['email']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Nationality'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($person['Nationality']['nacionalidad'], array('controller' => 'nationalities', 'action' => 'view', $person['Nationality']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Rol'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($person['Rol']['rol'], array('controller' => 'rols', 'action' => 'view', $person['Rol']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Specialty'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($person['Specialty']['specialty'], array('controller' => 'specialties', 'action' => 'view', $person['Specialty']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Pass App'); ?></strong></td>
		<td>
			<?php echo h($person['Person']['pass_app']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Token'); ?></strong></td>
		<td>
			<?php echo h($person['Person']['token']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

					
			<div class="box box-primary">
				<div class="box-header">
					<h3 class="box-title"><?php echo __('Related Antecedents'); ?></h3>
					<div class="box-tools pull-right">
						<?php echo $this->Html->link('<i class="glyphicon glyphicon-plus"></i> '.__('New Antecedent'), array('controller' => 'antecedents', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>					</div><!-- /.actions -->
				</div>
				<?php if (!empty($person['Antecedent'])): ?>
					
					<div class="box-body table-responsive">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
											<th class="text-center"><?php echo __('Id'); ?></th>
		<th class="text-center"><?php echo __('Person Id'); ?></th>
		<th class="text-center"><?php echo __('Name Antecendent'); ?></th>
		<th class="text-center"><?php echo __('Origin'); ?></th>
		<th class="text-center"><?php echo __('Time  Suffering'); ?></th>
		<th class="text-center"><?php echo __('Family'); ?></th>
		<th class="text-center"><?php echo __('Personals Doctors'); ?></th>
		<th class="text-center"><?php echo __('Surgicals'); ?></th>
		<th class="text-center"><?php echo __('Created'); ?></th>
		<th class="text-center"><?php echo __('Modified'); ?></th>
									<th class="text-center"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($person['Antecedent'] as $antecedent): ?>
		<tr>
			<td class="text-center"><?php echo $antecedent['id']; ?></td>
			<td class="text-center"><?php echo $antecedent['person_id']; ?></td>
			<td class="text-center"><?php echo $antecedent['name_antecendent']; ?></td>
			<td class="text-center"><?php echo $antecedent['origin']; ?></td>
			<td class="text-center"><?php echo $antecedent['time_ suffering']; ?></td>
			<td class="text-center"><?php echo $antecedent['family']; ?></td>
			<td class="text-center"><?php echo $antecedent['personals_doctors']; ?></td>
			<td class="text-center"><?php echo $antecedent['surgicals']; ?></td>
			<td class="text-center"><?php echo $antecedent['created']; ?></td>
			<td class="text-center"><?php echo $antecedent['modified']; ?></td>
			<td class="text-center">
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('controller' => 'antecedents', 'action' => 'view', $antecedent['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'view')); ?>
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('controller' => 'antecedents', 'action' => 'edit', $antecedent['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'edit')); ?>
				<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('controller' => 'antecedents', 'action' => 'delete', $antecedent['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'delete'), __('Are you sure you want to delete # %s?', $antecedent['id'])); ?>
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
					<h3 class="box-title"><?php echo __('Related Charges'); ?></h3>
					<div class="box-tools pull-right">
						<?php echo $this->Html->link('<i class="glyphicon glyphicon-plus"></i> '.__('New Charge'), array('controller' => 'charges', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>					</div><!-- /.actions -->
				</div>
				<?php if (!empty($person['Charge'])): ?>
					
					<div class="box-body table-responsive">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
											<th class="text-center"><?php echo __('Id'); ?></th>
		<th class="text-center"><?php echo __('Total Cost'); ?></th>
		<th class="text-center"><?php echo __('Person Id'); ?></th>
		<th class="text-center"><?php echo __('Citation Id'); ?></th>
		<th class="text-center"><?php echo __('State Charge'); ?></th>
		<th class="text-center"><?php echo __('Typepayment Id'); ?></th>
		<th class="text-center"><?php echo __('Observations'); ?></th>
		<th class="text-center"><?php echo __('Created'); ?></th>
		<th class="text-center"><?php echo __('Modified'); ?></th>
									<th class="text-center"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($person['Charge'] as $charge): ?>
		<tr>
			<td class="text-center"><?php echo $charge['id']; ?></td>
			<td class="text-center"><?php echo $charge['total_cost']; ?></td>
			<td class="text-center"><?php echo $charge['person_id']; ?></td>
			<td class="text-center"><?php echo $charge['citation_id']; ?></td>
			<td class="text-center"><?php echo $charge['state_charge']; ?></td>
			<td class="text-center"><?php echo $charge['typepayment_id']; ?></td>
			<td class="text-center"><?php echo $charge['observations']; ?></td>
			<td class="text-center"><?php echo $charge['created']; ?></td>
			<td class="text-center"><?php echo $charge['modified']; ?></td>
			<td class="text-center">
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('controller' => 'charges', 'action' => 'view', $charge['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'view')); ?>
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('controller' => 'charges', 'action' => 'edit', $charge['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'edit')); ?>
				<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('controller' => 'charges', 'action' => 'delete', $charge['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'delete'), __('Are you sure you want to delete # %s?', $charge['id'])); ?>
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
					<h3 class="box-title"><?php echo __('Related Citations'); ?></h3>
					<div class="box-tools pull-right">
						<?php echo $this->Html->link('<i class="glyphicon glyphicon-plus"></i> '.__('New Citation'), array('controller' => 'citations', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>					</div><!-- /.actions -->
				</div>
				<?php if (!empty($person['Citation'])): ?>
					
					<div class="box-body table-responsive">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
											<th class="text-center"><?php echo __('Id'); ?></th>
		<th class="text-center"><?php echo __('Person Id'); ?></th>
		<th class="text-center"><?php echo __('Hour'); ?></th>
		<th class="text-center"><?php echo __('Date'); ?></th>
		<th class="text-center"><?php echo __('Created'); ?></th>
		<th class="text-center"><?php echo __('Modified'); ?></th>
		<th class="text-center"><?php echo __('Datecitation Id'); ?></th>
									<th class="text-center"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($person['Citation'] as $citation): ?>
		<tr>
			<td class="text-center"><?php echo $citation['id']; ?></td>
			<td class="text-center"><?php echo $citation['person_id']; ?></td>
			<td class="text-center"><?php echo $citation['hour']; ?></td>
			<td class="text-center"><?php echo $citation['date']; ?></td>
			<td class="text-center"><?php echo $citation['created']; ?></td>
			<td class="text-center"><?php echo $citation['modified']; ?></td>
			<td class="text-center"><?php echo $citation['datecitation_id']; ?></td>
			<td class="text-center">
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('controller' => 'citations', 'action' => 'view', $citation['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'view')); ?>
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('controller' => 'citations', 'action' => 'edit', $citation['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'edit')); ?>
				<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('controller' => 'citations', 'action' => 'delete', $citation['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'delete'), __('Are you sure you want to delete # %s?', $citation['id'])); ?>
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
					<h3 class="box-title"><?php echo __('Related Diagnostics'); ?></h3>
					<div class="box-tools pull-right">
						<?php echo $this->Html->link('<i class="glyphicon glyphicon-plus"></i> '.__('New Diagnostic'), array('controller' => 'diagnostics', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>					</div><!-- /.actions -->
				</div>
				<?php if (!empty($person['Diagnostic'])): ?>
					
					<div class="box-body table-responsive">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
											<th class="text-center"><?php echo __('Id'); ?></th>
		<th class="text-center"><?php echo __('Size Boobs'); ?></th>
		<th class="text-center"><?php echo __('Form Boobs'); ?></th>
		<th class="text-center"><?php echo __('Symmetry Boobs'); ?></th>
		<th class="text-center"><?php echo __('Skin Boobs'); ?></th>
		<th class="text-center"><?php echo __('Cap Boobs'); ?></th>
		<th class="text-center"><?php echo __('Pussy'); ?></th>
		<th class="text-center"><?php echo __('Neck Pussy'); ?></th>
		<th class="text-center"><?php echo __('Coloscopia'); ?></th>
		<th class="text-center"><?php echo __('Ano  Straight'); ?></th>
		<th class="text-center"><?php echo __('Head Neck'); ?></th>
		<th class="text-center"><?php echo __('Touch Tumor'); ?></th>
		<th class="text-center"><?php echo __('Form Tumor'); ?></th>
		<th class="text-center"><?php echo __('Surface Tumor'); ?></th>
		<th class="text-center"><?php echo __('Contour Tumor'); ?></th>
		<th class="text-center"><?php echo __('Axis Tumor'); ?></th>
		<th class="text-center"><?php echo __('Consistency Tumor'); ?></th>
		<th class="text-center"><?php echo __('Laringoscopia'); ?></th>
		<th class="text-center"><?php echo __('Menarguia'); ?></th>
		<th class="text-center"><?php echo __('Reglas'); ?></th>
		<th class="text-center"><?php echo __('Prs'); ?></th>
		<th class="text-center"><?php echo __('Companion Sexual'); ?></th>
		<th class="text-center"><?php echo __('Distance Cap'); ?></th>
		<th class="text-center"><?php echo __('Gestas'); ?></th>
		<th class="text-center"><?php echo __('Rsi'); ?></th>
		<th class="text-center"><?php echo __('Paras'); ?></th>
		<th class="text-center"><?php echo __('Abdomen'); ?></th>
		<th class="text-center"><?php echo __('Misbirth'); ?></th>
		<th class="text-center"><?php echo __('Gynecological Vulva'); ?></th>
		<th class="text-center"><?php echo __('Cesareans'); ?></th>
		<th class="text-center"><?php echo __('Age Birth One'); ?></th>
		<th class="text-center"><?php echo __('Diagnostico'); ?></th>
		<th class="text-center"><?php echo __('Person Id'); ?></th>
		<th class="text-center"><?php echo __('History Id'); ?></th>
									<th class="text-center"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($person['Diagnostic'] as $diagnostic): ?>
		<tr>
			<td class="text-center"><?php echo $diagnostic['id']; ?></td>
			<td class="text-center"><?php echo $diagnostic['size_boobs']; ?></td>
			<td class="text-center"><?php echo $diagnostic['form_boobs']; ?></td>
			<td class="text-center"><?php echo $diagnostic['symmetry_boobs']; ?></td>
			<td class="text-center"><?php echo $diagnostic['skin_boobs']; ?></td>
			<td class="text-center"><?php echo $diagnostic['cap_boobs']; ?></td>
			<td class="text-center"><?php echo $diagnostic['pussy']; ?></td>
			<td class="text-center"><?php echo $diagnostic['neck_pussy']; ?></td>
			<td class="text-center"><?php echo $diagnostic['coloscopia']; ?></td>
			<td class="text-center"><?php echo $diagnostic['ano_ straight']; ?></td>
			<td class="text-center"><?php echo $diagnostic['head_neck']; ?></td>
			<td class="text-center"><?php echo $diagnostic['touch_tumor']; ?></td>
			<td class="text-center"><?php echo $diagnostic['form_tumor']; ?></td>
			<td class="text-center"><?php echo $diagnostic['surface_tumor']; ?></td>
			<td class="text-center"><?php echo $diagnostic['contour_tumor']; ?></td>
			<td class="text-center"><?php echo $diagnostic['axis_tumor']; ?></td>
			<td class="text-center"><?php echo $diagnostic['consistency_tumor']; ?></td>
			<td class="text-center"><?php echo $diagnostic['laringoscopia']; ?></td>
			<td class="text-center"><?php echo $diagnostic['menarguia']; ?></td>
			<td class="text-center"><?php echo $diagnostic['reglas']; ?></td>
			<td class="text-center"><?php echo $diagnostic['prs']; ?></td>
			<td class="text-center"><?php echo $diagnostic['companion_sexual']; ?></td>
			<td class="text-center"><?php echo $diagnostic['distance_cap']; ?></td>
			<td class="text-center"><?php echo $diagnostic['gestas']; ?></td>
			<td class="text-center"><?php echo $diagnostic['rsi']; ?></td>
			<td class="text-center"><?php echo $diagnostic['paras']; ?></td>
			<td class="text-center"><?php echo $diagnostic['abdomen']; ?></td>
			<td class="text-center"><?php echo $diagnostic['misbirth']; ?></td>
			<td class="text-center"><?php echo $diagnostic['gynecological_vulva']; ?></td>
			<td class="text-center"><?php echo $diagnostic['cesareans']; ?></td>
			<td class="text-center"><?php echo $diagnostic['age_birth_one']; ?></td>
			<td class="text-center"><?php echo $diagnostic['diagnostico']; ?></td>
			<td class="text-center"><?php echo $diagnostic['person_id']; ?></td>
			<td class="text-center"><?php echo $diagnostic['history_id']; ?></td>
			<td class="text-center">
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('controller' => 'diagnostics', 'action' => 'view', $diagnostic['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'view')); ?>
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('controller' => 'diagnostics', 'action' => 'edit', $diagnostic['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'edit')); ?>
				<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('controller' => 'diagnostics', 'action' => 'delete', $diagnostic['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'delete'), __('Are you sure you want to delete # %s?', $diagnostic['id'])); ?>
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
					<h3 class="box-title"><?php echo __('Related Histories'); ?></h3>
					<div class="box-tools pull-right">
						<?php echo $this->Html->link('<i class="glyphicon glyphicon-plus"></i> '.__('New History'), array('controller' => 'histories', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>					</div><!-- /.actions -->
				</div>
				<?php if (!empty($person['History'])): ?>
					
					<div class="box-body table-responsive">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
											<th class="text-center"><?php echo __('Id'); ?></th>
		<th class="text-center"><?php echo __('Person Id'); ?></th>
		<th class="text-center"><?php echo __('Antecedent Id'); ?></th>
		<th class="text-center"><?php echo __('Age'); ?></th>
		<th class="text-center"><?php echo __('Weight'); ?></th>
		<th class="text-center"><?php echo __('Height'); ?></th>
									<th class="text-center"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($person['History'] as $history): ?>
		<tr>
			<td class="text-center"><?php echo $history['id']; ?></td>
			<td class="text-center"><?php echo $history['person_id']; ?></td>
			<td class="text-center"><?php echo $history['antecedent_id']; ?></td>
			<td class="text-center"><?php echo $history['age']; ?></td>
			<td class="text-center"><?php echo $history['weight']; ?></td>
			<td class="text-center"><?php echo $history['height']; ?></td>
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
					<h3 class="box-title"><?php echo __('Related Indications'); ?></h3>
					<div class="box-tools pull-right">
						<?php echo $this->Html->link('<i class="glyphicon glyphicon-plus"></i> '.__('New Indication'), array('controller' => 'indications', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>					</div><!-- /.actions -->
				</div>
				<?php if (!empty($person['Indication'])): ?>
					
					<div class="box-body table-responsive">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
											<th class="text-center"><?php echo __('Id'); ?></th>
		<th class="text-center"><?php echo __('Diagnostic Id'); ?></th>
		<th class="text-center"><?php echo __('Treatment Id'); ?></th>
		<th class="text-center"><?php echo __('Person Id'); ?></th>
		<th class="text-center"><?php echo __('Indication'); ?></th>
		<th class="text-center"><?php echo __('Created'); ?></th>
		<th class="text-center"><?php echo __('Modified'); ?></th>
									<th class="text-center"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($person['Indication'] as $indication): ?>
		<tr>
			<td class="text-center"><?php echo $indication['id']; ?></td>
			<td class="text-center"><?php echo $indication['diagnostic_id']; ?></td>
			<td class="text-center"><?php echo $indication['treatment_id']; ?></td>
			<td class="text-center"><?php echo $indication['person_id']; ?></td>
			<td class="text-center"><?php echo $indication['indication']; ?></td>
			<td class="text-center"><?php echo $indication['created']; ?></td>
			<td class="text-center"><?php echo $indication['modified']; ?></td>
			<td class="text-center">
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('controller' => 'indications', 'action' => 'view', $indication['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'view')); ?>
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('controller' => 'indications', 'action' => 'edit', $indication['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'edit')); ?>
				<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('controller' => 'indications', 'action' => 'delete', $indication['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'delete'), __('Are you sure you want to delete # %s?', $indication['id'])); ?>
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
					<h3 class="box-title"><?php echo __('Related Studies'); ?></h3>
					<div class="box-tools pull-right">
						<?php echo $this->Html->link('<i class="glyphicon glyphicon-plus"></i> '.__('New Study'), array('controller' => 'studies', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>					</div><!-- /.actions -->
				</div>
				<?php if (!empty($person['Study'])): ?>
					
					<div class="box-body table-responsive">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
											<th class="text-center"><?php echo __('Id'); ?></th>
		<th class="text-center"><?php echo __('Diagnostic Id'); ?></th>
		<th class="text-center"><?php echo __('Person Id'); ?></th>
		<th class="text-center"><?php echo __('Name Studie'); ?></th>
		<th class="text-center"><?php echo __('Observations'); ?></th>
		<th class="text-center"><?php echo __('Created'); ?></th>
		<th class="text-center"><?php echo __('Modified'); ?></th>
									<th class="text-center"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($person['Study'] as $study): ?>
		<tr>
			<td class="text-center"><?php echo $study['id']; ?></td>
			<td class="text-center"><?php echo $study['diagnostic_id']; ?></td>
			<td class="text-center"><?php echo $study['person_id']; ?></td>
			<td class="text-center"><?php echo $study['name_studie']; ?></td>
			<td class="text-center"><?php echo $study['observations']; ?></td>
			<td class="text-center"><?php echo $study['created']; ?></td>
			<td class="text-center"><?php echo $study['modified']; ?></td>
			<td class="text-center">
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('controller' => 'studies', 'action' => 'view', $study['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'view')); ?>
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('controller' => 'studies', 'action' => 'edit', $study['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'edit')); ?>
				<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('controller' => 'studies', 'action' => 'delete', $study['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'delete'), __('Are you sure you want to delete # %s?', $study['id'])); ?>
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
					<h3 class="box-title"><?php echo __('Related Treatments'); ?></h3>
					<div class="box-tools pull-right">
						<?php echo $this->Html->link('<i class="glyphicon glyphicon-plus"></i> '.__('New Treatment'), array('controller' => 'treatments', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>					</div><!-- /.actions -->
				</div>
				<?php if (!empty($person['Treatment'])): ?>
					
					<div class="box-body table-responsive">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
											<th class="text-center"><?php echo __('Id'); ?></th>
		<th class="text-center"><?php echo __('Person Id'); ?></th>
		<th class="text-center"><?php echo __('Diagnostic Id'); ?></th>
		<th class="text-center"><?php echo __('Status Treament'); ?></th>
		<th class="text-center"><?php echo __('Prescription'); ?></th>
		<th class="text-center"><?php echo __('Observations Prescription'); ?></th>
		<th class="text-center"><?php echo __('Created'); ?></th>
		<th class="text-center"><?php echo __('Modified'); ?></th>
									<th class="text-center"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($person['Treatment'] as $treatment): ?>
		<tr>
			<td class="text-center"><?php echo $treatment['id']; ?></td>
			<td class="text-center"><?php echo $treatment['person_id']; ?></td>
			<td class="text-center"><?php echo $treatment['diagnostic_id']; ?></td>
			<td class="text-center"><?php echo $treatment['status_treament']; ?></td>
			<td class="text-center"><?php echo $treatment['prescription']; ?></td>
			<td class="text-center"><?php echo $treatment['observations_prescription']; ?></td>
			<td class="text-center"><?php echo $treatment['created']; ?></td>
			<td class="text-center"><?php echo $treatment['modified']; ?></td>
			<td class="text-center">
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('controller' => 'treatments', 'action' => 'view', $treatment['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'view')); ?>
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('controller' => 'treatments', 'action' => 'edit', $treatment['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'edit')); ?>
				<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('controller' => 'treatments', 'action' => 'delete', $treatment['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'delete'), __('Are you sure you want to delete # %s?', $treatment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->
					
				<?php endif; ?>

				
				
			</div><!-- /.related -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->

