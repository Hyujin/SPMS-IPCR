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
	
		<div class="search-container">
    		<form action="<?php echo e(URL::to('/home')); ?>">
      			<input type="text" placeholder="Search.." name="search">
      			<button type="submit"><i class="fa fa-search"></i></button>
    		</form>
			<br>
    	</div>
    	
    		   <button type="submit" class="btn btn-info btn-sm" >Create Form</button>
    	</form>

	    <table class="table">
			<div class="table-responsive">
				<br>
				<tr>
					<th>Id</th>
					<th>Name</th>
					<th>Division</th>
					<th>Section</th>
					<th>Time Span</th>
					<th>View Form</th>
				</tr>
				
				<?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td data-target="id"><?php echo e($employee->id); ?></td>
					<td data-target="name">
					<?php echo e($employee->first_name); ?>

					<?php echo e($employee->middle_name); ?>

					<?php echo e($employee->last_name); ?>

					</td>

					<td data-target="division"><?php echo e($employee->division); ?></td>
					<td data-target="section"><?php echo e($employee->section); ?></td>
					<td data-target="start_date">
					<?php echo e($employee->start_date); ?> -
					<?php echo e($employee->end_date); ?></td>
					<td>
							<form method='POST' action='/dashboard/<?php echo e($employee->id); ?>'>
								<?php echo e(csrf_field()); ?>

								<?php echo e(method_field('PATCH')); ?>

								<button type="button" class="btn btn-info"
								data-toggle="modal" data-target="#editModal" id="btnedit" data-role="update"data-id="<?php echo $employee['id'] ;?>">View</button>
						
					</td>
				</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>	
	    </table>


			<!-- Modal EDIT-->
		<div id="editModal" class="modal fade" role="dialog">
		  <div class="modal-dialog">
		    -
		      <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Update Employee Record</h4>

		      </div>
			      <div class="modal-body">
			         	<form action="<?php echo e(URL::to('/dashboard')); ?>" method="POST" class="horizontal-forms">
	                        <?php echo e(csrf_field()); ?>

                           
	                        First name
	                        <input type="text" name="first_name" class="form-control" class="col-md-8">
	                        <br>
	                        Last name
	                        <input type="text" name="last_name"  class="form-control" class="col-md-8">
	                        <br>
	                        email
	                        <input type="text" name="email" class="form-control"  class="col-md-8">
	                        <br>
	                        User role
	                        <select name="role" class="form-control" class="col-md-8">
			            	<option value="Guard">guard</option>
			            	<option value="Front Desk">Front Desk</option>
			            	<option value="Programmer">Programmer</option>
			            	</select>
	                        <br>                    
                        </form> 
			      </div>
			      <div class="modal-footer">
			    <input  type="submit" onclick="update()" id="submit" value="Update" class="btn btn-primary">

		        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		      </div>
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