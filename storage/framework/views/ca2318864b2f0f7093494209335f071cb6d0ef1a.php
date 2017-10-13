<?php $__env->startSection('title', 'Create Query'); ?>


<?php $__env->startSection('content'); ?>

IF fldpersontypeid = admin
	*SELECT , INSERT , UPDATE , DELETE
	*select table
ELSE
	*SELECT , INSERT , UPDATE
	*select table

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>