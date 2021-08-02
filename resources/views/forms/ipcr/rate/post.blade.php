@extends('layouts.main')
@section('after-styles')
<style type="text/css">

     textarea{
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    resize: vertical;
     }

     .bg-lightgrey0{
      padding: 10px;
      background-color: #aaaaaa;
      border-radius: 8px;
    }

    .bg-lightgrey1{
      padding: 10px;
      background-color: #d5d5d5;
      margin-left: -10px;
      margin-right: -10px;
  }
    .bg-lightgrey2{
      padding: 10px;
      margin-left: -10px;
      margin-right: -10px;
      background-color: #e5e5e5;
    }

    .form-header{
      font-weight: bold;
      padding-top: 1%;
      padding-left: 1%;
      padding-bottom: 1%;
    }

     .continue-work-button{
        margin-top: 10px;
     }

     .pos-right{
       margin-left: 85%; 
     }

     .operations{
       
     }

</style>
@endsection
@section('scripts')
@endsection
@section('content')

<div class="container-fluid bg-lightgrey0" id="form">
    <div id="form-container">
        <div class="form-header">
            <h4><b>SPMS – Annex B </b></h4>
            <h4><b> INDIVIDUAL PERFORMANCE COMMITMENT AND REVIEW (IPCR) FORM </b></h4>
        </div> 

    <form method="POST"  action="{{ URL::to('/forms/ipcr/rate/post') }}">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
       
        <div class="container-fluid form-wrapper-A bg-lightgrey2">
            <div class="row operations">
                <h3 class="col-md-12 ">A. Operations</h3>
            </div>

        <table class="table">
            <div  class="container-fluid">
               
            <thead>
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
        @foreach($data as $datum)
        <input type="hidden" name="form_id" value={{$datum->id}}>
        @endforeach
        <table class="table">
            <div class="container-fluid">    
                <tbody  id="dataTableA1">
                    
                 
             <input type="hidden" name="op1Count" value="{{count($op1Count)}}">        
              <div class="row">
                    <tr>
                        <td class="col-md-4">
                            Output
                        </td>
                        <td class="col-md-4">
                            Success Indicator
                        </td>
                        <td class="col-md-4">
                            Actual Achievements
                        </td>
                        <td>
                            <label type="text" class="form-inline">Qualities &nbsp</label>
                        </td>
                        <td>
                            <label type="text" class="form-inline">Efficiency</label>
                        </td>
                        <td>
                            <label type="text" class="form-inline">Timeliness</label>
                        </td>
                    </tr> 
                </div>  
          

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
                            <div class="input-form">
                                <select name="op1quality[]" class="form-control" required>
                                    <option value="{{$content->quality}}">{{$content->quality}}</option>
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                    <option value="0">0</option>
                                </select>
                            </div>
                        </td>
                       
                       
                        <td>
                            <div class="input-form">
                                <select name="op1efficiency[]" class="form-control" required>
                                    <option value="{{$content->efficiency}}">{{$content->efficiency}}</option>
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                    <option value="0">0</option>
                                </select>
                            </div>
                        </td>
                      
                        <td>
                            <div class="input-form">
                                <select name="op1timeliness[]" class="form-control" required>
                                    <option value="{{$content->timeliness}}">{{$content->timeliness}}</option>
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                    <option value="0">0</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                     @endforeach
                    
                </div>
            
                </tbody>
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

             <div class="row">
                    <tr>
                        <td class="col-md-4">
                            Output
                        </td>
                        <td class="col-md-4">
                            Success Indicator
                        </td>
                        <td class="col-md-4">
                            Actual Achievements
                        </td>
                         <td>
                            <label type="text" class="form-inline">Qualities &nbsp</label>
                        </td>
                        <td>
                            <label type="text" class="form-inline">Efficiency</label>
                        </td>
                        <td>
                            <label type="text" class="form-inline">Timeliness</label>
                        </td>
                    </tr> 
                </div>    
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
                            <div class="input-form">
                                <select name="op2quality[]" class="form-control" required>
                                    <option value="{{$content->quality}}">{{$content->quality}}</option>
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                    <option value="0">0</option>
                                </select>
                            </div>
                        </td>

                        <td>
                            <div class="input-form">
                                <select name="op2efficiency[]" class="form-control" required>
                                    <option value="{{$content->efficiency}}">{{$content->efficiency}}</option>
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                    <option value="0">0</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="input-form">
                                <select name="op2timeliness[]" class="form-control" required>
                                    <option value="{{$content->timeliness}}">{{$content->timeliness}}</option>
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                    <option value="0">0</option>
                                </select>
                            </div>
                        </td>  
                    </tr>
                </div>  
                @endforeach                        
                </tbody>
            </div>
        </table>

       </div>
    <!------------------------------------------------------------------------------------------------------>
   
    <div class="container-fluid bg-lightgrey1" id="form-wrapper-B"> 
        <div class="row">
            <h3 class="col-md-12 ">B. General Administratice Services</h3>
        </div>
        
    
        <table class="table">
            <div  class="container-fluid">
            <thead>
               
            </thead>        
                <tbody  id="dataTableB">
                
                <div class="row">
                    <tr>
                        <td class="col-md-4">
                            Output
                        </td>
                        <td class="col-md-4">
                            Success Indicator
                        </td>
                        <td class="col-md-4">
                            Actual Achievements
                        </td>
                         <td>
                            <label type="text" class="form-inline">Qualities &nbsp</label>
                        </td>
                        <td>
                            <label type="text" class="form-inline">Efficiency</label>
                        </td>
                        <td>
                            <label type="text" class="form-inline">Timeliness</label>
                        </td>
                    </tr> 
                </div> 

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
                            <div class="input-form">
                                <select name="gasquality[]" class="form-control" required>
                                    <option value="{{$content->quality}}">{{$content->quality}}</option>
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                    <option value="0">0</option>
                                </select>
                            </div>
                        </td>

                        <td>
                            <div class="input-form">
                                <select name="gasefficiency[]" class="form-control" required>
                                    <option value="{{$content->efficiency}}">{{$content->efficiency}}</option>
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                    <option value="0">0</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="input-form">
                                <select name="gastimeliness[]" class="form-control" required>
                                    <option value="{{$content->timeliness}}">{{$content->timeliness}}</option>
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                    <option value="0">0</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                </div>        
                @endforeach      
                </tbody>
            </div>
            </table>

       </div>

       <!--------------------------------------------------------------------------------------------------------------------------->

    <div class="container-fluid bg-lightgrey2" id="form-wrapper-C"> 
        <div class="row">
            <h3 class="col-md-12 ">C. Support to Operations</h3>
        </div>
        
    
        <table class="table">
            <div  class="container-fluid">
               
            <thead>
            </thead>        
                <tbody  id="dataTableC">
                <div class="row">
                    <tr>
                        <td class="col-md-4">
                            Output
                        </td>
                        <td class="col-md-4">
                            Success Indicator
                        </td>
                        <td class="col-md-4">
                            Actual Achievements
                        </td>
                         <td>
                            <label type="text" class="form-inline">Qualities &nbsp</label>
                        </td>
                        <td>
                            <label type="text" class="form-inline">Efficiency</label>
                        </td>
                        <td>
                            <label type="text" class="form-inline">Timeliness</label>
                        </td>
                    </tr> 
                </div>  

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
                            <div class="input-form">
                                <select name="stoquality[]" class="form-control" required>
                                    <option value="{{$content->quality}}">{{$content->quality}}</option>
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                    <option value="0">0</option>
                                </select>
                            </div>
                        </td>

                        <td>
                            <div class="input-form">
                                <select name="stoefficiency[]" class="form-control" required>
                                    <option value="{{$content->efficiency}}">{{$content->efficiency}}</option>
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                    <option value="0">0</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="input-form">
                                <select name="stotimeliness[]" class="form-control" required>
                                    <option value="{{$content->timeliness}}">{{$content->timeliness}}</option>
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                    <option value="0">0</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                </div> 
                @endforeach     
                        
                </tbody>
            </div>
            </table>

       </div>

