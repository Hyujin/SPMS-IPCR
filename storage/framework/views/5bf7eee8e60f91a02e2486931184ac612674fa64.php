<?php $__env->startSection('after-styles'); ?>
    <style>

    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script type="text/javascript">
	
</script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div>

	<h2><i class="fa fa-user"></i> &nbsp Individual Performance Commitment and Review</h2>
	
 	<form action="<?php echo e(URL::to('/ipcr')); ?>" method="POST" class="form-vertical">
 		<?php echo e(csrf_field()); ?>

 		First name
	    <input type="text" name="first_name" class="form-control" >
	    <br>
	    Last name
	    <input type="text" name="last_name"  class="form-control" >
	    <br>
	    Division
	    <select name="division" class="form-control" class="col-md-8">
		<option value="division1">Division 1</option>
		<option value="division2">Division 2</option>
		<option value="division3">Division 3</option>
		<option value="division4">Division 4</option>
		<option value="division5">Division 5</option>
		<option value="division6">Division 6</option>
		</select>
	    <br>
	    <input type="submit" value="Submit" width="100%" class="btn btn-primary"> 

 	</form>

</div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('after-scripts'); ?>
<script type="text/javascript">	

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>