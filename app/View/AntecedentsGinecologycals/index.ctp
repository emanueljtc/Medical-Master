<?php echo $this->Html->css('datatables/dataTables.bootstrap'); ?>
<div class="row">
    <div class="col-xs-12">

    <div class="box box-primary">
		<div class="box-header">
			<h3 class="box-title"><?php echo __('Antecedents Ginecologycals'); ?></h3>
			<div class="box-tools pull-right">
                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-plus"></i> New Antecedents Ginecologycal'), array('action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>
            </div>
		</div>	
			<div class="box-body table-responsive">
                <table id="AntecedentsGinecologycals" class="table table-bordered table-striped">
					<thead>
						<tr>
													<th class="text-center"><?php echo $this->Paginator->sort('id'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('menargia'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('rules'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('prs'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('sexual_partners'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('gestas'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('paras'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('misbirth'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('cesareas'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('first_birth'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('lactation'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('aco'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('diu'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('person_id'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('history_id'); ?></th>
												<th class="text-center"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ($antecedentsGinecologycals as $antecedentsGinecologycal): ?>
	<tr>
		<td class="text-center"><?php echo h($antecedentsGinecologycal['AntecedentsGinecologycal']['id']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($antecedentsGinecologycal['AntecedentsGinecologycal']['menargia']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($antecedentsGinecologycal['AntecedentsGinecologycal']['rules']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($antecedentsGinecologycal['AntecedentsGinecologycal']['prs']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($antecedentsGinecologycal['AntecedentsGinecologycal']['sexual_partners']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($antecedentsGinecologycal['AntecedentsGinecologycal']['gestas']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($antecedentsGinecologycal['AntecedentsGinecologycal']['paras']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($antecedentsGinecologycal['AntecedentsGinecologycal']['misbirth']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($antecedentsGinecologycal['AntecedentsGinecologycal']['cesareas']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($antecedentsGinecologycal['AntecedentsGinecologycal']['first_birth']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($antecedentsGinecologycal['AntecedentsGinecologycal']['lactation']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($antecedentsGinecologycal['AntecedentsGinecologycal']['aco']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($antecedentsGinecologycal['AntecedentsGinecologycal']['diu']); ?>&nbsp;</td>
		<td class="text-center">
			<?php echo $this->Html->link($antecedentsGinecologycal['Person']['full_name'], array('controller' => 'people', 'action' => 'view', $antecedentsGinecologycal['Person']['id'])); ?>
		</td>
		<td class="text-center">
			<?php echo $this->Html->link($antecedentsGinecologycal['History']['id'], array('controller' => 'histories', 'action' => 'view', $antecedentsGinecologycal['History']['id'])); ?>
		</td>
		<td class="text-center">
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('action' => 'view', $antecedentsGinecologycal['AntecedentsGinecologycal']['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'view')); ?>
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('action' => 'edit', $antecedentsGinecologycal['AntecedentsGinecologycal']['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'edit')); ?>
			<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('action' => 'delete', $antecedentsGinecologycal['AntecedentsGinecologycal']['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'delete'), __('Are you sure you want to delete # %s?', $antecedentsGinecologycal['AntecedentsGinecologycal']['id'])); ?>
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
        $("#AntecedentsGinecologycals").dataTable();
    });
</script>