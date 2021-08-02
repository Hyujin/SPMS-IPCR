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
   
   html, body{
        margin: none;
        padding: none;
        height: 1440px;
        width: 800px;
        font-size: 11px;
   }
    
    .paper-container{
        background-color: white;
        width: 100%;

    }

    .search-container {
  			float: right;
		}

    .wrapper{
        margin-top: -5%;
    }

    .ipcr-title{
        font-weight: bold;
        font-weight: 1200;
        font-style: bold;
        margin-left: -7%;
        margin-bottom: -3%;
    }

    .table-container{
        border: 1px solid black;
        margin-left: 5%;
        margin-right: 5%;
        margin-bottom: 2%;
        padding: 2%;
    }

    .approval-container{
      width: 100%;
      display: inline-block;
    }

    .reviewedby{
        float: left;
        width: 35%;
        margin-left: 10%;
    }

    .approvedby{
        float: right;
        width: 35%;
        margin-right: 10%;
    }

  input[type=text] {
  background: transparent;
  border: none;
  border-bottom: 1px solid #000000;
  -webkit-box-shadow: none;
  box-shadow: none;
  border-radius: 0;
  text-align: center;
}

  input[type=month] {
  background: transparent;
  border: none;
  border-bottom: 1px solid #000000;
  -webkit-box-shadow: none;
  box-shadow: none;
  width: 10em;
 }

 .container-padding{
  padding-left: 20px;
  padding-right: 20px;
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

 .gap-vertical-5{
    margin-top: 50px;
 }
  textarea{
}

  select{
    background: transparent;
    border: none;
    border-bottom: 1px solid #000000;
    -webkit-box-shadow: none;
    box-shadow: none;
    border-radius: 0;
}

  .float-right{
    float: right;
    padding-right: 200px;
  }

  .month{
    align-items: center;
  }

  </style>

  @yield('scripts')
  <script type="text/javascript">
      
   

  </script>