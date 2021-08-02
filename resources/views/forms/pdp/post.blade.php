@extends('layouts.main')
<head>
	<title>Professional Development Plan</title>
</head>
@section('after-styles')
@endsection
@section('content')

<div class="form-container">
	<div class="container-fluid">
	        
	        <div class=" header-wrapper lead">
				<div class="text-left">
					<p><b>SPMS — Annex G </b></p>
					<p><b>PROFESSIONAL DEVELOPMENT PLAN</b></p>
				</div>
			</div>
			@if ($errors->any())
      		<div class="alert alert-danger">
        		<ul>
            		@foreach ($errors->all() as $error)
              			<li>{{ $error }}</li>
            		@endforeach
        		</ul>
      		</div><br />
    		@endif
	      	<form method="post" action="{{ URL::to('/forms/pdp/post') }}" class="horizontal-forms">
	      		{{csrf_field()}}
	        <div class="container-fluid">
				<div class="form-wrapper">

						<div class="row">
							<div class="col-md-4">
								<label><b>Aim</b> </label>
							</div>
							<div class="col-md-8">		
							</div>
						</div>

						<input type="hidden" name="employees_id" value="{{$employees->id}}">

						<div class="form-group row">
							<div class="col-md-12">
								<textarea class="form-control" name="aim"  rows="3" spellcheck="true"></textarea>
							</div>
						</div>

						<div class="row">
							<div class="col-md-4">
								<label><b>Objective</b> </label>
							</div>
							<div class="col-md-8">		
							</div>
						</div>

						<div class="form-group row">
							<div class="col-md-12">
								<textarea class="form-control" name="objective"  rows="3" spellcheck="true"></textarea>
							</div>
						</div>

						<div class="row">
							<div class="col-md-4">
								<label><b> Target Date </b></label>
							</div>
							<div class="col-md-4">
								<label><b> Review Date </b></label>
							</div>
							<div class="col-md-4">
								<label> <b> Achieved Date </b></label>
							</div>
						</div>

						<div class="row">
							<div class="col-md-4">
								<input class="form-control" type="date" name="target_date">
							</div>
							<div class="col-md-4">
								<input class="form-control" type="date" name="review_date">
							</div>
							<div class="col-md-4">
								<input class="form-control" type="date" name="achieved_date">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-4">
								<label><b> Comments </b></label>
							</div>
							<div class="col-md-8">		
							</div>
						</div>

						<div class="form-group row">
							<div class="col-md-12">
								<textarea class="form-control" name="comment"  rows="3" spellcheck="true"></textarea>
							</div>
						</div>

						<div class="row">
							<div class="col-md-4">
								<label><b> Task </b></label>
							</div>
							<div class="col-md-8">		
							</div>
						</div>

						<div class="form-group row">
							<div class="col-md-12">
								<textarea class="form-control" name="task"  rows="3" spellcheck="true"></textarea>
							</div>
						</div>

						<div class="row">
							<div class="col-md-4">
								<label> <b> Outcome</b></label>
							</div>
							<div class="col-md-8">		
							</div>
						</div>

						<div class="form-group row">
							<div class="col-md-12">
								<textarea class="form-control" name="outcome"  rows="3" spellcheck="true"></textarea>
							</div>
						</div>

						<div class="row">
							<div class="col-md-4">
								<label> <b> Next Step/s </b></label>
							</div>
							<div class="col-md-8">		
							</div>
						</div>

						<div class="form-group row">
							<div class="col-md-12">
								<textarea class="form-control" name="next_steps"  rows="3" spellcheck="true"></textarea>
							</div>
						</div>

						<div class="button-wrapper">
							<button type="submit" class="btn btn-primary">SAVE</button> &nbsp  
						    <button type="button" class="btn btn-danger" onclick="print()">PRINT</button>
						</div>
				         	
						</div>
			</div>
		</div>
		</form>
	</div>
</div>




@endsection
@section('footer')
@endsection