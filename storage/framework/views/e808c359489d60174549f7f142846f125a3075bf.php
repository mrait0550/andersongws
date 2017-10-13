<?php $__env->startSection('header'); ?>			
			<div class="header">
				<div class="row">
					<div class="col-lg-6">
						<div class="alert alert-primary header-logo" role="alert">
							<?php echo e(HTML::image('img/cropped-CU-Logo.png')); ?>

							<?php echo e($authe->fldFName); ?>

						</div>
					</div>

					<div class="col-lg-6 crop-house">
						<?php echo e(HTML::image('img/cropped-house.jpg')); ?>

					</div>
				</div>
			</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>