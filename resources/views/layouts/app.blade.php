@extends('layouts.base')

@section('csslist')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@section('content')
<body>
    <div id="app">
        @yield('content')
    </div>
</body>
@endsection

@section('jslist')
    <script src="{{ asset('js/app.js') }}"></script>
@endsection