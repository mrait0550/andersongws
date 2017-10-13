<?php $__env->startSection('title', 'Create Query'); ?>


<?php $__env->startSection('content'); ?>
	<div class='container'>
		<div class='row'>
			<div class="col-lg-1 col-md-1 col-sm-1">
				<?php echo $__env->make('layout.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			</div>

				<?php echo e(Form::open(['action' => 'UserController@getChecked'])); ?>

			<div class="col-lg-11 col-md-11 col-sm-11">
				<div class="row">
					<div class="col-lg-10 col-md-10 col-sm-10">
						<?php echo e(Form::hidden('tablename', $request)); ?>

						<?php foreach($column as $select): ?>
							<?php echo e(Form::checkbox('columncheck[]', $select->Field)); ?><?php echo e($select->Field); ?><br />
						<?php endforeach; ?>
					</div>
				</div>

				<?php echo e(Form::submit('Button')); ?>


				<?php echo e(Form::close()); ?>

			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>