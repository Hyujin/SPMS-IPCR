<?php $__env->startSection('after-styles'); ?>
    <style>

    	input[type=text], [type=month], select{
    		width: 30%;
    		padding: 12px 20px;
  			margin: 8px 0;
  			box-sizing: border-box;
  			border: none;
 			border-bottom: 2px solid gray;
    	}

    	.division{
    		width: 30%;
    		
    	}

    	.time_period{
    		width: 50%;
    	}

    	@media (max-width: 800px) {
  .form-inline input {
    margin: 10px 0;
  }
  
  .form-inline {
    flex-direction: column;
    align-items: stretch;
  }
}

    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script type="text/javascript">
	
</script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div>

	<h2><i class="fa fa-user"></i> &nbsp Individual Performance Commitment and Review</h2>
	
 	<form action="<?php echo e(URL::to('formstore')); ?>" method="POST">
 		<?php echo e(csrf_field()); ?>

 		<label type="text" class="form-inline">First Name</label>
	    <input type="text" name="first_name" class="form-control">
	    <br>
	    <label name="last_name" class="form-inline">Last name</label>
	    <input type="text" name="last_name"  class="form-control">
	    <br>
	    Division
	    <div class="division">
	    <select name="division" class="form-control">
		<option value="division1">Division 1</option>
		<option value="division2">Division 2</option>
		<option value="division3">Division 3</option>
		<option value="division4">Division 4</option>
		<option value="division5">Division 5</option>
		<option value="division6">Division 6</option>
		</select></div>
	    <br>
	    
	    	<input type="month" name="month1" class="form-inline">
	    	to
	    	<input type="month" name="month2" class="form-inline">
	    	<br><br>
	    
	    
	    <input type="submit" value="Submit" class="btn btn-primary"> 
 	</form>

</div>

<p>click me!</p>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('after-scripts'); ?>
<script type="text/javascript">	

	$(document).ready(function(){
  $("p").click(function(){
    $(this).hide();
  });
});

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>