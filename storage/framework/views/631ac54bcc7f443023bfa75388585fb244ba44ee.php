<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $__env->yieldContent('title'); ?></title>
		<?php echo e(HTML::style('css/bootstrap.min.css')); ?>

		<?php echo e(HTML::style('css/style.css')); ?>

	</head>

	<body>
		<?php echo $__env->yieldContent('content'); ?>
	</body>
</html>