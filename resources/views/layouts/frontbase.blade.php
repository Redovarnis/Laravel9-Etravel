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
    <meta name="description" content="@yield("description")">
    <meta name="keywords" content="@yield("keywords")">
    <meta name="author" content="Cihan VURAL">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!-- Favicon -->
    <link href="@yield("icon")" type="image/x-icon" rel="icon">
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.css" rel="stylesheet">
    <!-- Bootstrap Star Rating CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/css/star-rating.min.css" />
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
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    @yield("head")
</head>

<body>
@include("home.header")

@section('sidebar')
    @include("home.sidebar")
@show

<!-- === BEGIN CONTENT === -->
<div id="content">
@section('slider')
@show

@yield('content')
        @include("home.footer")
        @yield('foot')
</body>
</html>
