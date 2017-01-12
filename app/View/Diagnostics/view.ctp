
<div class="row">
    <div class="col-xs-12">

		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php  echo __('Diagnostic'); ?></h3>
				<div class="box-tools pull-right">
	                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i> Edit'), array('action' => 'edit', $diagnostic['Diagnostic']['id']), array('class' => 'btn btn-primary', 'escape' => false)); ?>
	            </div>
			</div>

			<div class="box-body table-responsive">
                <table id="Diagnostics" class="table table-bordered table-striped">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Reason'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['reason']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Size Boobs'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['size_boobs']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Form Boobs'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['form_boobs']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Symmetry Boobs'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['symmetry_boobs']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Skin Boobs'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['skin_boobs']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Cap Boobs'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['cap_boobs']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Pussy'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['pussy']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Neck Pussy'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['neck_pussy']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Coloscopia'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['coloscopia']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Ano  Straight'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['ano_ straight']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Head Neck'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['head_neck']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Touch Tumor'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['touch_tumor']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Form Tumor'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['form_tumor']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Surface Tumor'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['surface_tumor']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Contour Tumor'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['contour_tumor']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Axis Tumor'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['axis_tumor']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Consistency Tumor'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['consistency_tumor']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Laringoscopia'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['laringoscopia']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Menarguia'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['menarguia']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Reglas'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['reglas']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Prs'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['prs']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Companion Sexual'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['companion_sexual']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Distance Cap'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['distance_cap']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Gestas'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['gestas']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Rsi'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['rsi']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Paras'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['paras']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Abdomen'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['abdomen']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Misbirth'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['misbirth']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Gynecological Vulva'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['gynecological_vulva']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Cesareans'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['cesareans']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Age Birth One'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['age_birth_one']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Diagnostico'); ?></strong></td>
		<td>
			<?php echo h($diagnostic['Diagnostic']['diagnostico']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Person'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($diagnostic['Person']['full_name'], array('controller' => 'people', 'action' => 'view', $diagnostic['Person']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('History'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($diagnostic['History']['id'], array('controller' => 'histories', 'action' => 'view', $diagnostic['History']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->

		</div><!-- /.view -->


			


	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
