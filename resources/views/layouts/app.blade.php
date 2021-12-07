<!DOCTYPE html>
<html>

<head>
   
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>@yield('page_title')</title>
    <link rel="stylesheet" href="{{ asset('/assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="{{ asset('/assets/fonts/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/fonts/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/fonts/fontawesome5-overrides.min.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
    
    
</head>

<body id="page-top">
    
    @include('partials.header')

    @include('partials.alerts')

    @yield('content')

    @include('partials.footer')


    
    

    <script src="{{ asset( '/assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset( '/assets/js/chart.min.js') }}"></script>
    <script src="{{ asset( '/assets/js/bs-init.js') }}"></script>
    <script src="{{ asset( '/assets/js/theme.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>

    <script type="text/javascript">
        
           $('.data').datetimepicker({

               
           });
     
    </script>
    

</body>

    

</html>