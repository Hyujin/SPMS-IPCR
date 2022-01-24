<?php $__env->startSection('after-styles'); ?>
    <style>

    	input[type=text], [type=month], select{
    		width: 40%;
    		padding: 5px 15px;
  			margin: 8px 0;
  			box-sizing: border-box;
  			border: none;
    	}

		.form-container{
			width: 100%;
			margin-left:30%;
			margin-right: 30%;
			border-right: 30%;
			margin-bottom: 30px;
			padding-left: 50px;
			padding-right: 50px;
			padding-top: 20px;
			padding-bottom: 20px;
			border-radius: 5px;
			background-color: whitesmoke;
		}

		.input-form{
			width: 40%;
		}

    	.division{
    		width: 40%;
    		
    	}

		.calendar{
			width: 19%;
		}

    	.time_period{
    		width: 40%; 	
    	}

    	@media (max-width: 800px) {
		.form-inline input {
			margin: 10px 0;
		}
		
		}
    	</style>
		<?php $__env->stopSection(); ?>

		<?php $__env->startSection('scripts'); ?>
		<script type="text/javascript">
			
		</script>
		<?php $__env->stopSection(); ?>

		<?php $__env->startSection('content'); ?>


	<!--<h2><i class="fa fa-user"></i> &nbsp Individual Performance Commitment and Review</h2>-->
	

	
		<div class="form-container">
			<form action="<?php echo e(URL::to('formstore')); ?>" method="POST">
				<?php echo e(csrf_field()); ?>

				<h3>Personal Information</h3>
				<label type="text" class="form-inline">First Name</label>
				<input type="text" name="first_name" class="form-control" required>
				<label name="last_name" class="form-inline">Last name</label>
				<input type="text" name="last_name"  class="form-control" required>
				
				<h5>Division</h5>
				<div class="input-form">
					<select name="division" class="form-control" required>
					<option value="">- - -</option>
					<option value="Finance and Admin Services">Finance and Admin Services</option>
					<option value="Human Resource">Human Resource</option>
					<option value="Commission on Audit">Commission on Audit</option>
					<option value="Technical Services">Technical Services</option>
					<option value="Technical Support Services">Technical Support Services</option>
					<option value="Finance">Finance</option>
					</select>
				</div>
				
					<input type="month" placeholder="Start Month" name="month1" class="form-inline calendar">
					to
					<input type="month" placeholder="End Month" name="month2" class="form-inline calendar">

				<br>

				<h5>Reviewed by</h5>
		
				<div class="input-form">
					<select name="reviewed" class="form-control" required>
					<option value="">- - -</option>
					<option value="John Foo">John Foo</option>
					<option value="Mary White">Mary White</option>
					</select>
				</div>
				
				<h5>Approved by</h5>
			
				<div class="input-form">
					<select name="approved" class="form-control" required>
					<option value="">- - -</option>
					<option value="Dr. Peter Parker">Dr. Peter Parker</option>
					<option value="Dr. Bellatrix Lastrange">Dr. Bellatrix Lastrange</option>
					</select>
				</div>
				<hr>
				
				<input type="submit" value="Proceed to form" class="btn btn-primary">
			</form>
		</div>



<?php $__env->stopSection(); ?>


<?php $__env->startSection('after-scripts'); ?>
<script type="text/javascript">	

	

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>