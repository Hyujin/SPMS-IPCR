<?php $__env->startSection('after-styles'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<br>
    <div id="form-container">
    <h1 id="form-header"><i class="fa fa-user"></i> &nbsp Individual Performance and Commitment Review</h1>
    <div id="form-wrapper-A"> 
    <h3>A. Operations</h3>  
    <form>
        <table class="table">
            <div  class="container-fluid">
            <thead>
                <tr>
                    <td></td>
                    <td>Output</td>
                    <td>Success Indicator</td>
                    <td>Actual Achievements</td>
                    <td id="extend">Quality</td>
                    <td>Efficiency</td>
                    <td>Timeliness</td>
                    <td>Remarks</td>
                </tr>
            </thead>        
                <tbody  id="dataTableA">
                    <br>
                    
                    <input type="button" value="Add Row" class="btn btn-primary btn-sm" onClick="addRow('dataTableA')" /> 
                    &nbsp &nbsp
                    <input type="button" value="Remove Row" class="btn btn-danger btn-sm" onClick="deleteRow('dataTableA')" />
                        <tr>
                            <p>
                                <td class="flex-row" id="outputA">
                                    <input type="checkbox" name="chk[]" />
                                </td>
                                <td >
                                    <textarea type="textarea"  id="txtarea" placeholder="Output statement" class="form-control"  rows="3" name="output[]"></textarea>
                                </td>
                                <td>
                                    <textarea type="textarea" placeholder="Success indicator statement" class="form-control fields" rows = "3" name="success_indicator[]"></textarea>
                                </td>
                                <td>
                                    <textarea type="textarea" placeholder="Actual accomplishment statement" class="form-control" rows="3" name="actual_accomplishments[]"></textarea>
                                </td>
                                <td>
                                    <select class="form-control" name="quality[]">
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="form-control" name="efficiency[]">
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="form-control" name="timeliness[]">
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                    </select>
                                </td>
                                <td>
                                    <textarea type="text" placeholder="Remarks" class="form-control" rows="3" name="remark[]"></textarea>
                                </td>
                            </p>
                        </tr>
                </tbody>
            </div>
            </table>
        </form>
    </div>
    
    <!--------------------------  ---------------------------->
    <div id="form-wrapper-B"> 
    <h3>B. General Administrative Services</h3>
        <table class="table">
        <form>
            <div  class="container-fluid">
                <tr>
                    <td></td>
                    <td>Output</td>
                    <td>Success Indicator</td>
                    <td>Actual Achievements</td>
                    <td id="extend">Quality</td>
                    <td>Efficiency</td>
                    <td>Timeliness</td>
                    <td>Remark</td>
                </tr>
                    
                <tbody  id="dataTableB">
                <section>
                    <br>
                    <input type="button" value="Add Row" class="btn btn-primary btn-sm" onClick="addRow('dataTableB')" /> 
                    &nbsp &nbsp
                    <input type="button" value="Remove Row" class="btn btn-danger btn-sm" onClick="deleteRow('dataTableB')" />
                        <tr>
                            <p>
                                <td class="flex-row">
                                    <input type="checkbox" name="chk[]" />
                                </td>
                                <td >
                                    <textarea type="textarea" placeholder="Output statement" class="form-control"  rows="3" name="output[]"></textarea>
                                </td>
                                <td>
                                    <textarea type="textarea" placeholder="Success indicator statement" class="form-control fields" rows = "3" name="success_indicator[]"></textarea>
                                </td>
                                <td>
                                    <textarea type="textarea" placeholder="Actual accomplishment statement" class="form-control" rows="3" name="actual_accomplishments[]"></textarea>
                                </td>
                                <td>
                                    <select class="form-control" name="quality[]">
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                    <option value="0">0</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="form-control" name="efficiency[]">
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                    <option value="0">0</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="form-control" name="timeliness[]">
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                    <option value="0">0</option>
                                    </select>
                                </td>
                                <td>
                                    <textarea type="text" placeholder="Remarks" class="form-control" rows="3" name="remark[]"></textarea>
                                </td>
                            </p>
                        </tr>
                    </section>
                    </form>
                </tbody>
            </div>
            
        </table>
    </form>
    </div>

    
    <!--------------------------  ---------------------------->
    <div id="form-wrapper-C"> 
    <h3>C. Support to Innovation</h3>
        <table class="table">
        <form>
            <div  class="container-fluid">
                <tr>
                    <td></td>
                    <td>Output</td>
                    <td>Success Indicator</td>
                    <td>Actual Achievements</td>
                    <td id="extend">Quality</td>
                    <td>Efficiency</td>
                    <td>Timeliness</td>
                    <td>Remark</td>
                </tr>
                    
                <tbody  id="dataTableC">
                <section>
                    <br>
                    <input type="button" value="Add Row" class="btn btn-primary btn-sm" onClick="addRow('dataTableC')" /> 
                    &nbsp &nbsp
                    <input type="button" value="Remove Row" class="btn btn-danger btn-sm" onClick="deleteRow('dataTableC')" />
                        <tr>
                            <p>
                                <td class="flex-row">
                                    <input type="checkbox" name="chk[]" />
                                </td>
                                <td >
                                    <textarea type="textarea" placeholder="Output statement" class="form-control"  rows="3" name="output[]"></textarea>
                                </td>
                                <td>
                                    <textarea type="textarea" placeholder="Success indicator statement" class="form-control fields" rows = "3" name="success_indicator[]"></textarea>
                                </td>
                                <td>
                                    <textarea type="textarea" placeholder="Actual accomplishment statement" class="form-control" rows="3" name="actual_accomplishments[]"></textarea>
                                </td>
                                <td>
                                    <select class="form-control" name="quality[]">
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                    <option value="0">0</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="form-control" name="efficiency[]">
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                    <option value="0">0</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="form-control" name="timeliness[]">
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                    <option value="0">0</option>
                                    </select>
                                </td>
                                <td>
                                    <textarea type="text" placeholder="Remarks" class="form-control" rows="3" name="remark[]"></textarea>
                                </td>
                            </p>
                        </tr>
                    </section>
                    </form>
                </tbody>
            </div>
        </table>
    </form>
    </div>

    <!-------------------  --------------->

    <div id="form-wrapper-D"> 
    <h3>Innovation</h3>
        <table class="table">
        <form>
            <div  class="container-fluid">
                <tr>
                    <td></td>
                    <td>Output</td>
                    <td>Success Indicator</td>
                    <td>Actual Achievements</td>
                    <td id="extend">Quality</td>
                    <td>Efficiency</td>
                    <td>Timeliness</td>
                    <td>Remark</td>
                </tr>
                    
                <tbody  id="dataTableD">
                <section>
                    <br>
                    <input type="button" value="Add Row" class="btn btn-primary btn-sm" onClick="addRow('dataTableD')" /> 
                    &nbsp &nbsp
                    <input type="button" value="Remove Row" class="btn btn-danger btn-sm" onClick="deleteRow('dataTableD')" />
                        <tr>
                            <p>
                                <td class="flex-row">
                                    <input type="checkbox" name="chk[]" />
                                </td>
                                <td >
                                    <textarea type="textarea" placeholder="Output statement" class="form-control"  rows="3" name="output[]"></textarea>
                                </td>
                                <td>
                                    <textarea type="textarea" placeholder="Success indicator statement" class="form-control fields" rows = "3" name="success_indicator[]"></textarea>
                                </td>
                                <td>
                                    <textarea type="textarea" placeholder="Actual accomplishment statement" class="form-control" rows="3" name="actual_accomplishments[]"></textarea>
                                </td>
                                <td>
                                    <select class="form-control" name="quality[]">
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                    <option value="0">0</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="form-control" name="efficiency[]">
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                    <option value="0">0</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="form-control" name="timeliness[]">
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                    <option value="0">0</option>
                                    </select>
                                </td>
                                <td>
                                    <textarea type="text" placeholder="Remarks" class="form-control" rows="3" name="remark[]"></textarea>
                                </td>
                            </p>
                        </tr>
                    </section>
                    </form>
                </tbody>
            </div>
        </table>
    </form>
    </div> <!-- container ends -->
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>