@extends('layouts.main')
@section('after-styles')
    <style>
	.search-container {
  			float: right;
		}

  input[type=text] {
  padding: 6px;
  font-size: 13px;
  border-width: 1px;
  width:15vw;
}

.search-container button {
  float: right;
  padding: 6px 10px;
  margin-right: 30px;
  background: #ddd;
  font-size: 12px;
  cursor: pointer;
  border-width: 1px;
}

.search-container button:hover {
  background: #ccc;
}

.btn-box-lg{
	display: inline-block;
	height: 8vw;
	width: 11vw;
	white-space: normal;
	word-wrap: break-word;
	margin: .3vw;
}

.btn-darkblue{
	background-color: darkblue;
	color: white;
}

.btn-darkblue:hover {
	color: white;
	background-color: black;
}

.tooltip {
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted black;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 120px;
  bottom: 100%;
  left: 50%;
  margin-left: -60px; /* Use half of the width (120/2 = 60), to center the tooltip */
  background-color: black;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;

  /* Position the tooltip */
  position: absolute;
  z-index: 1;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
}

@media screen and (max-width: 600px) {
.search-container {
    float: none;
  }
input[type=text], .search-container button {
    float: right;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    margin-right: 0px;
    margin-left: 0px;
    padding: 14px;
  }
  input[type=text] {
    border: 1px solid #ccc;  
  }

.tooltip {
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted black;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 120px;
  bottom: 100%;
  left: 50%;
  margin-left: -60px; /* Use half of the width (120/2 = 60), to center the tooltip */
  background-color: black;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;

  /* Position the tooltip */
  position: absolute;
  z-index: 1;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
}

.center {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
}

.bgstatus{
  background-color: grey;
}

}
    </style>
@endsection
@section('scripts')
<script type="text/javascript">
	

</script>
@endsection
@section('content')
  
  

  
	<h2><i class="fa fa-users"></i> &nbsp IPCR Forms</h2>
	<!-- 
		<div class="search-container">
    		<form action="{{ URL::to('/home') }}">
      			<input type="text" placeholder="Search.." name="search">
      			<button type="submit"><i class="fa fa-search"></i></button>
    		</form>
			<br>
    	</div> -->



     <!--  <button type="submit" class="btn btn-info btn-sm" data-toggle="modal" data-target="#forms">Create form</button> -->
     <div class="col-md-9"></div>
     <form action="{{ URL::to('/forms/ipcr/pre ') }}">
          <button type="submit" class="btn btn-primary btn btn-sm col-md-2">Create Form</button>
      </form>
      <div class="col-md-1"></div>
      <div class="row"></div>


	    <table class="table">
			<div class="table-responsive">
				<br>
				
        <tr> 
					<th >Name</th>
					<th>Form</th>
					<th>Date</th>
					<th class="text-center">Edit Form</th>
          <th class="text-center">View Form</th>
          <th class="text-center">Rate</th>
          <th class="text-center ">Submit</th>
          <th class="text-center ">Delete</th>
           </center>
				</tr>

				<div class="bg-secondary">
				@foreach ($employees as $employee)

				<tr id="dshbrd">
					<td data-target="name">
					{{$employee->first_name}}
					{{$employee->middle_name}}
					{{$employee->last_name}}
					</td>

					<td data-target="division">{{$employee->form}}</td>
					<td data-target="start_date">
					{{$employee->created_at}}</td>
					<td class="text-center"> 
							<form method='POST' action='/forms/ipcr/edit/pre/{{$employee->id}}'>
								{{csrf_field() }}
								<button type="submit" class="btn btn-primary btn-sm">Edit</button>              
							</form>
					</td>
           
          <td class="text-center">
            <form method='GET' action='/print'>
                  <input type="hidden" name="id" value="{{$employee->id}}">

                 <button type="submit" class="btn btn-primary btn-sm">View</button>
            </form>
          </td>
          <td class="text-center">
            <form method="POST"  action="{{ URL::to('/forms/ipcr/rate/pre') }}">
            {{ csrf_field() }}
                  <input type="hidden" name="form_id" value="{{$employee->id}}">

                  <button type="submit" class="btn btn-primary btn-sm">Rate my Entries</button>
             </form>
          </td>
          <td class="text-center">
            <form method="POST"  action="{{ URL::to('/forms/ipcr/edit/post') }}">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
                  <input type="hidden" name="form_id" value="{{$employee->id}}">

                  <button type="submit" class="btn btn-primary btn-sm" id="submit">Submit for Evaluation</button>
             </form>
          </td>
          <td class="text-center">
            <form method="POST"  action="{{ URL::to('/forms/ipcr/edit/destroy') }}">
            {{ csrf_field() }}
            <?php
              $del_at = date("m-d-Y");
             ?>
                  <input type="hidden" name="form_id" value="{{$employee->id}}">
                  <input type="hidden" name="deleted_at" value="{{$del_at}}">
                  <button type="submit" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deletepop">Delete</button>
             </form>
          </td>

				</tr>
				@endforeach
        </div>
			</div>	
	    </table>
	</div>

