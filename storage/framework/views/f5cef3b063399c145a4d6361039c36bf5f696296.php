<?php $__env->startSection('title', 'Service Unavailable'); ?>

<?php $__env->startSection('message', __($exception->getMessage() ?: 'Be right back.')); ?>

<?php echo $__env->make('errors::layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>