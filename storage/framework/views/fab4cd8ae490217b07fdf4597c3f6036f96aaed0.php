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
	
  <!-- Trigger the modal with a button -->
		<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#loginModal">Create IPCR Form</button>
		<div class="search-container">
    		<form action="<?php echo e(URL::to('/home')); ?>">
      			<input type="text" placeholder="Search.." name="search">
      			<button type="submit"><i class="fa fa-search"></i></button>
    		</form>
			<br>
    	</div>


	    <table class="table">
	        <br>
	        <tr>
				<th>Id</th>
		        <th>First Name</th>
				<th>Middle Name</th>
		        <th>Last Name</th>
		        <th>Division</th>
				<th>Section</th>
		        <th>Date Start</th>
		        <th>Date End</th>
		        <th>Operations</th>
	    	</tr>

	    	<?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	    	<tr>
				<td data-target="id"><?php echo e($employee->id); ?></td>
	    		<td data-target="first_name"><?php echo e($employee->first_name); ?></td>
				<td data-target="middle_name"><?php echo e($employee->middle_name); ?></td>
	    		<td data-target="last_name"><?php echo e($employee->last_name); ?></td>
	    		<td data-target="division"><?php echo e($employee->division); ?></td>
				<td data-target="section"><?php echo e($employee->section); ?></td>
	    		<td data-target="start_date"><?php echo e($employee->start_date); ?></td>
	    		<td data-target="end_date"><?php echo e($employee->end_date); ?></td>
	   			<td>
    					<form method='POST' action='/dashboard/<?php echo e($employee->id); ?>'>
							<?php echo e(csrf_field()); ?>

							<?php echo e(method_field('PATCH')); ?>

							<button type="button" class="btn btn-info"
							data-toggle="modal" data-target="#editModal" id="btnedit" data-role="update"data-id="<?php echo $employee['id'] ;?>">Edit</button>
						
	    				<form method='POST' action='/dashboard/<?php echo e($employee->id); ?>'>
							<?php echo e(csrf_field()); ?>

							<?php echo e(method_field('DELETE')); ?>

							<button name="save" class="btn btn-danger disabled">Delete</button>
						</form> </form>
	    		</td>
	    	</tr>
	    	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	    </table>

<form action="<?php echo e(URL::to('/home')); ?>" method="POST" class="form-horizontal">
	<?php echo e(csrf_field()); ?>

		<!-- Modal ADD -->
		<div id="loginModal" class="modal fade" role="dialog">
		  <div class="modal-dialog">

		    <!-- Modal content-->
		      <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Form Identification</h4>

		      </div>
			      <div class="modal-body">

				  <div class="form-container">
			<form action="<?php echo e(URL::to('dashboard')); ?>" method="POST">
				<?php echo e(csrf_field()); ?>

				<label type="text" class="form-inline">First name</label>
				<input type="text" name="first_name" class="form-control" required>
				<label type="text" class="form-inline">Middle name</label>
				<input type="text" name="middle_name" class="form-control" required>
				<label name="last_name" class="form-inline">Last name</label>
				<input type="text" name="last_name"  class="form-control" required>
				
				<div class="form-horizontal form-inline">

				<label type="text" class="form-inline">Division</label>
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
				<label type="text" class="form-inline">Section</label>
				<div class="input-form">
					<select name="division" class="form-control" required>
					<option value="">- - -</option>
					<option value="ARD">ARD</option>
					<option value="Chief">Chief</option>
					<option value="Employee">Employee</option>
					</select>
				</div>

				</div>
				<br>
				<label type="text" class="form-inline">Time span</label>	
					<input type="month" placeholder="Start Month" name="month1" class="form-inline calendar">
					to
					<input type="month" placeholder="End Month" name="month2" class="form-inline calendar">
				<br>
				<br>
				<label type="text" class="form-inline">Reviewed by</label>
		
				<div class="input-form">
					<select name="reviewed" class="form-control" required>
					<option value="">- - -</option>
					<option value="John Foo">John Foo</option>
					<option value="Mary White">Mary White</option>
					</select>
				</div>
				
				<label type="text" class="form-inline">Approved by</label>
			
				<div class="input-form">
					<select name="approved" class="form-control" required>
					<option value="">- - -</option>
					<option value="Dr. Peter Parker">Dr. Peter Parker</option>
					<option value="Dr. Bellatrix Lastrange">Dr. Bellatrix Lastrange</option>
					</select>
				</div>
				
				</form>
			</div>

			      </div>
			      <div class="modal-footer">
				  <button type="submit" class="btn btn-primary">Proceed to Form</button>
					&nbsp
					<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
		        
		      </div>
		    </div>
		  </div>
		</div>
</form>

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

	$(document).ready(function(){
		$(document).on('click', '[data-role=update]', function(){
			//alert($(this).data('id'));
			var id = $(this).data('id');
			var first_name = $('#' + id).children('td[data-target=first_name]').text();
			var last_name = $('#' + id).children('td[data-target=last_name]').text();
			var email = $('#' + id).children('td[data-target=email]').text();
			var created_at = $('#' + id).children('td[data-target=created_at]').text();
			var user_role = $('#' + id).children('td[data-target=user_role]').text();

			$('#first_name').val(first_name);
			$('#last_name').val(last_name);
			$('#email').val(email);
			$('#created_at').val(created_at);
			$('#user_role').val(user_role);
			
		});
	});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>