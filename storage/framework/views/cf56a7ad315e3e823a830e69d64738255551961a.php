

<!DOCTYPE html>
<html lang="en">
    
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  <link rel="shortcut icon" href="<?php echo e(url('images/Logo.png')); ?>">
  <title>SPMS Calendar</title>
  
<!-- <?php echo e(asset('images/logos/trace_logo.ico')); ?> -->
  <!-- Bootstrap CSS -->
  <link href="<?php echo e(asset('theme/nice/css/bootstrap.min.css')); ?>" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="<?php echo e(asset('theme/nice/css/bootstrap-theme.css')); ?>" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="<?php echo e(asset('theme/nice/css/elegant-icons-style.css')); ?>" rel="stylesheet" />
  <link href="<?php echo e(asset('theme/nice/css/font-awesome.min.css')); ?>" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="<?php echo e(asset('theme/nice/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css')); ?>" rel="stylesheet" />
  <link href="<?php echo e(asset('theme/nice/assets/fullcalendar/fullcalendar/fullcalendar.css')); ?>" rel="stylesheet" />
  <!-- easy pie chart-->
  <!-- <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" /> -->
  <!-- owl carousel -->
  <link rel="stylesheet" href="<?php echo e(asset('theme/nice/css/owl.carousel.css')); ?>" type="text/css">
  <link href="<?php echo e(asset('theme/nice/css/jquery-jvectormap-1.2.2.css')); ?>" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="<?php echo e(asset('theme/nice/css/fullcalendar.css')); ?>">
  <link href="<?php echo e(asset('theme/nice/css/widgets.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('theme/nice/css/style.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('theme/nice/css/style-responsive.css')); ?>" rel="stylesheet" />
  <!-- <link href="css/xcharts.min.css" rel=" stylesheet"> -->
  <link href="<?php echo e(asset('theme/nice/css/jquery-ui-1.10.4.min.css')); ?>" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

</head>

<script type="text/javascript">

           
$(document).ready(function(){
	$("#dfrjan").click(function(){ 
		var test = $(this).text().trim();

		if(test == "✔"){
			$(this).text("");			
		}
		else{
			$(this).text("✔");
		}
	});

	$("#dfrfeb").click(function(){
		var test = $(this).text().trim();

		if(test == "✔"){
			$(this).text("");
		}
		else{
			$(this).text("✔");
		}
	});

	$("#dfrmar").click(function(){
		var test = $(this).text().trim();

		if(test == "✔"){
			$(this).text("");
		}
		else{
			$(this).text("✔");
		}
	});

	$("#dfrapr").click(function(){
		var test = $(this).text().trim();

		if(test == "✔"){
			$(this).text("");
		}
		else{
			$(this).text("✔");
		}
	});

	$("#dfrmay").click(function(){
		var test = $(this).text().trim();

		if(test == "✔"){
			$(this).text("");
		}
		else{ 
			$(this).text("✔");
		}
	});

	$("#dfrjun").click(function(){
		var test = $(this).text().trim();

		if(test == "✔"){
			$(this).text("");
		}
		else{
			$(this).text("✔");
		}
	});

	$("#dfrjul").click(function(){
		var test = $(this).text().trim();

		if(test == "✔"){
			$(this).text("");
		}
		else{
			$(this).text("✔");
		}
	});

	$("#dfraug").click(function(){
		var test = $(this).text().trim();

		if(test == "✔"){
			$(this).text("");
		}
		else{
			$(this).text("✔");
		}
	});

	$("#dfrsep").click(function(){
		var test = $(this).text().trim();

		if(test == "✔"){
			$(this).text("");
		}
		else{
			$(this).text("✔");
		}
	});

	$("#dfroct").click(function(){
		var test = $(this).text().trim();

		if(test == "✔"){
			$(this).text("");
		}
		else{
			$(this).text("✔");
		}
	});

	$("#dfrnov").click(function(){
		var test = $(this).text().trim();

		if(test == "✔"){
			$(this).text("");
		}
		else{
			$(this).text("✔");
		}
	});

	$("#dfrdec").click(function(){
		var test = $(this).text().trim();

		if(test == "✔"){
			$(this).text("");
		}
		else{
			$(this).text("✔");
		}
	});


});
	    
	$(document).ready(function(){
	$("#prrjan").click(function(){
		var test = $(this).text().trim();

		if(test == "✔"){
			$(this).text("");			
		}
		else{
			$(this).text("✔");
		}
	});

	$("#prrfeb").click(function(){
		var test = $(this).text().trim();

		if(test == "✔"){
			$(this).text("");
		}
		else{
			$(this).text("✔");
		}
	});

	$("#prrmar").click(function(){
		var test = $(this).text().trim();

		if(test == "✔"){
			$(this).text("");
		}
		else{
			$(this).text("✔");
		}
	});

	$("#prrapr").click(function(){
		var test = $(this).text().trim();

		if(test == "✔"){
			$(this).text("");
		}
		else{
			$(this).text("✔");
		}
	});

	$("#prrmay").click(function(){
		var test = $(this).text().trim();

		if(test == "✔"){
			$(this).text("");
		}
		else{
			$(this).text("✔");
		}
	});

	$("#prrjun").click(function(){
		var test = $(this).text().trim();

		if(test == "✔"){
			$(this).text("");
		}
		else{
			$(this).text("✔");
		}
	});

	$("#prrjul").click(function(){
		var test = $(this).text().trim();

		if(test == "✔"){
			$(this).text("");
		}
		else{
			$(this).text("✔");
		}
	});

	$("#prraug").click(function(){
		var test = $(this).text().trim();

		if(test == "✔"){
			$(this).text("");
		}
		else{
			$(this).text("✔");
		}
	});

	$("#prrsep").click(function(){
		var test = $(this).text().trim();

		if(test == "✔"){
			$(this).text("");
		}
		else{
			$(this).text("✔");
		}
	});

	$("#prroct").click(function(){
		var test = $(this).text().trim();

		if(test == "✔"){
			$(this).text("");
		}
		else{
			$(this).text("✔");
		}
	});

	$("#prrnov").click(function(){
		var test = $(this).text().trim();

		if(test == "✔"){
			$(this).text("");
		}
		else{
			$(this).text("✔");
		}
	});

	$("#prrdec").click(function(){
		var test = $(this).text().trim();

		if(test == "✔"){
			$(this).text("");
		}
		else{
			$(this).text("✔");
		}
	});
});
	

