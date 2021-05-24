<!DOCTYPE html>
<html dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->

    <!-- Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{asset('css/select2.min.css')}}" rel="stylesheet" />
<style>
    select {
  font-family: 'FontAwesome';
}
</style>
</head>
<body style="text-align: right; background-image:url('{{asset('img/side.jpeg') }}') ;">
    <div id="app">
       <center class="shadow-sm">
        <img src="{{asset('img/mid-logo.png') }}" alt="logo">
        <a href="/" >
            <h2 class="alert alert-primary mt-1">نظام الأرشفة</h2>
        </a>
       </center>

        @foreach($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}</div>
        @endforeach
        @if(session('status'))
            <div class="alert alert{{session('status','info')}}">{{session('message')}}</div>
        @endif
        
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('js/select2.min.js')}}" defer></script>
    @yield('script')
</body>
</html>
