<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('page_title', 'Prima Laravel CRUD')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
  <body>
    @include('partials._navbar')
    @yield('content')
    <script src="{{ asset('js/app.js') }}" charset="utf-8"></script>
  </body>
</html>
