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

	<h2><i class="fa fa-users"></i> &nbsp User Administration</h2>
	
  <!-- Trigger the modal with a button -->
		<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#loginModal">Add Employee</button>
		<br>

	    <table class="table">
	        <br>
	        <tr>
		        <th>First Name</th>
		        <th>Last Name</th>
		        <th>Email</th>
		        <th>Date added</th>
		        <th>User roles</th>
		        <th>Operations</th>
	    	</tr>

	    	<?php $__currentLoopData = $employee; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employees): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	    	<tr id="<?php echo $employees['id']; ?>">
	    		<td data-target="first_name"><?php echo e($employees->first_name); ?></td>
	    		<td data-target="last_name"><?php echo e($employees->last_name); ?></td>
	    		<td data-target="email"><?php echo e($employees->email); ?></td>
	    		<td data-target="created_at"><?php echo e($employees->created_at); ?></td>
	    		<td data-target="user_role"><?php echo e($employees->user_role); ?></td>
	   			<td>
    					<form method='POST' action='/home/<?php echo e($employees->id); ?>'>
							<?php echo e(csrf_field()); ?>

							<?php echo e(method_field('PATCH')); ?>

							<button type="button" class="btn btn-info"
							data-toggle="modal" data-target="#editModal" id="btnedit" data-role="update"data-id="<?php echo $employees['id'] ;?>">Edit</button>
						
	    				<form method='POST' action='/home/<?php echo e($employees->id); ?>'>
							<?php echo e(csrf_field()); ?>

							<?php echo e(method_field('DELETE')); ?>

							<button name="save" class="btn btn-danger">Delete</button>
						</form> </form>
	    		</td>
	    	</tr>
	    	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	    </table>

<form action="<?php echo e(URL::to('/home')); ?>" method="POST" class="form-horizontal">
	<?php echo e(csrf_field()); ?>

		<!-- Modal LOGIN -->
		<div id="loginModal" class="modal fade" role="dialog">
		  <div class="modal-dialog">

		    <!-- Modal content-->
		      <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Add Employee</h4>

		      </div>
			      <div class="modal-body">

			         	<form action="<?php echo e(URL::to('/home')); ?>" method="POST" class="horizontal-forms">
	                        <?php echo e(csrf_field()); ?>

	                        First name
	                        <input type="text" name="first_name" class="form-control" class="col-md-8">
	                        <br>
	                        Last name
	                        <input type="text" name="last_name"  class="form-control" class="col-md-8">
	                        <br>
	                        email
	                        <input type="email" name="email" class="form-control"  class="col-md-8">
	                        <br>
	                        User role
	                        <select name="user_role" class="form-control" class="col-md-8">
			            	<option value="Marksman">Marksman</option>
							<option value="Tank">Tank</option>
							<option value="Assassin">Assassin</option>
							<option value="Fighter">Fighter</option>
			            	<option value="Support">Support</option>
			            	<option value="Mage">Mage</option>
			            	</select>
	                        <br>
                        </form> 
			      </div>
			      <div class="modal-footer">
			    <input type="submit" value="Add" class="btn btn-primary"> 
		        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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
			         	<form action="<?php echo e(URL::to('/home')); ?>" method="POST" class="horizontal-forms">
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