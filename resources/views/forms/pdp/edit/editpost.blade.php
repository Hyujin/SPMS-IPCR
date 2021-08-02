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
					<p><b>PROFESSIONAL DEVELOPMENT PLAN EDIT FORM</b></p>
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
	      	<form method="post" action="/update/" class="horizontal-forms">

	      		{{$employees->id}}

	      		{{$employees->first_name}}

	      		<!-- {{$employees->pdp->aim}} -->

	      	
		</form>
	</div>
</div>




@endsection
@section('footer')
@endsection