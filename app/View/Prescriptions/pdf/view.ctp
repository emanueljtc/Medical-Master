<style>
h3{
			text-decoration: underline;
			font-family: "Times New Roman", Georgia, Serif;

}
p{
	text-decoration: none;
	text-align: justify;
	font-family: "Times New Roman", Georgia, Serif;
	font-size: 130%;
	text-indent: 3em;
}
a:link {
    color: #000;
		text-decoration: none;
}
img{
	width: 150px;
	height: 130px;
	float: left;
}
</style>
<br>
																<center>RECIPE</center>
<div class="row">
    <div class="col-xs-12">

		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php  echo __('Tratamiento'); ?></h3>

			</div>

			<div class="box-body table-responsive">
                <table id="Treatments" class="table table-bordered table-striped">
					<tbody>
						<tr>		<td><strong><?php echo __('N° Tratamiento'); ?></strong></td>
		<td>
			<?php echo h($treatment['Treatment']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Paciente'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($treatment['Person']['full_name'], array('controller' => 'people', 'action' => 'view', $treatment['Person']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Diagnostico'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($treatment['Diagnostic']['diagnostico'], array('controller' => 'diagnostics', 'action' => 'view', $treatment['Diagnostic']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Estado'); ?></strong></td>
		<td>
			<?php echo h($treatment['Treatment']['status_treament']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Recipe'); ?></strong></td>
		<td>
			<?php echo h($treatment['Treatment']['prescription']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Observacion'); ?></strong></td>
		<td>
			<?php echo h($treatment['Treatment']['observations_prescription']); ?>
			&nbsp;
		</td>

</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->

		</div><!-- /.view -->


			<div class="box box-primary">
				<div class="box-header">
					<h3 class="box-title"><?php echo __('Indicaciones'); ?></h3>

				<?php if (!empty($treatment['Indication'])): ?>

					<div class="box-body table-responsive">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
											<th class="text-center"><?php echo __('Indication'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($treatment['Indication'] as $indication): ?>
		<tr>
			<td class="text-center"><?php echo $indication['indication']; ?></td>

		</tr>
	<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->

				<?php endif; ?>



			</div><!-- /.related -->


	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
<br><br>
                      <center>Dr. Gustavo Torres</center>
