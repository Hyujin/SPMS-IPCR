<!DOCTYPE html>
<html lang="en">
    
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  <link rel="shortcut icon" href="<?php echo e(url('images/Logo.png')); ?>">
  <title>DOST XI</title>
  
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

 
  <?php echo $__env->yieldContent('after-styles'); ?>

  <style>
  #content-wrapper {
    margin-left: 200px;
  }

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

@media  screen and (max-width: 600px) {
.search-container {
    float: none;
  }
input[type=text], .search-container button {
    float: right;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  input[type=text] {
    border: 1px solid #ccc;  
  }
}

  textarea{
    resize:vertical;
}
select{
    margin-top: 1.5vw;
    width: 50px;
    padding-left: 10px;
    padding-right: 3px;
}

#form-container{
  background-color: white;
  box-shadow: 0px 0px 15px #888888;
  margin: 1.5vw;
}

#form-wrapper-A{
    border-radius: 3px;
    background-color: white;
    margin-left: 1.5vw;
    margin-right: 1.5vw;
    padding: 2vw;
}
#form-wrapper-B{
    border-radius: 3px;
    background-color: white;
    margin-right: 1.5vw;
    margin-left: 1.5vw;
    padding: 2vw;
}
#form-wrapper-C {
    border-radius: 3px;
    background-color: white;
    margin-right: 1.5vw;
    margin-left: 1.5vw;
    padding: 2vw;
}
#form-wrapper-D {
    border-radius: 3px;
    background-color: white;
    margin-right: 1.5vw;
    margin-left: 1.5vw;
    padding: 2vw;
}

#section-A{
    float:left;
    margin: 1vw;
    padding: 10px;
}

#section-B{
    float:left;
    margin: 1vw;
    padding: 10px;
}

#section-C{
    float:left;
    margin: 1vw;
    padding: 10px;
}

#extend{
    letter-spacing: .15rem;
}

#form-header{
  padding-top: 30px;
  padding-left: 25px;
}

  </style>

  <?php echo $__env->yieldContent('scripts'); ?>
  <script type="text/javascript">
      
      
// A. Operations
    function addRow(dataTableA) {
    var table = document.getElementById(dataTableA);
    var rowCount = table.rows.length;
    if(rowCount < 100){                            // limit the user from creating fields more than your limits
      var row = table.insertRow(rowCount);
      var colCount = table.rows[0].cells.length;
      for(var i=0; i <colCount; i++) {
        var newcell = row.insertCell(i);
        newcell.innerHTML = table.rows[0].cells[i].innerHTML;
      }
    }else{
      alert("Unable to add more row");
          
    }
}

function deleteRow(dataTableA) {

	var rowCount = table.rows.length;
	for(var i=0; i<rowCount; i++) {
		var row = table.rows[i];
		var chkbox = row.cells[0].childNodes[0];
		if(null != chkbox && true == chkbox.checked) {
			if(rowCount <= 1) {               // limit the user from removing all the fields
				alert("Unable to remove row.");
				break;
			}
			table.deleteRow(i);
			rowCount--;
			i--;
		}
	}
}
function deleteRow(A) {

var rowCount = table.rows.length;
for(var i=0; i<rowCount; i++) {
  var row = table.rows[i];
  var chkbox = row.cells[0].childNodes[0];
  if(null != chkbox && true == chkbox.checked) {
    if(rowCount <= 1) {               // limit the user from removing all the fields
      alert("Unable to remove row.");
      break;
    }
    table.deleteRow(i);
    rowCount--;
    i--;
  }
}
}
//B. General Administrative Services

function addRow(dataTableB) {
	var table = document.getElementById(dataTableB);
	var rowCount = table.rows.length;
	if(rowCount < 100){                            // limit the user from creating fields more than your limits
		var row = table.insertRow(rowCount);
		var colCount = table.rows[0].cells.length;
		for(var i=0; i <colCount; i++) {
			var newcell = row.insertCell(i);
			newcell.innerHTML = table.rows[0].cells[i].innerHTML;
		}
	}else{
		 alert("Unable to add more row");
			   
	}
}

