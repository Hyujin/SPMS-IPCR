<?php $__env->startSection('after-styles'); ?>
    <style>
	.search-container {
  			float: right;
		}

  input[type=text] {
  padding: 6px;
  font-size: 13px;
  border-width: 1px;
  width:15vw;
}

.search-container button {
  float: right;
  padding: 6px 10px;
  margin-right: 30px;
  background: #ddd;
  font-size: 12px;
  cursor: pointer;
  border-width: 1px;
}

.search-container button:hover {
  background: #ccc;
}

.btn-box-lg{
	display: inline-block;
	height: 8vw;
	width: 11vw;
	white-space: normal;
	word-wrap: break-word;
	margin: .3vw;
}

.btn-darkblue{
	background-color: darkblue;
	color: white;
}

.btn-darkblue:hover {
	color: white;
	background-color: black;
}

@media  screen and (max-width: 600px) {
.search-container {
    float: none;
  }
input[type=text], .search-container button {
    float: right;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    margin-right: 0px;
    margin-left: 0px;
    padding: 14px;
  }
  input[type=text] {
    border: 1px solid #ccc;  
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

	<h2><i class="fa fa-list-alt"></i> &nbsp Form Evaluations</h2>
	<!-- 
		<div class="search-container">
    		<form action="<?php echo e(URL::to('/home')); ?>">
      			<input type="text" placeholder="Search.." name="search">
      			<button type="submit"><i class="fa fa-search"></i></button>
    		</form>
			<br>
    	</div> -->

	    <table class="table">
			<div class="table-responsive">
				<br>
				<tr>
					<th>Name</th>
					<th>Form</th>
					<th>Date</th>
					<th>Form</th>
				</tr>
				
				<?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					
					<td data-target="name">
					<?php echo e($employee->first_name); ?>

					<?php echo e($employee->middle_name); ?>

					<?php echo e($employee->last_name); ?>

					</td>

					<td data-target="division"><?php echo e($employee->form); ?></td>
					<td data-target="start_date">
					<?php echo e($employee->created_at); ?></td>
					<td>
							<form method='POST' action='/admin/forms/ipcr/<?php echo e($employee->id); ?>'>
								<?php echo e(csrf_field()); ?>

								<button type="submit" class="btn btn-primary">Evaluate</button>
							</form>
						
					</td>
				</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


			</div>	
	    </table>
	</div>

<?php $__env->stopSection(); ?>



<?php $__env->startSection('after-scripts'); ?>
<script type="text/javascript">	


</script>
<?php $__env->stopSection(); ?>

			
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>