    
    <?php $__env->startSection('after-styles'); ?>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('scripts'); ?>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('content'); ?>

    <div class="container-fluid" id="employee">
        <div class="form-container">
        <div class="form-header">
                <h4><b>SPMS – Annex B </b></h4>
                <h4><b> INDIVIDUAL PERFORMANCE COMMITMENT AND REVIEW (IPCR) FORM </b></h4>
        </div> 
    <form method="POST"  action="<?php echo e(URL::to('/forms/ipcr/edit/pre')); ?>">
            <?php echo e(csrf_field()); ?>

            <?php echo e(method_field('PATCH')); ?>

        <input type="hidden" name="status" value="0">
        <div class="form-wrapper" >
            <div class="hidden">
                <input type="hidden" name="form" value="IPCR">     
                <input type="text" name="form_id" value="<?php echo e($preforms->id); ?>">
            </div>

            <div class="row">
                <div class="col-md-4">
                   <label type="text" class="form-inline"></label> 
                </div>
                <div class="co  l-md-8"></div>
            </div>
            <div class="form-inline">
                    <input type="text" name="first_name"  class="form-control" required  value='<?php echo e($preforms->first_name); ?>' >
                    <input type="text" name="middle_name" placeholder="Middle name" class="form-control" value='<?php echo e($preforms->middle_name); ?>' required>
                    <input type="text" name="last_name" placeholder="Last name" class="form-control" value='<?php echo e($preforms->last_name); ?>' required>
            </div> 
                    
                   
                    
                    <div class="form-horizontal form-inline">

                    <label type="text" class="form-inline">Division</label>
                    <div class="input-form">
                        <select name="division" class="form-control" required>
                        <option value="<?php echo e($preforms->division); ?>"><?php echo e($preforms->division); ?></option>
                        <option value="Finance and Admin Services">Finance and Admin Services</option>
                        <option value="Human Resource">Human Resource</option>
                        <option value="Commission on Audit">Commission on Audit</option>
                        <option value="Technical Services">Technical Services</option>
                        <option value="Technical Support Services">Technical Support Services</option>
                        </select>
                    </div>
                    <label type="text" class="form-inline">Section</label>
                    <div class="input-form">
                        <select name="section" class="form-control" required>
                        <option value="<?php echo e($preforms->section); ?>"><?php echo e($preforms->section); ?></option>
                        <option value="ICT">ICT</option>
                        <option value="Food Technology">Food Technology</option>
                        <option value="S&T Center">S&T Center</option>
                        <option value="Scholarship">Scholarship</option>
                        </select>
                    </div>

                    </div>
                    <br>
                    <label type="text" class="form-inline">Time span</label>    
                        <input type="date" placeholder="Start Month" name="start_date" value="<?php echo e($preforms->start_date); ?>" class="form-inline calendar">
                        to
                        <input type="date" placeholder="End Month" name="end_date"  value="<?php echo e($preforms->end_date); ?>" class="form-inline calendar">
                    <br>
                    <br>
                    <label type="text" class="form-inline">Reviewed by</label>
            
                    <div class="input-form">
                        <select name="reviewed" class="form-control" required>
                        <option value="<?php echo e($preforms->reviewed); ?>"><?php echo e($preforms->reviewed); ?></option>
                        <option value="Jonathan Victolero">Jonathan Victolero</option>
                        <option value="Mary White">Dummy Name</option>
                        </select>
                    </div>
                    
                    <label type="text" class="form-inline">Approved by</label>
                
                    <div class="input-form">
                        <select name="approved" class="form-control" required>
                        <option value="<?php echo e($preforms->approved); ?>"><?php echo e($preforms->approved); ?></option>
                        <option value="Dr. Anthony C. Sales  CESO lll">Dr. Anthony C. Sales CESO lll</option>
                        </select>
                        &nbsp
                    </div>
                    <div>
                      <button type="submit" class="btn btn-success btn-mid btn-float-right" id="empButton">NEXT</button>
                    </div>
     
        </div>
    </form>
    </div>
    </div>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>