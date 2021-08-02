<!DOCTYPE html>
<html lang="en">
    
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="shortcut icon" href="{{ url('images/Logo.png') }}">
  <title>DOST XI</title>
  
<!-- {{ asset('images/logos/trace_logo.ico') }} -->
  <!-- Bootstrap CSS -->
  <link href="{{ asset('theme/nice/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="{{ asset('theme/nice/css/bootstrap-theme.css') }}" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="{{ asset('theme/nice/css/elegant-icons-style.css') }}" rel="stylesheet" />
  <link href="{{ asset('theme/nice/css/font-awesome.min.css') }}" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="{{ asset('theme/nice/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css') }}" rel="stylesheet" />
  <link href="{{ asset('theme/nice/assets/fullcalendar/fullcalendar/fullcalendar.css') }}" rel="stylesheet" />
  <!-- easy pie chart-->
  <!-- <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" /> -->
  <!-- owl carousel -->
  <link rel="stylesheet" href="{{ asset('theme/nice/css/owl.carousel.css') }}" type="text/css">
  <link href="{{ asset('theme/nice/css/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="{{ asset('theme/nice/css/fullcalendar.css') }}">
  <link href="{{ asset('theme/nice/css/widgets.css') }}" rel="stylesheet">
  <link href="{{ asset('theme/nice/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('theme/nice/css/style-responsive.css') }}" rel="stylesheet" />
  <!-- <link href="css/xcharts.min.css" rel=" stylesheet"> -->
  <link href="{{ asset('theme/nice/css/jquery-ui-1.10.4.min.css') }}" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

 
  @yield('after-styles')

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

  textarea{
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    resize: vertical;
    overflow: hidden;

}

.tooltip {
  position: relative;
  visibility: visible;
}

 .tooltip  .tooltiptext {
 
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


/** FOR SMALLER DISPLAYS*/
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
    padding: 14px;
  }
  input[type=text] {
    border: 1px solid #ccc;  
  }

  textarea{
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    resize: vertical;

}


select{
    margin-top: 1.5vw;
    width: 50px;
    padding-left: 10px;
    padding-right: 3px;
}

  input[type=checkbox]{

  }

#form-container{
  border-radius: 0px 0px 5px 5px;
  background-color: white;
  box-shadow: 0px 0px 8px #888888;
}

.form-wrapper{
    background-color: white;
    margin-left: 1.5vw;
    margin-right: 1.5vw;
    padding: 2vw;
}

#form-wrapper-A{
    background-color: white;
    margin-left: 1.5vw;
    margin-right: 1.5vw;
    padding: 2vw;
}
#form-wrapper-B{
    background-color: white;
    margin-right: 1.5vw;
    margin-left: 1.5vw;
    padding: 2vw;
}
#form-wrapper-C {
    background-color: white;
    margin-right: 1.5vw;
    margin-left: 1.5vw;
    padding: 2vw;
}
#form-wrapper-D {
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

.text-bold{
  font-weight: bold;
}

.gap-vertical-1{
    padding-top: 10px;
 }

 .gap-vertical-2{
    margin-top: 20px;
 }

 .gap-vertical-3{
    margin-top: 30px;
 }

 .gap-vertical-4{
  margin-top: 40px;
 }

 .gap-vertical-5{
    margin-top: 50px;
 }

 .border-line{
  border: 1px grey solid;
 }

.hidden{
  overflow: hidden;
  margin: 0;
  padding: 0;
  display: none;
}

.hide{
  display: none;
}
 
 .mybtn{
    background-color: white;
    border: 1px solid black;
    font-weight: bold;
    font-size: 2vw;
    color: green; 
 }

 .btn-float-right{
  right: 10%;
 }

 .row-h2{
  font-weight: 1.5vw;
 }

 .row-h3{
  font-weight: 1vw;
  color: lightgrey;
 }

 .nextLine{
  margin-top: 20px;
  padding-top: 20px;
 }

 .continue-work-button{
  padding: 20px;
  margin-left: 80%;
   }

.debug-work-button{
  position: fixed;
  right: 5%;
  top: 10%;
   }

   .marker-pink{
    background-color: pink;
   }

   .marker-green{
    background-color: green;
   }

   .btn-right{
    margin: 1vw;
    margin-left: 85%;
   }

    .greenbg{ 
      background-color:green; 
      }

    .yellowbg{ 
      background-color:yellow; 
      }

    .redbg{ 
      background-color:red; 
      }

   


  </style>

  @yield('scripts')
  <script type="text/javascript">
      
      
    function addRow(tableID) {

    var table = document.getElementById(tableID);
    var rowCount = table.rows.length;
    if(rowCount < 100 ){                            // limit the user from creating fields more than your limits
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


function deleteRow(tableID) {
  var table = document.getElementById(tableID);
  
  var rowCount = table.rows.length;
  var dec = table.rows.length-1;
  while (rowCount>dec){
      if(rowCount <= 1) {               // limit the user from removing all the fields
        alert("Cannot remove all rows.");
        break;
      }
      table.deleteRow(dec);
  }
/*
  var rowCount = table.rows.length;
  for(var i=0; i<rowCount; i++) {
    var row = table.rows[i];
    var chkbox = row.cells[0].childNodes[0];
    //alert("loop: " + i + " out of " + rowCount);
    alert(table.row[0]);
    if(table.row[0].checked) {
      if(rowCount <= 1) {               // limit the user from removing all the fields
        alert("Cannot Remove all the Passenger.");
        break;
      }
      alert("Nisulod sa delete function");
      table.deleteRow(i);
      rowCount--;
      i--;
    }
    alert("wala nag satisfy ang condition");
  }
  */
} 

/*
function showValue(dataTableA, dataTableB, dataTableC, dataTableD){
  alert("Running showValue() function");
  var table = document.getElementById("dataTableA");
  
  //document.write(table.rows[0].cells[0]);
}
*/

function showValue(dataTableA, dataTableB, dataTableC, dataTableD) {
    var table = document.getElementById('dataTableA1');
    
    for (var r = 0, n = table.rows.length; r < n; r++) {
        for (var c = 0, m = table.rows[r].cells.length; c < m; c++) {
          var textboxVal = table.rows[r].cells[c];
          alert(textboxVal);
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

$("textarea").autoRezie();

$("textarea").length();

// PLease check syntax (ReferenceError: $ is not defined)
    $("#empButton").click(function () { 

    });

    $("#formButton").click(function () { 

    });

$('#toggle_icon_button').click(function() {
    $('#toggle_icon_button').toggle('1000');
    $("i", this).toggleClass("fa-angle-down fa-angle-up");
});

$("input[type='text'], textarea").on("keyup", function(){
    if($(this).val() != "" && $("textarea").val() != "" && $("input[name='category']").is(":checked") == true){
        $("input[type='submit']").removeAttr("disabled");
    } else {
        $("input[type='submit']").attr("disabled", "disabled");
    }
});

$("input[name='category']").on("change", function(){
    if($(this).val() != "" && $("textarea").val() != "" && $("input[name='category']").is(":checked") == true){
        $("input[type='submit']").removeAttr("disabled");
    } else {
        $("input[type='submit']").attr("disabled", "disabled");
    }
});


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
                                <img alt="" src="{{ asset('profile/no-user-photo.png') }}" width="30" height="30">
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
            <a class="" href="{{ URL::to('/dashboard') }}">
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