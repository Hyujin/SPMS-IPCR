@extends('layouts.myextension')
@section('after-styles')
<styles rel="stylesheet">

</style>
@endsection
@section('scripts')
@endsection
@section('content')
<!DOCTYPE html>
<html>
<head>
</head>
<body>


<div class="container container-fluid paper-container">
    <form>
        <div class="row" style="margin-top: 30px">
        <img class="col-md-12" alt="" src="{{ asset('profile/headerImg.png') }}">
        </div>
        <div class="row">
            <p class="col-md-12 text-bold">SPMS-Annex B <br> INDIVIDUAL PERFORMANCE COMMITMENT AND REVIEW (IPCR) FORM</p>
        </div>
        <div class="table-responsive container-padding">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <p class="text-center gap-vertical-1">INDIVIDUAL PERFORMANCE COMMITMENT AND REVIEW (IPCR) FORM</p>
                    </tr>
                    <tr>
                        <p class="form-inline gap-vertical-3">
                         I &nbsp<input type="text" name="name" required>
                         &nbsp of                        
                            <select name="division" value="" required>
                            <option value=""></option>
                            <option value="Finance and Admin Services">Finance and Admin Services</option>
                            <option value="Human Resource">Human Resource</option>
                            <option value="Commission on Audit">Commission on Audit</option>
                            <option value="Technical Services">Technical Services</option>
                            <option value="Technical Support Services">Technical Support Services</option>
                            <option value="Finance">Finance</option>
                            </select> &nbsp (Division)
                            Science and Technology Regional Office XI, commit to deliver and agree to be rated on the attainment of the following targets in accordance with the indicated measures for the period of &nbsp
                            <input type="month" placeholder="Start Month" name="start_date" class="form-inline calendar">
                            &nbsp to &nbsp
                            <input type="month" placeholder="End Month" name="end_date" class="form-inline calendar">.       
                        </p> 
                    </tr>
                        <div class="container float-right form-inline gap-vertical-3">
                             
                             <div class="row">
                               
                                    <input class="col-md-5 text-center" type="text" name="name2" required> 
                                    <div class="col-md-2">&nbsp</div>
                                    <select class="col-md-5 text-center month">
                                        <option value=""></option>
                                        <option value="January">January</option>
                                        <option value="February">February</option>
                                        <option value="March">March</option>
                                        <option value="April">April</option>
                                        <option value="May">May</option>
                                        <option value="June">June</option>
                                        <option value="July">July</option>
                                        <option value="August">August</option>
                                        <option value="September">September</option>
                                        <option value="October">October</option>
                                        <option value="November">November</option>
                                        <option value="December">December</option>
                                    </select>         
                            </div>

                            <div class="row">
                                <div class="col-md-5 text-center">Employee</div>
                                <div class="col-md-2">&nbsp</div>
                                <div class="col-md-5 text-center">Date</div> 
                            </div>   
                        </div>
                        
                        <div class="gap-vertical-3 container container-padding approval-container">
                            <div class="reviewedby">
                                <div class="row">
                                    <div class="col-md-12">Reviewed by</div>
                                </div>

                                <div class="row">
                                    <input class="col-md-8 text-center" type="text" name="reviewer_name" required> 
                                    <div class="col-md-4"></div>  
                                </div>
                                <div class="row">
                                    <div class="col-md-8">Immediate Supervisor</div>
                                    <div class="col-md-4">Date</div>  
                                </div>
                                                     
                            </div>
                            <div class="approvedby">
                                <div class="row">
                                    <div class="col-md-12">Approved by</div>
                                </div>

                                <div class="row">
                                    <input class="col-md-8 text-center" type="text" name="approvedby_name" required> 
                                    <div class="col-md-4"></div>  
                                </div>
                                <div class="row">
                                    <div class="col-md-8">Regional Director</div>
                                    <div class="col-md-4">Date</div>  
                                </div>
                                                     
                            </div>
                        </div>
                </thead>
                <tbody class="table table-striped form-inline">
                    <div class="container-padding gap-vertical-5">
                        <div class="row text-center" style="height: 30px"> 
                            <div class="col-md-2">Output</div>
                            <div class="col-md-3">Success Indicator</div>
                            <div class="col-md-2">Actual accomplishments</div>
                            <div class="col-md-3">Rating</div>
                            <div class="col-md-2">Remark</div>
                        </div>
                        <div class="row">
                            <div class="col-md-12" style="background-color: lightgrey; color: white">A. Output</div>
                        </div> 
                    </div>
                    <div class="container-padding gap-vertical-5">
                        <div class="row">
                            <div class="col-md-12" style="background-color: lightgrey; color: white">B. General Administrative Services</div>
                        </div>
                     </div>
                     <div class="container-padding gap-vertical-5">
                        <div class="row">
                            <div class="col-md-12" style="background-color: lightgrey; color: white">C. Support to Operations</div>
                        </div>
                     </div>

                    <div class="container-padding gap-vertical-5">
                        <div class="row">
                            <div class="col-md-12" style="background-color: lightgrey; color: white">Innovation</div>
                        </div>
                     </div>   
                    </div>
                </tbody>
            </table>
        </div>
    </form>
    <div class="footer gap-vertical-5"></div>
</div>

</body>
</html>