$(document).ready(function(){
	$("#radjan").click(function(){
		var test = $(this).text().trim();

		if(test == "✔"){
			$(this).text("");			
		}
		else{
			$(this).text("✔");
		}
	});

	$("#radfeb").click(function(){
		var test = $(this).text().trim();

		if(test == "✔"){
			$(this).text("");
		}
		else{
			$(this).text("✔");
		}
	});

	$("#radmar").click(function(){
		var test = $(this).text().trim();

		if(test == "✔"){
			$(this).text("");
		}
		else{
			$(this).text("✔");
		}
	});

	$("#radapr").click(function(){
		var test = $(this).text().trim();

		if(test == "✔"){
			$(this).text("");
		}
		else{
			$(this).text("✔");
		}
	});

	$("#radmay").click(function(){
		var test = $(this).text().trim();

		if(test == "✔"){
			$(this).text("");
		}
		else{ 
			$(this).text("✔");
		}
	});

	$("#radjun").click(function(){
		var test = $(this).text().trim();

		if(test == "✔"){
			$(this).text("");
		}
		else{
			$(this).text("✔");
		}
	});

	$("#radjul").click(function(){
		var test = $(this).text().trim();

		if(test == "✔"){
			$(this).text("");
		}
		else{
			$(this).text("✔");
		}
	});

	$("radaug").click(function(){
		var test = $(this).text().trim();

		if(test == "✔"){
			$(this).text("");
		}
		else{
			$(this).text("✔");
		}
	});

	$("#radsep").click(function(){
		var test = $(this).text().trim();

		if(test == "✔"){
			$(this).text("");
		}
		else{
			$(this).text("✔");
		}
	});

	$("#radoct").click(function(){
		var test = $(this).text().trim();

		if(test == "✔"){
			$(this).text("");
		}
		else{
			$(this).text("✔");
		}
	});

	$("#radnov").click(function(){
		var test = $(this).text().trim();

		if(test == "✔"){
			$(this).text("");
		}
		else{
			$(this).text("✔");
		}
	});

	$("#raddec").click(function(){
		var test = $(this).text().trim();

		if(test == "✔"){
			$(this).text("");
		}
		else{
			$(this).text("✔");
		}

	
});

</script>

<style type="text/css">

	.row{
		margin: 5px;
	}

	.comtainer{
		width: 1150px;
	}

	#calendar{
		font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  		border-collapse: collapse;
	}

	#calendar td, #calendar th{
		border: 1px solid #ddd;
  		padding: 8px;
	}

	.center{
		text-align: center;
		padding: 10px;
	}

	.container-fluid{
		margin-top: -5vw;
		width: 1100px;
	}

	.header-wrapper{
		padding-top: 6vw;
		margin-bottom: -8vw;
	}

	.logo{
		padding-left: 115px;

	}

	.dost{	
		margin-left: 12vw;
		font-size: 17px;
		margin-top: -73px;
		padding-left: 3vw;

	}

	.spms{
		margin-top: 1vw; 
		margin-bottom: 1vw;
		font-size: 17px;
	}

	@media  screen and (max-width: 700px) {
  div.header-wrapper {
  	margin-bottom: -11%;
  }

  div.dost{
  	margin-left: 32vw;
  }

  div.logo{

  }

}

	@media  screen and (min-width: 701px){
		div.header-wrapper{
			margin-bottom: -115px;
		}

		div.dost{
			margin-left: 12vw;
		}
	}