<!--------------------------------------------------------------------------------------------------------------------------->

    <div class="container-fluid bg-lightgrey1" id="form-wrapper-D"> 
        <div class="row">
            <h3 class="col-md-12 ">Innovation</h3>
        </div>
        
    
        <table class="table">
            <div  class="container-fluid">
             
            <thead>

            </thead>        
                <tbody  id="dataTableD">
                 <div class="row">
                    <tr>
                        <td class="col-md-4">
                            Output
                        </td>
                        <td class="col-md-4">
                            Success Indicator
                        </td>
                        <td class="col-md-4">
                            Actual Achievements
                        </td>
                         <td>
                            <label type="text" class="form-inline">Qualities &nbsp</label>
                        </td>
                        <td>
                            <label type="text" class="form-inline">Efficiency</label>
                        </td>
                        <td>
                            <label type="text" class="form-inline">Timeliness</label>
                        </td>
                    </tr> 
                </div> 
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
                            <div class="input-form">
                                <select name="innovquality[]" class="form-control" required>
                                    <option value="{{$content->quality}}">{{$content->quality}}</option>
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                    <option value="0">0</option>
                                </select>
                            </div>
                        </td>

                        <td>
                            <div class="input-form">
                                <select name="innovefficiency[]" class="form-control" required>
                                    <option value="{{$content->efficiency}}">{{$content->efficiency}}</option>
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                    <option value="0">0</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="input-form">
                                <select name="innovtimeliness[]" class="form-control" required>
                                    <option value="{{$content->timeliness}}">{{$content->timeliness}}</option>
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                    <option value="0">0</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    
                </div>     
                @endforeach
                </tbody>
            </div>
            </table>

       </div>

        <div class="continue-work-button">
            <button type="submit" class="btn btn-success pos-right">DONE</button>
        </div>
    </form>
    </div> <!-- container ends -->
</div>
@endsection