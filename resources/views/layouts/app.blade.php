<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="@yield('#bg-body')">
    <div id="app">
    <!-- /header -->
        <header id="header">
          @include('layouts._header')
          @include('layouts._navbar')
        </header>
        <!-- /header -->

   <!-- content-->
       <main class="py-6">
            
            @yield('content')

        </main>
        <!-- content-->

           <!-- footer-->
        @include('layouts._footer')
   </div>
       <!-- footer-->
</body>
<script src="{{mix('/js/app.js')}}"></script>
</html>
