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

    <form method="POST"  action="{{ URL::to('/forms/ipcr/edit/post') }}">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}

        <!-- <div>
            <button type="button" class="btn btn-success btn-mid btn-right" id="formButton">Go back</button>
        </div> -->
       
        <div class="container-fluid form-wrapper-A">
            <div class="row">
                <h3 class="col-md-12 ">A. Operations</h3>
            </div>

        <table class="table">
            <div  class="container-fluid">
               
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
                            <div class="col-md-3">
                                Actual Achievements
                            </div> 
                            <div>
                              &nbsp &nbsp &nbsp 
                              &nbsp &nbsp &nbsp 
                              &nbsp &nbsp &nbsp 
                              <i class="fa fa-trash-o lg"></i>
                              <div class="tooltip">
                                  hover me
                                  <span class="tooltiptext"> HEYYY</span>
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
        <input type="hidden" name="form_id" value={{$form_id}}>

        <table class="table">
            <div class="container-fluid">    
                <tbody  id="dataTableA1">
                    
                 
             <input type="hidden" name="op1Count" value="{{count($op1Count)}}">        



              @foreach($operations1 as $content)
                
                <div class="row">
                    <tr>
                        <td class="col-md-4">
                            <textarea type="textarea" spellcheck="true"  id="txtarea" placeholder="Output statement" class="form-control"  rows="3" name="op1_output[]">{{$content->output}}</textarea>
                        </td>
                        <td class="col-md-4">
                            <textarea type="textarea" spellcheck="true" placeholder="Success indicator statement" class="form-control fields" rows = "3" name="op1_success_indicator[]">{{$content->success_indicator}}</textarea>
                        </td>
                        <td class="col-md-4">
                            <textarea type="textarea" spellcheck="true" placeholder="Actual accomplishment statement" class="form-control" rows="3" name="op1_actual_accomplishments[]">{{$content->actual_accomplishments}}</textarea>
                        </td>
                        <td class="hidden">
                            <input  type="hidden" name="op1_tag" value="1">
                        </td>
                        <td class="hidden">
                            <input type="hidden" name="form_id" value="{{$form_id}}">
                        </td> 
                        <td class="hidden">
                            <input type="hidden" name="op1_id[]" value="{{$content->id}}">
                        </td>
                        <td> 
                            <input type="checkbox"  name="op1_delete[]" value="delete">
                        </td>
                    </tr>
                     @endforeach
                </div>
                </tbody>
                 <div class="row">
                     <tr> 
                        <td class="col-md-4">
                            
                        </td>
                        <td class="col-md-4">
                            
                        </td>
                        <td class="col-md-4">
                            
                        </td>
                        <td>
                           <input type="button" value="+" class="btn btn-primary btn-xs" onClick="addRow('dataTableA1')" /> 
                        </td>                
                     </tr>
                </div>
          </div>  
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
                

                @foreach($operations2 as $content)
                 <input type="hidden" name="op2Count" value="{{count($content->output)}}"> 
                <div class="row">
                    <tr>
                        <td class="col-md-4">
                            <textarea type="textarea" spellcheck="true"  id="txtarea" placeholder="Output statement" class="form-control"  rows="3" name="op2_output[]">{{$content->output}}</textarea>
                        </td>  
                        <td class="col-md-4">
                            <textarea type="textar" spellcheck="true" placeholder="Success indicator statement" class="form-control fields" rows = "3" name="op2_success_indicator[]">{{$content->success_indicator}}</textarea>
                        </td>
                        <td class="col-md-4">
                            <textarea type="textarea" spellcheck="true" placeholder="Actual accomplishment statement" class="form-control" rows="3" name="op2_actual_accomplishments[]">{{$content->actual_accomplishments}}</textarea>
                        </td>
                        <td class="hidden">
                            <input  type="hidden" name="op2_tag" value="2">
                        </td> 
                        <td class="hidden">
                            <input type="hidden" name="form_id" value="{{$form_id}}">
                        </td> 
                        <td class="hidden">
                            <input type="hidden" name="op2_id[]" value="{{$content->id}}">
                        </td> 
                        <td>                    
                             <input type="checkbox" name="op2_delete[]" value="delete">
                             
                        </td>    
                    </tr>
                </div>  
                @endforeach                        
                </tbody>
                 <div class="row">
                     <tr> 
                        <td class="col-md-4">
                            
                        </td>
                        <td class="col-md-4">
                            
                        </td>
                        <td class="col-md-4">
                            
                        </td>
                        <td>
                           <input type="button" value="+" class="btn btn-primary btn-xs" onClick="addRow('dataTableA2')" /> 
                        </td>                
                     </tr>
                </div> 
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
            <thead>
                <div class="row">
                    <tr>
                       <td class="col-md-4">
                            
                        </td>
                        <td class="col-md-4">
                            
                        </td>
                        <td class="col-md-4">
                            
                        </td>
                        <td>
                           <input type="button" value="+" class="btn btn-primary btn-xs" onClick="addRow('dataTableB')" /> 
                        </td> 
                          
                    </tr>  
                </div>

            </thead>        
                <tbody  id="dataTableB">
                
                @foreach($general_administrative_services as $content)
                 <input type="hidden" name="gasCount" value="{{count($content->output)}}"> 
                <div class="row">
                    <tr>
                        <td class="col-md-4">
                            <textarea type="textarea" spellcheck="true"  id="txtarea" placeholder="Output statement" class="form-control"  rows="3" name="gas_output[]">{{$content->output}}</textarea>
                        </td>
                        <td class="col-md-4">
                            <textarea type="textarea" spellcheck="true" placeholder="Success indicator statement" class="form-control fields" rows = "3" name="gas_success_indicator[]">{{$content->success_indicator}}</textarea>
                        </td>
                        <td class="col-md-4">
                            <textarea type="textarea" spellcheck="true" placeholder="Actual accomplishment statement" class="form-control" rows="3" name="gas_actual_accomplishments[]">{{$content->actual_accomplishments}}</textarea>
                        </td>
                        <td class="hidden">
                            <input  type="hidden" name="tag" value="3">
                        </td>
                        <td class="hidden">
                            <input  type="hidden" name="gas_tag" value="3">
                        </td>    
                        <td class="hidden">
                            <input type="hidden" name="form_id" value="{{$form_id}}">
                        </td>
                        <td class="hidden">
                            <input type="hidden" name="gas_id[]" value="{{$content->id}}">
                        </td>
                        <td>                    
                             <input type="checkbox" name="gas_delete[]" value="delete">
                        </td>   
                    </tr>
                </div>        
                @endforeach      
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
               
            <thead>
                <div class="row">
                    <tr>
                       <td class="col-md-4">
                            
                        </td>
                        <td class="col-md-4">
                            
                        </td>
                        <td class="col-md-4">
                            
                        </td>
                        <td>
                           <input type="button" value="+" class="btn btn-primary btn-xs" onClick="addRow('dataTableC')" /> 
                        </td> 
                          
                    </tr>  
                </div>
            </thead>        
                <tbody  id="dataTableC">
                

                @foreach($support_to_operations as $content)
                 <input type="hidden" name="stoCount" value="{{count($content->output)}}"> 
                <div class="row">
                    <tr>
                        <td class="col-md-4">
                            <textarea type="textarea" spellcheck="true"  id="txtarea" placeholder="Output statement" class="form-control"  rows="3" name="sto_output[]">{{$content->output}}</textarea>
                        </td>
                        <td class="col-md-4">
                            <textarea type="textarea" spellcheck="true" placeholder="Success indicator statement" class="form-control fields" rows = "3" name="sto_success_indicator[]">{{$content->success_indicator}}</textarea>
                        </td>
                        <td class="col-md-4">
                            <textarea type="textarea" spellcheck="true" placeholder="Actual accomplishment statement" class="form-control" rows="3" name="sto_actual_accomplishments[]">{{$content->actual_accomplishments}}</textarea>
                        </td>
                        <td class="hidden">
                            <input  type="hidden" name="sto_tag" value="4">
                        </td>
                         <td class="hidden">
                            <input type="hidden" name="form_id" value="{{$form_id}}">
                        </td>
                        <td class="hidden">
                            <input type="hidden" name="sto_id[]" value="{{$content->id}}">
                        </td>
                        <td>                    
                             <input type="checkbox" name="sto_delete[]" value="delete">
                        </td>
                    
                    </tr>
                </div> 
                @endforeach     
                        
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
             
            <thead>
                <div class="row">
                    <tr>
                        <td class="col-md-4">
                            
                        </td>
                        <td class="col-md-4">
                            
                        </td>
                        <td class="col-md-4">
                            
                        </td>
                        <td>
                           <input type="button" value="+" class="btn btn-primary btn-xs" onClick="addRow('dataTableD')" /> 
                        </td> 
                          
                    </tr>  
                </div>

            </thead>        
                <tbody  id="dataTableD">
                
                @foreach($innovation as $content)
                 <input type="hidden" name="innovCount" value="{{count($innovCount)}}"> 
                 
                <div class="row">
                    <tr>
                        <td class="col-md-4">
                            <textarea type="textarea" spellcheck="true"  id="txtarea" placeholder="Output statement" class="form-control"  rows="3" name="innov_output[]">{{$content->output}}</textarea>
                        </td>
                        <td class="col-md-4">
                            <textarea type="textarea" spellcheck="true" placeholder="Success indicator statement" class="form-control fields" rows = "3" name="innov_success_indicator[]">{{$content->success_indicator}}</textarea>
                        </td>
                        <td class="col-md-4">
                            <textarea type="textarea" spellcheck="true" placeholder="Actual accomplishment statement" class="form-control" rows="3" name="innov_actual_accomplishments[]">{{$content->actual_accomplishments}}</textarea>
                        </td>
                        <td class="hidden">
                            <input  type="hidden" name="innov_tag" value="5">
                        </td>
                         <td class="hidden">
                            <input type="hidden" name="form_id" value="{{$form_id}}">
                        </td> 
                        <td class="hidden">
                            <input type="hidden" name="innov_id[]" value="{{$content->id}}">
                        </td>
                        <td>                    
                             <input type="checkbox" name="innov_delete[]" value="delete">
                        </td>

                    </tr>
                </div>        
                @endforeach
                </tbody>
            </div>
            </table>

       </div>

        <div class="continue-work-button">
            <button type="submit" class="btn btn-success">DONE</button>
        </div>
    </form>
    </div> <!-- container ends -->
</div>
@endsection