<?php $__env->startSection('after-styles'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<br>
    <div id="form-container">
    <h1 id="form-header"><i class="fa fa-user"></i> &nbsp Individual Performance and Commitment Review</h1>
    <div id="form-wrapper-A"> 

        <div class="container">
            <div  class="container-fluid">
            <div class="row text-center table">           
                    <div class="col-md-2">Output</div>
                    <div class="col-md-2">Success Indicator</div>
                    <div class="col-md-3">Actual accomplishments</div>
                    <div class="col-md-3">Rating</div>
                    <div class="col-md-2">Remark</div>
            </div>
            <div class="gap-vertical-2">
	            <input type="button" name="add" id="add" value="Add Row" class="btn btn-primary btn-xs"  onClick="addRow('dataTableA')" /> 
	                    &nbsp &nbsp
	            <input type="button" value="Remove Row" class="btn btn-danger btn-xs" onClick="deleteRow('dataTableA')" />
	         </div>
            <div class="row">	
            
            
            	<div class="col-md-12">
            		    <h5>A. Operations</h5>  
            	</div>
            </div>


            </div>        
                <table  id="dataTableA">
                        <tr>	
                        	<td class="" id="outputA">
                                    <input type="checkbox" name="chk[]" />
                             </td>
                            <p class="text-center">
                                <td class="col-md-2">
                                    <textarea type="textarea"  id="txtarea" placeholder="Output statement" class="form-control"  rows="3" name="output[]"></textarea>
                                </td>
                                <td class="col-md-2">
                                    <textarea type="textarea" placeholder="Success indicator statement" class="form-control fields" rows = "3" name="success_indicator[]"></textarea>
                                </td>
                                <td class="col-md-3">
                                    <textarea type="textarea" placeholder="Actual accomplishment statement" class="form-control" rows="3" name="actual_accomplishments[]"></textarea>
                                </td>
                                <td class="col-md-1">
                                    <select class="form-control" name="quality[]">
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                    </select>
                                </td>
                                <td class="col-md-1">
                                    <select class="form-control" name="efficiency[]">
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                    </select>
                                </td>
                                <td class="col-md-1">
                                    <select class="form-control" name="timeliness[]">
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                    </select>
                                </td>
                                <td class="col-md-2">
                                    <textarea type="text" placeholder="Remarks" class="form-control" rows="3" name="remark[]"></textarea>
                                </td>
                            </p>	
                        </tr>
                </table>


            </div>
          </div>
      </div>


    <button type="submit" class="btn btn-primary">CONTINUE WORKING LATER</button>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>