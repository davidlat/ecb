<!DOCTYPE html>
<html dir="ltr" lang="en-UK" class="no-js">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="author" content="Adaptive Office Services" />
        <meta name="Description" content="Eddie Carey Music">
        <meta name="keywords" content="Eddie Carey Music">
        <title>Eddie Carey Music</title>

        <!-- Favicons -->
        <link rel="shortcut icon" href="{{{ asset('/images/favicon.ico') }}}">
        <link rel="apple-touch-icon" href="{{{ asset('/images/apple-touch-icon.png') }}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{{ asset('/images/apple-touch-icon-72x72.png') }}}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{{ asset('/images/apple-touch-icon-114x114.png') }}}">
        

        <!-- Bootstrap Core CSS -->
        <link href="{{{ asset('/css/bootstrap.min.css') }}}" rel="stylesheet">

        <!-- Library Stylesheets -->
        <link rel="stylesheet" href="{{{ asset('/css/font-awesome.css') }}}">
        <link rel="stylesheet" href="{{{ asset('/css/twentytwenty.css') }}}">

        <link rel="stylesheet" href="{{{ asset('/css/perfectr.css') }}}">
        <link rel="stylesheet" href="{{{ asset('/css/custom.css') }}}">

        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

        <!-- My Custom Responsive Styles -->
        <link rel="stylesheet" href="{{{ asset('/css/responsive.css') }}}">

        <!--[if lt IE 9]>
            <script src="assets/js/libs/respond.min.js"></script>
        <![endif]-->

        <!-- JS -->
        <script type="text/javascript" src="{{{ asset('/js/libs/modernizr.min.js') }}}"></script>

    </head>
    <body data-spy="scroll" data-target="#site-nav" data-offset="300">
   
        @include('layouts.partials._header')
    
        @yield('content')
    
        @include('layouts.partials._footer')

        @include('layouts.partials._footer_scripts')
    
    </body>
</html>