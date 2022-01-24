<?php $__env->startSection('after-styles'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<style type="text/css">
    .button{
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 20px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 12px;
    }
</style>
<script type="text/javascript">
    
</script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="col-md-12" id="form-wrapper-B">


            <div class="row">
                <h3 class="col-md-12 ">D. Innovation</h3>
            </div>

        <table class="table">
            <div  class="container-fluid">
            <thead>

                </div>
                <br>
                <div class="row">
                    <tr>
                        <div class="row-h2">
                            
                            <div class="col-md-6">
                                
                            </div>  
                            <div class="col-md-2">
                                <b>Quality</b>
                            </div>
                            <div class="col-md-2">
                                <b>Efficiency</b>
                            </div>  
                            <div class="col-md-2">
                                <b>Timeliness</b>
                            </div> 
                        </div>
                          
                    </tr>  
                </div>

            </thead>
        </table> 
        
        <table class="table">      
                <tbody  id="dataTableD">
                <div class="row">
                    <tr>
                        <td class="col-md-6">
                            <textarea style="resize: vertical;" type="textarea" spellcheck="true" placeholder="Output statement" class="form-control fields" rows = "6" name="innov_output[]" readonly></textarea>
                        </td>
                </div> 
                        <ul>
                        <td class="hidden">
                            <input  type="hidden" name="innov_tag" value="5">
                        </td>
                        
                        <td class="col-md-2">
                            
                            <select class="form-control" name="innov_qualityD[]">
                            <li><option value="5">5</option></li>
                            <li><option value="4">4</option></li>
                            <li><option value="3">3</option></li>
                            <li><option value="2">2</option></li>
                            <li><option value="1">1</option></li>
                            </select>
                        </ul>
                        </td>
                        <td class="col-md-2">
                            <select class="form-control" name="innov_efficiencyD[]">
                            <option value="5">5</option>
                            <option value="4">4</option>
                            <option value="3">3</option>
                            <option value="2">2</option>
                            <option value="1">1</option>
                            </select>
                        </td> 
                        <td class="col-md-2">
                            <select class="form-control" name="innov_timelinessD[]">
                            <option value="5">5</option>
                            <option value="4">4</option>
                            <option value="3">3</option>
                            <option value="2">2</option>
                            <option value="1">1</option>
                            </select>
                        </td>
                        
                    </tr>       
                        
                </tbody>
          
        </table>

        <table class="table"> 
            <div class="row">
                <td class="col-md-6">
                            <textarea style="resize: vertical;" type="textarea" spellcheck="true" placeholder="Success indicator statement" class="form-control fields" rows = "5" name="innov_success_indicator[]" readonly></textarea>
                        </td>
                        <td class="col-md-6">
                            <textarea type="text" placeholder="Remarks" class="form-control" rows="5" name="innov_remarkD[]"></textarea>
                        </td>

            </div>
            </table>

        <table class="table">
            <div class="row">
                <td class="col-md-6 text">
                            <textarea style="resize: vertical;" type="textarea" spellcheck="true" placeholder="Actual accomplishment statement" class="form-control" rows="5" name="innov_actual_accomplishments[]" readonly></textarea>
                        </td>
                        <td class="col-md-4"></td>
                        <td class="col-md-1" style="padding-top: 20px;">
                            <button class="button previous">&#8249;</button>
                        </td>
                        <td class="col-md-1" style="padding-top: 20px;">
                            <button class="button next">&#8250;</button>
                        </td>
            </div>
        </table>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('after-scripts'); ?>
<script type="text/javascript"> 


</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>