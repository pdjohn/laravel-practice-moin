<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Startmin - Bootstrap Admin Theme</title>

        <!-- Bootstrap Core CSS -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="{{asset('assets/css/metisMenu.min.css')}}" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="{{asset('assets/css/timeline.css')}}" rel="stylesheet">
       
        <!-- Custom CSS -->
        <link href="{{asset('assets/css/startmin.css')}}" rel="stylesheet">
        <!-- Morris Charts CSS -->
        <link href="../css/" rel="stylesheet">
        <link href="{{asset('assets/css/morris.css')}}" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet">
        {{-- <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script> --}}

    </head>
    <body>
        <div id="wrapper">
        @include('layouts.inc.admin-navbar')
        
        <div id="page-wrapper">
        <main>
            @yield('content')
        </main>
        
        </div>
        </div>




        




         <!-- jQuery -->      
    <script src="{{ asset('assets/js/jquery.min.js')}}"></script>

         <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
         
 
         <!-- Metis Menu Plugin JavaScript -->

    <script src="{{ asset('assets/js/metisMenu.min.js')}}"></script>
 
         <!-- Morris Charts JavaScript -->
    <script src="{{ asset('assets/js/raphael.min.js')}}"></script> 
    <script src="{{ asset('assets/js/morris.min.js')}}"></script> 
    <script src="{{ asset('assets/js/morris-data.js')}}"></script>
    
         <!-- Custom Theme JavaScript -->
    <script src="{{ asset('assets/js/startmin.js')}}"></script>

    </body>
    </html>