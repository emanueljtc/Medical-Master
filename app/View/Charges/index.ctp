<?php echo $this->Html->css('datatables/dataTables.bootstrap'); ?>
<div class="row">
    <div class="col-xs-12">

    <div class="box box-primary">
		<div class="box-header">
			<h3 class="box-title"><?php echo __('Charges'); ?></h3>
			<div class="box-tools pull-right">
                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-plus"></i> New Charge'), array('action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>
            </div>
		</div>	
			<div class="box-body table-responsive">
                <table id="Charges" class="table table-bordered table-striped">
					<thead>
						<tr>
													<th class="text-center"><?php echo $this->Paginator->sort('id'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('total_cost'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('person_id'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('citation_id'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('state_charge'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('typepayment_id'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('observations'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('created'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('modified'); ?></th>
												<th class="text-center"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ($charges as $charge): ?>
	<tr>
		<td class="text-center"><?php echo h($charge['Charge']['id']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($charge['Charge']['total_cost']); ?>&nbsp;</td>
		<td class="text-center">
			<?php echo $this->Html->link($charge['Person']['full_name'], array('controller' => 'people', 'action' => 'view', $charge['Person']['id'])); ?>
		</td>
		<td class="text-center">
			<?php echo $this->Html->link($charge['Citation']['id'], array('controller' => 'citations', 'action' => 'view', $charge['Citation']['id'])); ?>
		</td>
		<td class="text-center"><?php echo h($charge['Charge']['state_charge']); ?>&nbsp;</td>
		<td class="text-center">
			<?php echo $this->Html->link($charge['Typepayment']['type_payment'], array('controller' => 'typepayments', 'action' => 'view', $charge['Typepayment']['id'])); ?>
		</td>
		<td class="text-center"><?php echo h($charge['Charge']['observations']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($charge['Charge']['created']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($charge['Charge']['modified']); ?>&nbsp;</td>
		<td class="text-center">
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('action' => 'view', $charge['Charge']['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'view')); ?>
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('action' => 'edit', $charge['Charge']['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'edit')); ?>
			<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('action' => 'delete', $charge['Charge']['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'delete'), __('Are you sure you want to delete # %s?', $charge['Charge']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
					</tbody>
				</table>
			</div><!-- /.table-responsive -->
			
			
		</div><!-- /.index -->
	
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->

<?php
	echo $this->Html->script('jquery.min');
	echo $this->Html->script('plugins/datatables/jquery.dataTables');
	echo $this->Html->script('plugins/datatables/dataTables.bootstrap');
?>
<script type="text/javascript">
    $(function() {
        $("#Charges").dataTable();
    });
</script>