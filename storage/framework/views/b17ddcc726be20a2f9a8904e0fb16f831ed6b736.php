<?php $__env->startSection('title', 'Show Query'); ?>


<?php $__env->startSection('content'); ?>
	<div class='container'>
		<div class='row'>
			<div class="col-lg-1 col-md-1 col-sm-1">
				<?php echo $__env->make('layout.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			</div>
			<?php echo e(Form::open(['action' => 'UserController@saveQuery'])); ?>

			<?php echo e(Form::hidden('tablename', $tablename)); ?>

			<div class="col-lg-11 col-md-11 col-sm-11">
				<div class="row"><br /><br />
					<div class="col-lg-12 col-md-12 col-sm-12">
						Query Title :<?php echo Form::text('fldTitle', null, array('placeholder' => 'Query Title')); ?>

					</div>
					<br /><br />
				</div>

				<div class="row">
					<div class="col-lg-10 col-md-10 col-sm-10">
						<table border='1' class="table">
								<tr>
								<?php foreach($select as $s): ?>
									<?php echo e(Form::hidden('column[]', $s)); ?>

									<td align="center"><?php echo e($s); ?></td>
								<?php endforeach; ?>
								</tr>
						<tbody>
						<tr>
						<?php foreach($query as $q): ?>
							<?php for($i=0;$i<sizeof($select);$i++){ 
								$mugi = sizeof($select) - 1;	
								 ?>
								<td align="center"><?php echo e($q->$select[$i]); ?></td>
								<?php
								if($i%sizeof($select) == $mugi ){
								 	echo "</tr>";
								 }
								?>
							
							<?php } ?>
							
						<?php endforeach; ?>
						</tbody>
						</table>
						
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2">
						<?php echo e(Form::submit('Button')); ?>

					</div>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class='row'>
					<?php echo e($query->links()); ?>

				</div>
			</div>
			<?php echo e(Form::close()); ?>

		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>