@extends('layouts.main')
@section('after-styles')
@endsection
@section('scripts')
@endsection
@section('content')

<div class="container-fluid" id="form">
    <div id="form-container">
        <div class="form-header">
            <h4><b>SPMS – Annex B </b></h4>
            <h4><b> INDIVIDUAL PERFORMANCE COMMITMENT AND REVIEW (IPCR) FORM </b></h4>
        </div> 

    

    <form action="{{ URL::to('/forms/ipcr/post') }}" method="POST">
        {{ csrf_field() }}
         
     <input type="hidden" name="status" value="0">     

    <div class="debug-work-button hidden">
                <button type="button" onclick="showValue(dataTableA1, dataTableA2, dataTableB, dataTableC, dataTableD)" class="btn btn-danger">Debug</button>
    </div>

    <div class="container container-fluid" id="form-wrapper-A">

        <div>
            <button type="button" class="btn btn-success btn-mid btn-right" id="formButton">Go back</button>
        </div>

            <div class="row">
                <h3 class="col-md-12 ">A. Operations</h3>
            </div>

        <table class="table">
            <div  class="container-fluid">
                <div class="row">

                    <input type="button" value="+" class="btn btn-primary btn-sm" onClick="addRow('dataTableA1')" /> 
                    &nbsp
                    <input type="button" value="-" class="btn btn-danger btn-sm" onClick="deleteRow('dataTableA1')" />
                </div> 
            <thead>

                <div class="row">
                    <tr>
                        <div class="row-h2">
                            <div class="col-md-4">
                                Output
                            </div>
                            <div class="col-md-4">
                                Success Indicator
                            </div>
                            <div class="col-md-4">
                                Actual Achievements
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
                        <td class="col-md-4">
                            <textarea type="textarea" spellcheck="true"  id="txtarea" placeholder="Output statement" class="form-control"  rows="3" name="op1_output[]"></textarea>
                        </td>
                        <td class="col-md-4">
                            <textarea type="textarea" spellcheck="true" placeholder="Success indicator statement" class="form-control fields" rows = "3" name="op1_success_indicator[]"></textarea>
                        </td>
                        <td class="col-md-4">
                            <textarea type="textarea" spellcheck="true" placeholder="Actual accomplishment statement" class="form-control" rows="3" name="op1_actual_accomplishments[]"></textarea>
                        </td>
                        <td class="hidden">
                            <input  type="hidden" name="op1_tag" value="1">
                        </td>
                        <td class="hidden">
                             @if (count($form_id) > 0 )
                             <input type="hidden" name="form_id" value="{{$form_id}}">
                             @else
                               <p> Something went wrong </p>
                             @endif
                        </td>        
                    </tr>
                </div>        
                        
                </tbody>
          
        </table>

        <table class="table">
            <div  class="container-fluid">
                <div class="row">
                    <input type="button" value="+" class="btn btn-primary btn-sm" onClick="addRow('dataTableA2')" /> 
                    &nbsp
                    <input type="button" value="-" class="btn btn-danger btn-sm" onClick="deleteRow('dataTableA2')" />
                </div> 
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
                        <td class="col-md-4">
                            <textarea type="textarea" spellcheck="true"  id="txtarea" placeholder="Output statement" class="form-control"  rows="3" name="op2_output[]"></textarea>
                        </td>
                        <td class="col-md-4">
                            <textarea type="textarea" spellcheck="true" placeholder="Success indicator statement" class="form-control fields" rows = "3" name="op2_success_indicator[]"></textarea>
                        </td>
                        <td class="col-md-4">
                            <textarea type="textarea" spellcheck="true" placeholder="Actual accomplishment statement" class="form-control" rows="3" name="op2_actual_accomplishments[]"></textarea>
                        </td>
                        <td class="hidden">
                            <input  type="hidden" name="op2_tag" value="2">
                        </td> 
                        <td class="hidden">
                             @if (count($form_id) > 0 )
                             <input type="hidden" name="form_id" value="{{$form_id}}">
                             @else
                               <p> Something went wrong </p>
                             @endif
                        </td> 
                            
                    </tr>
                </div>        
                        
                </tbody>
            </div>
        </table>

       </div>
    <!------------------------------------------------------------------------------------------------------>
   
    <div class="container-fluid" id="form-wrapper-B"> 
        <div class="row">
            <h3 class="col-md-12 ">B. General Administratice Services</h3>
        </div>
        
    
        <table class="table">
            <div  class="container-fluid">
                <div class="row">
                    <input type="button" value="+" class="btn btn-primary btn-sm" onClick="addRow('dataTableB')" /> 
                    &nbsp
                    <input type="button" value="-" class="btn btn-danger btn-sm" onClick="deleteRow('dataTableB')" />
                </div> 
            <thead>
                <div class="row">
                    <tr>
                        <div class="row-h2">
                            <div class="col-md-4">
                                Output
                            </div>
                            <div class="col-md-4">
                                Success Indicator
                            </div>
                            <div class="col-md-4">
                                Actual Achievements
                            </div>  
                        </div>
                          
                    </tr>  
                </div>

            </thead>        
                <tbody  id="dataTableB">
                
                <div class="row">
                    <tr>
                        <td class="col-md-4">
                            <textarea type="textarea" spellcheck="true"  id="txtarea" placeholder="Output statement" class="form-control"  rows="3" name="gas_output[]"></textarea>
                        </td>
                        <td class="col-md-4">
                            <textarea type="textarea" spellcheck="true" placeholder="Success indicator statement" class="form-control fields" rows = "3" name="gas_success_indicator[]"></textarea>
                        </td>
                        <td class="col-md-4">
                            <textarea type="textarea" spellcheck="true" placeholder="Actual accomplishment statement" class="form-control" rows="3" name="gas_actual_accomplishments[]"></textarea>
                        </td>
                        <td class="hidden">
                            <input  type="hidden" name="tag" value="3">
                        </td>
                        <td class="hidden">
                            <input  type="hidden" name="gas_tag" value="3">
                        </td>    
                        <td class="hidden">
                             @if (count($form_id) > 0 )
                             <input type="hidden" name="form_id" value="{{$form_id}}">
                             @else
                               <p> Something went wrong </p>
                             @endif
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
                <div class="row">
                    <input type="button" value="+" class="btn btn-primary btn-sm" onClick="addRow('dataTableC')" /> 
                    &nbsp
                    <input type="button" value="-" class="btn btn-danger btn-sm" onClick="deleteRow('dataTableC')" />
                </div> 
            <thead>
                <div class="row">
                    <tr>
                        <div class="row-h2">
                            <div class="col-md-4">
                                Output
                            </div>
                            <div class="col-md-4">
                                Success Indicator
                            </div>
                            <div class="col-md-4">
                                Actual Achievements
                            </div>  
                        </div>
                          
                    </tr>  
                </div>
            </thead>        
                <tbody  id="dataTableC">
                
                <div class="row">
                    <tr>
                        <td class="col-md-4">
                            <textarea type="textarea" spellcheck="true"  id="txtarea" placeholder="Output statement" class="form-control"  rows="3" name="sto_output[]"></textarea>
                        </td>
                        <td class="col-md-4">
                            <textarea type="textarea" spellcheck="true" placeholder="Success indicator statement" class="form-control fields" rows = "3" name="sto_success_indicator[]"></textarea>
                        </td>
                        <td class="col-md-4">
                            <textarea type="textarea" spellcheck="true" placeholder="Actual accomplishment statement" class="form-control" rows="3" name="sto_actual_accomplishments[]"></textarea>
                        </td>
                        <td class="hidden">
                            <input  type="hidden" name="sto_tag" value="4">
                        </td>
                        <td class="hidden">
                             @if (count($form_id) > 0 )
                             <input type="hidden" name="form_id" value="{{$form_id}}">
                             @else
                               <p> Something went wrong </p>
                             @endif
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
                <div class="row">
                    <input type="button" value="+" class="btn btn-primary btn-sm" onClick="addRow('dataTableD')" /> 
                    &nbsp
                    <input type="button" value="-" class="btn btn-danger btn-sm" onClick="deleteRow('dataTableD')" />
                </div> 
            <thead>
                <div class="row">
                    <tr>
                        <div class="row-h2">
                            <div class="col-md-4">
                                Output
                            </div>
                            <div class="col-md-4">
                                Success Indicator
                            </div>
                            <div class="col-md-4">
                                Actual Achievements
                            </div>  
                        </div>
                          
                    </tr>  
                </div>

            </thead>        
                <tbody  id="dataTableD">
                
                <div class="row">
                    <tr>
                        <td class="col-md-4">
                            <textarea type="textarea" spellcheck="true"  id="txtarea" placeholder="Output statement" class="form-control"  rows="3" name="innov_output[]"></textarea>
                        </td>
                        <td class="col-md-4">
                            <textarea type="textarea" spellcheck="true" placeholder="Success indicator statement" class="form-control fields" rows = "3" name="innov_success_indicator[]"></textarea>
                        </td>
                        <td class="col-md-4">
                            <textarea type="textarea" spellcheck="true" placeholder="Actual accomplishment statement" class="form-control" rows="3" name="innov_actual_accomplishments[]"></textarea>
                        </td>
                        <td class="hidden">
                            <input  type="hidden" name="innov_tag" value="5">
                        </td>
                        <td class="hidden">
                             @if (count($form_id) > 0 )
                             <input type="hidden" name="form_id" value="{{$form_id}}">
                             @else
                               <p> Something went wrong </p>
                             @endif
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
</div>
@endsection