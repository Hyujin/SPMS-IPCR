    @extends('layouts.main')
    @section('after-styles')
    @endsection
    @section('scripts')
    @endsection
    @section('content')
    <div class="container-fluid" id="employee">
        <div class="form-container">
        <div class="form-header">
                <h4><b>SPMS – Annex B </b></h4>
                <h4><b> INDIVIDUAL PERFORMANCE COMMITMENT AND REVIEW (IPCR) FORM </b></h4>
        </div> 

    <form action="{{ URL::to('/forms/ipcr/pre')}}" method="POST">
            {{ csrf_field() }}
          <input type="hidden" name="status" value="0">
        <div class="form-wrapper" >
            <div class="hidden">
                <input type="hidden" name="form" value="IPCR">
            </div>

            <div class="row">
                <div class="col-md-4">
                   <label type="text" class="form-inline">Name</label> 
                </div>
                <div class="col-md-8"></div>
            </div>
            <div class="form-inline">
                    <input type="text" name="first_name" placeholder="First name" class="form-control" required>
                    <input type="text" name="middle_name" placeholder="Middle name" class="form-control" required>
                    <input type="text" name="last_name" placeholder="Last name" class="form-control"  required>
            </div>
                    
                   
                    
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
                        </select>
                    </div>
                    <label type="text" class="form-inline">Section</label>
                    <div class="input-form">
                        <select name="section" class="form-control" required>
                        <option value="">- - -</option>
                        <option value="ICT">ICT</option>
                        <option value="Food Technology">Food Technology</option>
                        <option value="S&T Center">S&T Center</option>
                        <option value="Scholarship">Scholarship</option>
                        </select>
                    </div>

                    </div>
                    <br>
                    <label type="text" class="form-inline">Time span</label>    
                        <input type="date" placeholder="Start Month" name="start_date" class="form-inline calendar">
                        to
                        <input type="date" placeholder="End Month" name="end_date" class="form-inline calendar">
                    <br>
                    <br>
                    <label type="text" class="form-inline">Reviewed by</label>
            
                    <div class="input-form">
                        <select name="reviewed" class="form-control" required>
                        <option value="">- - -</option>
                        <option value="Jonathan Victolero">Jonathan Victolero</option>
                        <option value="Mary White">Dummy Name</option>
                        </select>
                    </div>
                    
                    <label type="text" class="form-inline">Approved by</label>
                
                    <div class="input-form">
                        <select name="approved" class="form-control" required>
                        <option value="Dr. Anthony C. Sales  CESO lll">Dr. Anthony C. Sales  CESO lll</option>
                        </select>
                    </div>

            <div>
                <button type="submit" class="btn btn-success btn-mid btn-right" id="empButton">NEXT</button>
            </div>
        </div>
    </form>
    </div>
    </div>
    @endsection