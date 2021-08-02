    @extends('layouts.main')
    @section('after-styles')
    <style type="text/css">
        .nextLine{
            margin-top: 20px;
        }
    </style>
    @endsection
    @section('scripts')
    @endsection
    @section('content')
    <div class="container-fluid" id="employee">
        <div class="form-container">
        <div class="form-header">
                <h4><b>SPMS – Annex B </b></h4>
                <h4><b> Professional Development Plan FORM </b></h4>
        </div> 

    <form action="{{ URL::to('/forms/pdp/post')}}" method="POST">
            {{ csrf_field() }}
        <div class="form-wrapper" >
            <div class="hidden">
                <input type="hidden" name="form" value="PDP">
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
                    

            <div  class="nextLine">
                <button type="submit" class="btn btn-success btn-mid btn-right" id="empButton">NEXT</button>
            </div>
        </div>
    </form>
    </div>
    </div>
    @endsection