<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <!-- Title -->
    <title>@yield("title")</title>
    <!-- Meta -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!-- Favicon -->
    <link href="favicon.ico" rel="shortcut icon">
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.css" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets')}}/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets')}}/css/nexus.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets')}}/css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets')}}/css/custom.css" rel="stylesheet">
    <!-- Google Fonts-->
    <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=PT+Sans" type="text/css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,300" rel="stylesheet" type="text/css">
    @yield("head")
</head>

<body>
@include("home.header")

@section('sidebar')
    @include("home.sidebar")
@show

@section('slider')
    @include('home.slider')
@show

@yield('content')
        @include("home.footer")
        @yield('foot')
</body>
</html>
