<?php $__env->startSection('title', 'Create Query'); ?>


<?php $__env->startSection('content'); ?>
	<div class='container'>
		<div class='row'>
			<div class="col-lg-1 col-md-1 col-sm-1">
				<?php echo $__env->make('layout.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			</div>
			<div class="col-lg-11 col-md-11 col-sm-11">
				<?php if($errors->any()): ?>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<h3 class="alert alert-danger"><?php echo e($errors->first()); ?></h3>
					</div>
				</div>
				<?php endif; ?>
				<div class="row">
					<div class="col-lg-10 col-md-10 col-sm-10">
						<?php foreach($show as $select): ?>
						<?php echo e(Form::open(['action' => 'UserController@addColumn'])); ?>

							<?php echo e(Form::hidden('invisible', $select->Tables_in_dbmcscu)); ?>

							<?php echo e(Form::Submit($select->Tables_in_dbmcscu, array('class' => 'btn btn-link'))); ?>

						<?php echo e(Form::close()); ?>

						<?php endforeach; ?>
						
					</div>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>