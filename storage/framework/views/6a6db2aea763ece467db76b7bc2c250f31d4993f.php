<?php $__env->startSection('title', 'Select Query'); ?>


<?php $__env->startSection('content'); ?>
	<div class='container'>
		<div class='row'>
			<div class="col-lg-1 col-md-1 col-sm-1">
				<?php echo $__env->make('layout.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			</div>
			<div class="col-lg-11 col-md-11 col-sm-11">
				<div class="row">
					<div class="col-lg-10 col-md-10 col-sm-10">
						<?php foreach($query as $q): ?>
						<?php echo e(Form::open(['action' => 'UserController@showQuery'])); ?>

							<?php echo e(Form::hidden('invisible', $q->queryName)); ?>

							<?php echo e(Form::Submit($q->queryName, array('class' => 'btn btn-link'))); ?>

						<?php echo e(Form::close()); ?>

						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>