<!-- Modal -->
<div id="forms" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">FORMS</h4>
      </div>
      <div class="modal-body">
      	<div class="container-fluid">
      		<div class="row">
      			<div class="col-md-4">
      				<form action="{{ URL::to('/forms/ttmt') }}">
		      			<button type="submit" class="btn btn-darkblue btn-box-lg" href="">PMC Tracking Tool for Monitoring Targets</button>
			      	</form>
      			</div>
      			<div class="col-md-4">
      				<form action="{{ URL::to('/forms/pdp/pre') }}">
			      		<button type="submit" class="btn btn-darkblue btn-box-lg" href="">Professional Development Plan</button>
			      	</form>
      			</div>
	         	<div class="col-md-4">
	         		<form action="{{ URL::to('/forms/pmcj') }}">
			      		<button type="submit" class="btn btn-darkblue btn-box-lg" href="">Performance Monitoring and Coaching Journal</button>
			      	</form>
	         	</div>
      		</div>

      		<div class="row">
      			<div class="col-md-4">
			      	<form action="{{ URL::to('/forms/opcr') }}">
			      		<button type="submit" class="btn btn-darkblue btn-box-lg" href="">OPCR</button>
			      	</form>
      			</div>
      			<div class="col-md-4">
      				<form action="{{ URL::to('/forms/dpcr') }}">
			      		<button type="submit" class="btn btn-darkblue btn-box-lg" href="">DPCR</button>
			      	</form>
      			</div>
      			<div class="col-md-4">
      				<form action="{{ URL::to('/forms/ipcr/pre ') }}">
		      			<button type="submit" class="btn btn-darkblue btn-box-lg" href="">IPCR</button>
			      	</form>
      			</div>
      		</div>

      		<div class="row">
      			<div class="col-md-4">
			      	<form action="{{ URL::to('/forms/calendar/file') }}">
			      		<button type="submit" class="btn btn-darkblue btn-box-lg" href="">SPMS Calendar</button>
			      	</form>
      			</div>
      			<div class="col-md-4">
      				<form action="{{ URL::to('/forms/slip') }}">
			      		<button type="submit" class="btn btn-darkblue btn-box-lg" href="">Summary List of Individual Performance Ratings</button>
			      	</form>
      			</div>
      			<div class="col-md-4">
      				
      			</div>
      		</div>

      	</div>
      	
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default right" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
@foreach ($employees as $employee)
<!-- Modal -->
<div id="deletepop" class="modal fade" style="top: 30%;" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content center">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <p>Please confirm form deletion</p>
          <div class="row">
            <div class="col-md-4">    
                <form method="POST"  action="{{ URL::to('/forms/ipcr/edit/destroy') }}">
                  {{ csrf_field() }}
                  <input type="hidden" name="form_id" value="{{$employee->id}}">
                    <button type="submit" class="btn btn-info btn-sm">Confirm</button>
                    <button type="button" class="btn btn-default right" data-dismiss="modal">Close</button>
               </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endforeach




@endsection



@section('after-scripts')
<script type="text/javascript">	


</script>
@endsection

			