<?php $__env->startSection('after-styles'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script type="text/javascript">
	
</script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="col-md-12" id="form-wrapper-A">

<!--         <div>
            <button type="button" class="btn btn-success btn-mid btn-right" id="formButton">Go back</button>
        </div> -->

            <div class="row">
                <h3 class="col-md-12 ">A. Operations</h3>
            </div>

        <table class="table">
            <div  class="container-fluid">
                <!-- <div class="row">

                    <input type="button" value="+" class="btn btn-primary btn-sm" onClick="addRow('dataTableA1')" /> 
                    &nbsp
                    <input type="button" value="-" class="btn btn-danger btn-sm" onClick="deleteRow('dataTableA1')" />
                </div>  -->
            <thead>

                <div class="row">
                    <tr>
                        <div class="row-h2">
                            <div class="col-md-2">
                                Output
                            </div>
                            <div class="col-md-2">
                                Success Indicator
                            </div>
                            <div class="col-md-2">
                                Actual Achievements
                            </div>  
                            <div class="col-md-1">
                                Quality
                            </div>
                            <div class="col-md-1">
                                Efficiency
                            </div>  
                            <div class="col-md-1">
                                Timeliness
                            </div> 
                            <div class="col-md-3">
                                Remarks
                            </div> 
                        </div>
                          
                    </tr>  
                </div>
                <div class="row">
                    <tr>
                        <div class="col-md-12 row-h3">
                                S&T Program for Regional and Countryside Development  
                        </div>
                       
                    </tr>
                </div>
                <div class="row">
                    <tr>
                        <div class="col-md-12 row-h3" style="padding-left: 20px;">
                            I. DIFFUSION AND TRANSFER OF KNOWLEDGE AND TECHNOLOGIES; AND OTHER RELATED PROJECTS AND ACTIVITIES
                        </div>
                    </tr>
                </div>
            </thead>
        </table> 

        <table class="table">      
                <tbody  id="dataTableA1">

                  
                <div class="row">
                    <tr>
                        <td class="col-md-2">
                            <textarea type="textarea" spellcheck="true"  id="txtarea" placeholder="Output statement" class="form-control"  rows="3" name="op1_output[]" readonly></textarea>
                        </td>
                        <td class="col-md-2">
                            <textarea type="textarea" spellcheck="true" placeholder="Success indicator statement" class="form-control fields" rows = "3" name="op1_success_indicator[]" readonly></textarea>
                        </td>
                        <td class="col-md-2">
                            <textarea type="textarea" spellcheck="true" placeholder="Actual accomplishment statement" class="form-control" rows="3" name="op1_actual_accomplishments[]" readonly></textarea>
                        </td>

                        <td class="hidden">
                            <input  type="hidden" name="op1_tag" value="1">
                        </td>
                        <td class="col-md-1">
                        	<select class="form-control" name="op1_qualityA[]">
        					<option value="5">5</option>
        					<option value="4">4</option>
        					<option value="3">3</option>
					        <option value="2">2</option>
					        <option value="1">1</option>
					        </select>
                        </td>
                        <td class="col-md-1">
                        	<select class="form-control" name="op1_efficiencyA[]">
					        <option value="5">5</option>
					        <option value="4">4</option>
					        <option value="3">3</option>
					        <option value="2">2</option>
					        <option value="1">1</option>
					        </select>
                        </td> 
                        <td class="col-md-1">
                        	<select class="form-control" name="op1_timelinessA[]">
					        <option value="5">5</option>
					        <option value="4">4</option>
					        <option value="3">3</option>
					        <option value="2">2</option>
					        <option value="1">1</option>
					        </select>
                        </td>
                        <td class="col-md-3">
        					<textarea type="text" placeholder="Remarks" class="form-control" rows="3" name="op1_remarkA[]"></textarea>
    					</td>
                    </tr>
                </div>        
                        
                </tbody>
          
        </table>

        <table class="table">
            <div  class="container-fluid">
                <!-- <div class="row">
                    <input type="button" value="+" class="btn btn-primary btn-sm" onClick="addRow('dataTableA2')" /> 
                    &nbsp
                    <input type="button" value="-" class="btn btn-danger btn-sm" onClick="deleteRow('dataTableA2')" />
                </div>  -->
            <thead>
                <div class="row">
                    <tr>
                        <div class="col-md-12 row-h3" style="padding-left: 20px;">
                            II. ENHANCEMENT OF SCIENCE AND TECHNOLOGY PROJECTS/ACTIVITIES
                        </div>
                    </tr>
                </div>
            </thead>        
                <tbody  id="dataTableA2">
                
                <div class="row">
                    <tr>
                        <td class="col-md-2">
                            <textarea type="textarea" spellcheck="true"  id="txtarea" placeholder="Output statement" class="form-control"  rows="3" name="op2_output[]" readonly></textarea>
                        </td>
                        <td class="col-md-2">
                            <textarea type="textarea" spellcheck="true" placeholder="Success indicator statement" class="form-control fields" rows = "3" name="op2_success_indicator[]" readonly></textarea>
                        </td>
                        <td class="col-md-2">
                            <textarea type="textarea" spellcheck="true" placeholder="Actual accomplishment statement" class="form-control" rows="3" name="op2_actual_accomplishments[]" readonly=""></textarea>
                        </td>
                        <td class="hidden">
                            <input  type="hidden" name="op2_tag" value="2">
                        </td> 
                        <td class="col-md-1">
                        	<select class="form-control" name="op2_qualityA[]">
        					<option value="5">5</option>
        					<option value="4">4</option>
        					<option value="3">3</option>
					        <option value="2">2</option>
					        <option value="1">1</option>
					        </select>
                        </td>
                        <td class="col-md-1">
                        	<select class="form-control" name="op2_efficiencyA[]">
					        <option value="5">5</option>
					        <option value="4">4</option>
					        <option value="3">3</option>
					        <option value="2">2</option>
					        <option value="1">1</option>
					        </select>
                        </td> 
                        <td class="col-md-1">
                        	<select class="form-control" name="op2_timelinessA[]">
					        <option value="5">5</option>
					        <option value="4">4</option>
					        <option value="3">3</option>
					        <option value="2">2</option>
					        <option value="1">1</option>
					        </select>
                        </td>
                        <td class="col-md-3">
        					<textarea type="text" placeholder="Remarks" class="form-control" rows="3" name="op2_remarkA[]"></textarea>
    					</td> 
                    </tr>
                </div>        
                        
                </tbody>
            </div>
        </table>

     <!------------------------------------------------------------------------------------------------------>
   
    <div class="container-fluid" id="form-wrapper-B"> 
        <div class="row">
            <h3 class="col-md-12 ">B. General Administratice Services</h3>
        </div>
        
    
        <table class="table">
            <div  class="container-fluid">
                <!-- <div class="row">
                    <input type="button" value="+" class="btn btn-primary btn-sm" onClick="addRow('dataTableB')" /> 
                    &nbsp
                    <input type="button" value="-" class="btn btn-danger btn-sm" onClick="deleteRow('dataTableB')" />
                </div>  -->
            <thead>
                <div class="row-h2">
                            <div class="col-md-2">
                                Output
                            </div>
                            <div class="col-md-2">
                                Success Indicator
                            </div>
                            <div class="col-md-2">
                                Actual Achievements
                            </div>  
                            <div class="col-md-1">
                                Quality
                            </div>
                            <div class="col-md-1">
                                Efficiency
                            </div>  
                            <div class="col-md-1">
                                Timeliness
                            </div> 
                            <div class="col-md-3">
                                Remarks
                            </div> 
                        </div>

            </thead>        
                <tbody  id="dataTableB">
                
                <div class="row">
                    <tr>
                        <td class="col-md-2">
                            <textarea type="textarea" spellcheck="true"  id="txtarea" placeholder="Output statement" class="form-control"  rows="3" name="gas_output[]" readonly></textarea>
                        </td>
                        <td class="col-md-2">
                            <textarea type="textarea" spellcheck="true" placeholder="Success indicator statement" class="form-control fields" rows = "3" name="gas_success_indicator[]" readonly></textarea>
                        </td>
                        <td class="col-md-2">
                            <textarea type="textarea" spellcheck="true" placeholder="Actual accomplishment statement" class="form-control" rows="3" name="gas_actual_accomplishments[]" readonly></textarea>
                        </td>
                        <td class="hidden">
                            <input  type="hidden" name="tag" value="3">
                        </td>
                        <td class="hidden">
                            <input  type="hidden" name="gas_tag" value="3">
                        </td> 
                        <td class="col-md-1">
                        	<select class="form-control" name="gas_qualityB[]">
        					<option value="5">5</option>
        					<option value="4">4</option>
        					<option value="3">3</option>
					        <option value="2">2</option>
					        <option value="1">1</option>
					        </select>
                        </td>
                        <td class="col-md-1">
                        	<select class="form-control" name="gas_efficiencyB[]">
					        <option value="5">5</option>
					        <option value="4">4</option>
					        <option value="3">3</option>
					        <option value="2">2</option>
					        <option value="1">1</option>
					        </select>
                        </td> 
                        <td class="col-md-1">
                        	<select class="form-control" name="gas_timelinessB[]">
					        <option value="5">5</option>
					        <option value="4">4</option>
					        <option value="3">3</option>
					        <option value="2">2</option>
					        <option value="1">1</option>
					        </select>
                        </td>
                        <td class="col-md-3">
        					<textarea type="text" placeholder="Remarks" class="form-control" rows="3" name="gas_remarkB[]"></textarea>
    					</td>        
                    </tr>
                </div>        
                        
                </tbody>
            </div>
            </table>

       </div>

       <!--------------------------------------------------------------------------------------------------------------------------->

       <div class="container-fluid" id="form-wrapper-C"> 
        <div class="row">
            <h3 class="col-md-12 ">C. Support to Operations</h3>
        </div>
        
    
        <table class="table">
            <div  class="container-fluid">
                <!-- <div class="row">
                    <input type="button" value="+" class="btn btn-primary btn-sm" onClick="addRow('dataTableC')" /> 
                    &nbsp
                    <input type="button" value="-" class="btn btn-danger btn-sm" onClick="deleteRow('dataTableC')" />
                </div>  -->
            <thead>
                <div class="row">
                    <tr>
                        <div class="row-h2">
                            <div class="col-md-2">
                                Output
                            </div>
                            <div class="col-md-2">
                                Success Indicator
                            </div>
                            <div class="col-md-2">
                                Actual Achievements
                            </div>  
                            <div class="col-md-1">
                                Quality
                            </div>
                            <div class="col-md-1">
                                Efficiency
                            </div>  
                            <div class="col-md-1">
                                Timeliness
                            </div> 
                            <div class="col-md-3">
                                Remarks
                            </div> 
                        </div>
                          
                    </tr>  
                </div>
            </thead>        
                <tbody  id="dataTableC">
                
                <div class="row">
                    <tr>
                        <td class="col-md-2">
                            <textarea type="textarea" spellcheck="true"  id="txtarea" placeholder="Output statement" class="form-control"  rows="3" name="sto_output[]" readonly=""></textarea>
                        </td>
                        <td class="col-md-2">
                            <textarea type="textarea" spellcheck="true" placeholder="Success indicator statement" class="form-control fields" rows = "3" name="sto_success_indicator[]" readonly=""></textarea>
                        </td>
                        <td class="col-md-2">
                            <textarea type="textarea" spellcheck="true" placeholder="Actual accomplishment statement" class="form-control" rows="3" name="sto_actual_accomplishments[]" readonly=""></textarea>
                        </td>
                        <td class="hidden">
                            <input  type="hidden" name="sto_tag" value="4">
                        </td>
                        <td class="col-md-1">
                        	<select class="form-control" name="sto_qualityC[]">
        					<option value="5">5</option>
        					<option value="4">4</option>
        					<option value="3">3</option>
					        <option value="2">2</option>
					        <option value="1">1</option>
					        </select>
                        </td>
                        <td class="col-md-1">
                        	<select class="form-control" name="sto_efficiencyC[]">
					        <option value="5">5</option>
					        <option value="4">4</option>
					        <option value="3">3</option>
					        <option value="2">2</option>
					        <option value="1">1</option>
					        </select>
                        </td> 
                        <td class="col-md-1">
                        	<select class="form-control" name="sto_timelinessC[]">
					        <option value="5">5</option>
					        <option value="4">4</option>
					        <option value="3">3</option>
					        <option value="2">2</option>
					        <option value="1">1</option>
					        </select>
                        </td>
                        <td class="col-md-3">
        					<textarea type="text" placeholder="Remarks" class="form-control" rows="3" name="sto_remarkC[]"></textarea>
    					</td>
                    </tr>
                </div>        
                        
                </tbody>
            </div>
            </table>

       </div>

<!--------------------------------------------------------------------------------------------------------------------------->

<div class="container-fluid" id="form-wrapper-D"> 
        <div class="row">
            <h3 class="col-md-12 ">Innovation</h3>
        </div>
        
    
        <table class="table">
            <div  class="container-fluid">
                <!-- <div class="row">
                    <input type="button" value="+" class="btn btn-primary btn-sm" onClick="addRow('dataTableD')" /> 
                    &nbsp
                    <input type="button" value="-" class="btn btn-danger btn-sm" onClick="deleteRow('dataTableD')" />
                </div>  -->
            <thead>
                <div class="row">
                    <tr>
                        <div class="row-h2">
                            <div class="col-md-2">
                                Output
                            </div>
                            <div class="col-md-2">
                                Success Indicator
                            </div>
                            <div class="col-md-2">
                                Actual Achievements
                            </div>  
                            <div class="col-md-1">
                                Quality
                            </div>  
                            <div class="col-md-1">
                                Efficiency
                            </div> 
                            <div class="col-md-1">
                                Timeliness
                            </div>   
                            <div class="col-md-3">
                                Remarks
                            </div>  
                        </div>
                          
                    </tr>  
                </div>

            </thead>        
                <tbody  id="dataTableD">
                
                <div class="row">
                    <tr>
                        <td class="col-md-2">
                            <textarea type="textarea" spellcheck="true"  id="txtarea" placeholder="Output statement" class="form-control"  rows="3" name="innov_output[]" readonly=""></textarea>
                        </td>
                        <td class="col-md-2">
                            <textarea type="textarea" spellcheck="true" placeholder="Success indicator statement" class="form-control fields" rows = "3" name="innov_success_indicator[]" readonly=""></textarea>
                        </td>
                        <td class="col-md-2">
                            <textarea type="textarea" spellcheck="true" placeholder="Actual accomplishment statement" class="form-control" rows="3" name="innov_actual_accomplishments[]" readonly=""></textarea>
                        </td>
                        <td class="hidden">
                            <input  type="hidden" name="innov_tag" value="5">
                        </td>   
                        <td class="col-md-1">
                        	<select class="form-control" name="innov_qualityD[]">
        					<option value="5">5</option>
        					<option value="4">4</option>
        					<option value="3">3</option>
					        <option value="2">2</option>
					        <option value="1">1</option>
					        </select>
                        </td>
                        <td class="col-md-1">
                        	<select class="form-control" name="innov_efficiencyD[]">
					        <option value="5">5</option>
					        <option value="4">4</option>
					        <option value="3">3</option>
					        <option value="2">2</option>
					        <option value="1">1</option>
					        </select>
                        </td> 
                        <td class="col-md-1">
                        	<select class="form-control" name="innov_timelinessD[]">
					        <option value="5">5</option>
					        <option value="4">4</option>
					        <option value="3">3</option>
					        <option value="2">2</option>
					        <option value="1">1</option>
					        </select>
                        </td>
                        <td class="col-md-3">
        					<textarea type="text" placeholder="Remarks" class="form-control" rows="3" name="innov_remarkD[]"></textarea>
    					</td>   
                    </tr>
                </div>        
 
                </tbody>
            </div>
            </table>

       </div>

        <div class="continue-work-button">
            <button type="submit" class="btn btn-success">CONTINUE WORK LATER</button>
        </div>

    </form>
    </div> <!-- container ends -->


<?php $__env->stopSection(); ?>

<?php $__env->startSection('after-scripts'); ?>
<script type="text/javascript">	


</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>