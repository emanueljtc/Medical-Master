
<div class="row">
    <div class="col-xs-12">

		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php  echo __('Vista Historia'); ?></h3>
				<div class="box-tools pull-right">
	                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i> Edit'), array('action' => 'edit', $history['History']['id']), array('class' => 'btn btn-primary', 'escape' => false)); ?>
	            </div>
			</div>

			<div class="box-body table-responsive">
                <table id="Histories" class="table table-bordered table-striped">
					<tbody>
      						<tr>
                    <td><strong><?php echo __('N° Historia'); ?></strong></td>
                		<td>
                			<?php echo h($history['History']['id']); ?>
                			&nbsp;
                		</td>
                  </tr>
                  <tr>
                    <td><strong><?php echo __('Paciente'); ?></strong></td>
                  		<td>
                  			<?php echo $this->Html->link($history['Person']['full_name'], array('controller' => 'people', 'action' => 'view', $history['Person']['id']), array('class' => '')); ?>
                  			&nbsp;
                  		</td>
                  </tr>
			</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->

		</div><!-- /.view -->


			


	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