</style>
<body>


<div class="container">
<div class="container-fluid">
	<div class="header-wrapper">
		<div class="logo">
			<img src="<?php echo e(asset('profile/logo.png')); ?>" width="80" height="80">
		</div>
			<div class="dost">
				<h4>Republic of the Philippines<br>
				DEPARTMENT OF SCIENCE AND TECHNOLOGY<br>
				Regional Office No. XI</h4>
			</div>

			<div class="spms">
				<bold><h4>SPMS - Annex E<br>SPMS Calendar</h4></bold>
			</div>
		</div>

	<div class="container-fluid">

		
	<table class="table table-bordered" id="calendar">
		<tr>
		<div class="row">	
		<thead>	
		<div class="">
			<th><div class="center">Activity</div></th>
		</div>
		<div class="">
			<th><div class="center">Submit To</div></th>
		</div>
		<div class="">
			<th colspan="12"><div class="center">Schedule</div></th>
		</div>
		
		</thead>
		</div>
	</tr>

	<tr>
		<div class="row">
		<td colspan="2"><div class="center"></div></td>
		<div class="col">
			<td><div class="center">Jan</div></td>
		</div>
		<div class="col">
			<td><div class="center">Feb</div></td>
		</div>
		<div class="col">
			<td><div class="center">Mar</div></td>
		</div>
		<div class="col">
			<td><div class="center">Apr</div></td>
		</div>
		<div class="col">
			<td><div class="center">May</div></td>
		</div>
		<div class="col">
			<td><div class="center">Jun</div></td>
		</div>
		<div class="col">
			<td><div class="center">Jul</div></td>
		</div>
		<div class="col">
			<td><div class="center">Aug</div></td>
		</div>
		<div class="col">
			<td><div class="center">Sep</div></td>
		</div>
		<div class="col">
			<td><div class="center">Oct</div></td>
		</div>
		<div class="col">
			<td><div class="center">Nov</div></td>
		</div>
		<div class="col">
			<td><div class="center">Dec</div></td>
		</div>
		</div>
	</tr>	
	<tr>
			<div class="row">
			<td colspan="2"><div class="center"><strong>I. Performance Planning and Commitment</strong></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
		</div>
	</tr>

	<tr>
		<div class="row">
			<td><div class="center">DPCR for Review</div></td>
			<td><div class="center">PMT</div></td>
			<td id="dfrjan"><div class="center"></div></td>
			<td id="dfrfeb"><div class="center"></div></td>
			<td id="dfrmar"><div class="center"></div></td>
			<td id="dfrapr"><div class="center"></div></td>
			<td id="dfrmay"><div class="center"></div></td>
			<td id="dfrjun"><div class="center"></div></td>
			<td id="dfrjul"><div class="center"></div></td>
			<td id="dfraug"><div class="center"></div></td>
			<td id="dfrsep"><div class="center"></div></td>
			<td id="dfroct"><div class="center"></div></td>
			<td id="dfrnov"><div class="center"></div></td>
			<td id="dfrdec"><div class="center"></div></td>
		</div>
	</tr>

	<tr>
		<div class="row">
			<td><div class="center">PMT Review Report</div></td>
			<td><div class="center">Head of Agency</div></td>
			<td id="prrjan"><div class="center"></div></td>
			<td id="prrfeb"><div class="center"></div></td>
			<td id="prrmar"><div class="center"></div></td>
			<td id="prrapr"><div class="center"></div></td>
			<td id="prrmay"><div class="center"></div></td>
			<td id="prrjun"><div class="center"></div></td>
			<td id="prrjul"><div class="center"></div></td>
			<td id="prraug"><div class="center"></div></td>
			<td id="prrsep"><div class="center"></div></td>
			<td id="prroct"><div class="center"></div></td>
			<td id="prrnov"><div class="center"></div></td>
			<td id="prrdec"><div class="center"></div></td>
		</div>
	</tr>

	<tr>
		<div class="row">
			<td><div class="center">RD Approval of DCPR</div></td>
			<td><div class="center"></div></td>
			<td id="radjan"><div class="center"></div></td>
			<td id="radfeb"><div class="center"></div></td>
			<td id="radmar"><div class="center"></div></td>
			<td id="radapr"><div class="center"></div></td>
			<td id="radmay"><div class="center"></div></td>
			<td id="radjun"><div class="center"></div></td>
			<td id="radjul"><div class="center"></div></td>
			<td id="radaug"><div class="center"></div></td>
			<td id="radsep"><div class="center"></div></td>
			<td id="radoct"><div class="center"></div></td>
			<td id="radnov"><div class="center"></div></td>
			<td id="raddec"><div class="center"></div></td>
		</div>
	</tr>

	<tr>
		<div class="row">
			<td rowspan="3"><div class="center">IPCR</div></td>
			<td><div class="center">Division Head</div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
		</div>
	</tr>

	<tr>
		<div class="row">
			<td><div class="center">Head of Agency</div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
		</div>
	</tr>

	<tr>
		<div class="row">
			<td><div class="center">HRMO</div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
		</div>
	</tr>

	<tr bgcolor="black">
			<td colspan="14"></td>
	</tr>

	<tr>
		<div class="row">
			<td colspan="2"><div class="center"><strong>II. Performance Monitoring and Coaching</strong></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
		</div>
	</tr>

	<tr>
		<div class="row">
			<td><div class="center">By Head of Agency</div></td>
			<td><div class="center"></div></td>
			<td colspan="12"><strong>Quarterly basis</strong></td>
		</div>
	</tr>

	<tr>
		<div class="row">
			<td><div class="center">By Immediate Supervisor</div></td>
			<td><div class="center"></div></td>
			<td colspan="12"><strong>Regular basis</strong></td>
		</div>
	</tr>

	<tr>
		<div class="row">
			<td><div class="center">Individual Staff</div></td>
			<td><div class="center"></div></td>
			<td colspan="12"><strong>Regular basis</strong></td>
		</div>
	</tr>

	<tr>
		<div class="row">
			<td><div class="center">Department Head to Submit Monitoring Form</div></td>
			<td><div class="center">PMEC</div></td>
			<td colspan="12"><strong>End of Each Quarter</strong></td>
		</div>
	</tr>

	<tr bgcolor="black">
			<td colspan="14"></td>
	</tr>

	<tr>
		<div class="row">
			<td colspan="2"><div class="center"><strong>III. Performance Review and Feedback</strong></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
		</div>
	</tr>

	<tr>
		<div class="row">
			<td><div class="center">Submit DPCR (with Actual Accomplishments)</div></td>
			<td><div class="center">PMEC</div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
		</div>
	</tr>

	<tr>
		<div class="row">
			<td><div class="center">PMEC to review, evaluate and validate DPCR against targets and return validated DPCRs to respective departments</div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
		</div>
	</tr>

	<tr>
		<div class="row">
			<td><div class="center">PMEC to submit agency performance assessment and facilitate performance review by RD</div></td>
			<td><div class="center">Head of Agency</div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
		</div>
	</tr>

	<tr>
		<div class="row">
			<td><div class="center">Submit IPCR (with Actual Accomplishments)</div></td>
			<td><div class="center">Division Head</div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
		</div>
	</tr>

	<tr>
		<div class="row">
			<td><div class="center">Division Head to submit to submit IPCR (with Actual Accomplishments)</div></td>
			<td><div class="center">Head of Agency</div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
		</div>
	</tr>

	<tr>
		<div class="row">
			<td><div class="center">Head of Agency to submit IPCR (with Actual Accomplishments)</div></td>
			<td><div class="center">HRM Section</div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
		</div>
	</tr>

	<tr>
		<div class="row">
			<td><div class="center">Annual Performance Review/Conference</div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
		</div>
	</tr>

	<tr bgcolor="black">
			<td colspan="14"></td>
	</tr>

	<tr>
		<div class="row">
			<td colspan="2"><div class="center"><strong>IV. Performance Rewarding and Development Planning</strong></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
		</div>
	</tr>

	<tr>
		<div class="row">
			<td><div class="center">HRM Section to submit the result of Summary of Ratings</div></td>
			<td><div class="center">PMT</div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
		</div>
	</tr>

	<tr>
		<div class="row">
			<td><div class="center">PMT to submit list of top performers</div></td>
			<td><div class="center">Head of Agency</div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
			<td><div class="center"></div></td>
		</div>
	</tr>

	</table>
</div>
</div>
</body>


</html>