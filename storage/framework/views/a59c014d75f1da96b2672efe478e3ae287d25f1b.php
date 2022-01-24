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

	<h2><i class="fa fa-users"></i> &nbsp IPCR Forms</h2>
	<!-- 
		<div class="search-container">
    		<form action="<?php echo e(URL::to('/home')); ?>">
      			<input type="text" placeholder="Search.." name="search">
      			<button type="submit"><i class="fa fa-search"></i></button>
    		</form>
			<br>
    	</div> -->

    		   <button type="submit" class="btn btn-info btn-sm" data-toggle="modal" data-target="#forms">Create form</button>
	    <table class="table">
			<div class="table-responsive">
				<br>
				<tr>
					<th>Name</th>
					<th>Form</th>
					<th>Date</th>
					<th>View Form</th>
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
							<form method='POST' action='/forms/ipcr/edit/pre/<?php echo e($employee->id); ?>'>
								<?php echo e(csrf_field()); ?>

								<button type="submit" class="btn btn-secondary">Edit</button>
							</form>
						
					</td>
				</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>	
	    </table>
	</div>

<!-- Modal -->
<div id="forms" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">FORMS</h4>
      </div>
      <div class="modal-body">
      	<div class="container-fluid">
      		<div class="row">
      			<div class="col-md-4">
      				<form action="<?php echo e(URL::to('/forms/ttmt')); ?>">
		      			<button type="submit" class="btn btn-darkblue btn-box-lg" href="">PMC Tracking Tool for Monitoring Targets</button>
			      	</form>
      			</div>
      			<div class="col-md-4">
      				<form action="<?php echo e(URL::to('/forms/pdp')); ?>">
			      		<button type="submit" class="btn btn-darkblue btn-box-lg" href="">Professional Development Plan</button>
			      	</form>
      			</div>
	         	<div class="col-md-4">
	         		<form action="<?php echo e(URL::to('/forms/pmcj')); ?>">
			      		<button type="submit" class="btn btn-darkblue btn-box-lg" href="">Performance Monitoring and Coaching Journal</button>
			      	</form>
	         	</div>
      		</div>

      		<div class="row">
      			<div class="col-md-4">
			      	<form action="<?php echo e(URL::to('/forms/opcr')); ?>">
			      		<button type="submit" class="btn btn-darkblue btn-box-lg" href="">OPCR</button>
			      	</form>
      			</div>
      			<div class="col-md-4">
      				<form action="<?php echo e(URL::to('/forms/dpcr')); ?>">
			      		<button type="submit" class="btn btn-darkblue btn-box-lg" href="">DPCR</button>
			      	</form>
      			</div>
      			<div class="col-md-4">
      				<form action="<?php echo e(URL::to('/forms/ipcr/pre')); ?>">
		      			<button type="submit" class="btn btn-darkblue btn-box-lg" href="">IPCR</button>
			      	</form>
      			</div>
      		</div>

      		<div class="row">
      			<div class="col-md-4">
			      	<form action="<?php echo e(URL::to('/forms/calendar')); ?>">
			      		<button type="submit" class="btn btn-darkblue btn-box-lg" href="">SPMS Calendar</button>
			      	</form>
      			</div>
      			<div class="col-md-4">
      				<form action="<?php echo e(URL::to('/forms/slip')); ?>">
			      		<button type="submit" class="btn btn-darkblue btn-box-lg" href="">Summary List of Individual Performance Ratings</button>
			      	</form>
      			</div>
      			<div class="col-md-4">
      				
      			</div>
      		</div>

      	</div>
      	
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default right" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<?php $__env->stopSection(); ?>



<?php $__env->startSection('after-scripts'); ?>
<script type="text/javascript">	


</script>
<?php $__env->stopSection(); ?>

			
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>