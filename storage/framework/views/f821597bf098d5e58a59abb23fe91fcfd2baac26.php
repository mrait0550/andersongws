<?php $__env->startSection('title', 'Create Query'); ?>


<?php $__env->startSection('content'); ?>
	<div class='container'>
		<div class='row'>
			<div class="col-lg-1 col-md-1 col-sm-1">
				<?php echo $__env->make('layout.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			</div>
			<div class="col-lg-11 col-md-11 col-sm-11">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<?php foreach($lead as $llead): ?>
							<?php echo e($llead->fldaptname); ?><br />
						<?php endforeach; ?>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<?php echo e($lead->links()); ?>

					</div>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>