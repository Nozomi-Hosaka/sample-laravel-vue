@section('head')

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="@yield('description')" />
    <meta name="keywords" content="@yield('description'),{{env('APP_NAME')}}">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Icon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <title>@yield('title')</title>

</head>
@endsection
