

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>OFU - Admin</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="{{ asset('dashboard_assets/vendors/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('dashboard_assets/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('dashboard_assets/vendors/themify-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('dashboard_assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{ asset('dashboard_assets/vendors/selectFX/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{ asset('dashboard_assets/vendors/jqvmap/dist/jqvmap.min.css') }}">


    <link rel="stylesheet" href="{{ asset('dashboard_assets/css/style.css') }}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>
    <br>
    <br>


    <!-- Left Panel -->
    @include('admin.layouts.header')
<!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->


       @yield('content')
        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

  

    <script src="{{ asset('dashboard_assets/vendors/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ asset('dashboard_assets/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{ asset('dashboard_assets/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('dashboard_assets/js/main.js')}}"></script>
    <script src="{{ asset('dashboard_assets/vendors/chart.js/dist/Chart.bundle.min.js')}}"></script>
    <script src="{{ asset('dashboard_assets/js/dashboard.js')}}"></script>
    <script src="{{ asset('dashboard_assets/js/widgets.js')}}"></script>
    <script src="{{ asset('dashboard_assets/vendors/jqvmap/dist/jquery.vmap.min.js')}}"></script>
    <script src="{{ asset('dashboard_assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <script src="{{ asset('dashboard_assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    
   <script src="https://cdn.tiny.cloud/1/4o36oeh7zv84jjpd8e0zcqmoig1xd6875ya14g4mtb8hyla9/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
   <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
    });
  </script>

</body>

</html>

