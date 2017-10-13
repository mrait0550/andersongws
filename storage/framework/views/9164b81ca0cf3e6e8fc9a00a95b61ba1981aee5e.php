<?php $__env->startSection('title', 'Mainpage'); ?>

<?php $__env->startSection('content'); ?>
		<?php
			echo $duedate->fldFName;
			// foreach($duedate as $d){
				// $today = date('Y-m-d', $d->fldStartDate);
				// $month = 1;
				// $next = strtotime($today." + ".$month." Months");
				// $next = strtotime($d->fldStartDate." + ".$month." Months");
				// echo date("Y-m-d", $next)."<br />";
				// echo $d->fldFName."-".$d->fldFName."<br />";
			// }
		?>

		<div class="container">'
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-4"><?php echo e(HTML::link('/createQuery', 'Create Query')); ?></div>
				<div class="col-lg-4 col-md-4 col-sm-4"><?php echo e(HTML::link('/listQuery', 'Insert Query')); ?></div>
				<div class="col-lg-4 col-md-4 col-sm-4"><?php echo e(HTML::link('users/logout', 'Logout')); ?></div>
			</div>
		</div>
				
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>