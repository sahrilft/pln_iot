<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>HUD | Starter Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />


    <!-- ================== BEGIN core-css ================== -->
    <link href="{{asset('/')}}dist/assets/css/vendor.min.css" rel="stylesheet" />
    <link href="{{asset('/')}}dist/assets/css/app.min.css" rel="stylesheet" />
    <link href="{{asset('/')}}dist/assets/css/pln.css" rel="stylesheet" />
    
    <!-- ================== END core-css ================== -->

</head>
.

<link href="dist/assets/plugins/jvectormap-next/jquery-jvectormap.css" rel="stylesheet" />

<body>
    <!-- BEGIN #app -->
    @extends('dashboard/template/v_nav')
    <!-- BEGIN #sidebar -->
    <div id="app" class="app app-sidebar-collapsed">
        
        <!-- BEGIN #content -->
        <div id="content" class="app-content">
            @yield('content')

    <!-- END #app -->
    <!-- ================== BEGIN core-js ================== -->
    <script src="dist/assets/js/vendor.min.js"></script>
    <script src="dist/assets/js/app.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/paho-mqtt/1.0.1/mqttws31.js" type="text/javascript"></script>
    <!-- ================== END core-js ================== -->


    @yield('js')

    <script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-53034621-1', 'auto');
    ga('send', 'pageview');
    </script>

</body>

</html>