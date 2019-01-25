<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <title>Problog Website Template | Home :: W3layouts</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href='//fonts.googleapis.com/css?family=Carrois+Gothic+SC' rel='stylesheet' type='text/css'>
</head>
<body>

<!-- Start-Header-->
@yield('header')

<!-- End-wrap -->
@yield('content')

@yield('pagination')
@yield('footer')
</body>
</html>