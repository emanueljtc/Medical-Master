<?php echo $this->Html->css('datatables/dataTables.bootstrap'); ?>
<div class="row">
    <div class="col-xs-12">

    <div class="box box-primary">
		<div class="box-header">
			<h3 class="box-title"><?php echo __('Indications'); ?></h3>
			<div class="box-tools pull-right">
                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-plus"></i> New Indication'), array('action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>
            </div>
		</div>	
			<div class="box-body table-responsive">
                <table id="Indications" class="table table-bordered table-striped">
					<thead>
						<tr>
													<th class="text-center"><?php echo $this->Paginator->sort('id'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('diagnostic_id'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('treatment_id'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('person_id'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('indication'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('created'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('modified'); ?></th>
												<th class="text-center"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ($indications as $indication): ?>
	<tr>
		<td class="text-center"><?php echo h($indication['Indication']['id']); ?>&nbsp;</td>
		<td class="text-center">
			<?php echo $this->Html->link($indication['Diagnostic']['diagnostico'], array('controller' => 'diagnostics', 'action' => 'view', $indication['Diagnostic']['id'])); ?>
		</td>
		<td class="text-center">
			<?php echo $this->Html->link($indication['Treatment']['prescription'], array('controller' => 'treatments', 'action' => 'view', $indication['Treatment']['id'])); ?>
		</td>
		<td class="text-center">
			<?php echo $this->Html->link($indication['Person']['name'], array('controller' => 'people', 'action' => 'view', $indication['Person']['id'])); ?>
		</td>
		<td class="text-center"><?php echo h($indication['Indication']['indication']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($indication['Indication']['created']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($indication['Indication']['modified']); ?>&nbsp;</td>
		<td class="text-center">
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('action' => 'view', $indication['Indication']['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'view')); ?>
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('action' => 'edit', $indication['Indication']['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'edit')); ?>
			<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('action' => 'delete', $indication['Indication']['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'delete'), __('Are you sure you want to delete # %s?', $indication['Indication']['id'])); ?>
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
        $("#Indications").dataTable();
    });
</script>