function deleteRow(dataTableB) {
	var table = document.getElementById(dataTableB);
	var rowCount = table.rows.length;
	for(var i=0; i<rowCount; i++) {
		var row = table.rows[i];
		var chkbox = row.cells[0].childNodes[0];
		if(null != chkbox && true == chkbox.checked) {
			if(rowCount <= 1) {               // limit the user from removing all the fields
				alert("Unable to remove row.");
				break;
			}
			table.deleteRow(i);
			rowCount--;
			i--;
		}
	}
}


//C. Support to operations

function addRow(dataTableC) {
	var table = document.getElementById(dataTableC);
	var rowCount = table.rows.length;
	if(rowCount < 100){                            // limit the user from creating fields more than your limits
		var row = table.insertRow(rowCount);
		var colCount = table.rows[0].cells.length;
		for(var i=0; i <colCount; i++) {
			var newcell = row.insertCell(i);
			newcell.innerHTML = table.rows[0].cells[i].innerHTML;
		}
	}else{
		 alert("Unable to add more row");
			   
	}
}

function deleteRow(dataTableC) {
	var table = document.getElementById(dataTableC);
	var rowCount = table.rows.length;
	for(var i=0; i<rowCount; i++) {
		var row = table.rows[i];
		var chkbox = row.cells[0].childNodes[0];
		if(null != chkbox && true == chkbox.checked) {
			if(rowCount <= 1) {               // limit the user from removing all the fields
				alert("Unable to remove row.");
				break;
			}
			table.deleteRow(i);
			rowCount--;
			i--;
		}
	}
}

//Innovation

function addRow(dataTableD) {
	var table = document.getElementById(dataTableD);
	var rowCount = table.rows.length;
	if(rowCount < 100){                            // limit the user from creating fields more than your limits
		var row = table.insertRow(rowCount);
		var colCount = table.rows[0].cells.length;
		for(var i=0; i <colCount; i++) {
			var newcell = row.insertCell(i);
			newcell.innerHTML = table.rows[0].cells[i].innerHTML;
		}
	}else{
		 alert("Unable to add more row");
			   
	}
}

function deleteRow(dataTableD) {
	var table = document.getElementById(dataTableD);
	var rowCount = table.rows.length;
	for(var i=0; i<rowCount; i++) {
		var row = table.rows[i];
		var chkbox = row.cells[0].childNodes[0];
		if(null != chkbox && true == chkbox.checked) {
			if(rowCount <= 1) {               // limit the user from removing all the fields
				alert("Unable to remove row.");
				break;
			}
			table.deleteRow(i);
			rowCount--;
			i--;
		}
	}
}

//Auto adjust height of textarea scripts
document.addEventListener('input', function (event) {
	if (event.target.tagName.toLowerCase() !== 'textarea') return;
}, false);

document.addEventListener('input', function (event) {
	if (event.target.tagName.toLowerCase() !== 'textarea') return;
	autoExpand(event.target);
}, false);

var autoExpand = function (field) {

// Reset field height
field.style.height = 'inherit';

// Get the computed styles for the element
var computed = window.getComputedStyle(field);

// Calculate the height
var height = parseInt(computed.getPropertyValue('border-top-width'), 10)
             + parseInt(computed.getPropertyValue('padding-top'), 10)
             + field.scrollHeight
             + parseInt(computed.getPropertyValue('padding-bottom'), 10)
             + parseInt(computed.getPropertyValue('border-bottom-width'), 10);

field.style.height = height + 'px';

};

  </script>
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="#" class="logo"><span class="lite">Human Resource</span></a>
      <!--logo end-->

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="<?php echo e(asset('profile/no-user-photo.png')); ?>" width="30" height="30">
                            </span>
                            <span class="username">Cortes</span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="#"><i class="icon_profile"></i> My Profile</a>
              </li>
              <li>
                <a href="#"><i class="icon_key_alt"></i> Log Out</a>
              </li>
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="<?php echo e(URL::to('/dashboard')); ?>">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
            </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Forms</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="#"><i class="fa fa-edit"> </i>Leave Form</a></li>
              <li><a class="" href="#">Blank Page</a></li>
              <li><a class="" href="#">404 Error</a></li>
            </ul>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->