<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Singin ata to -->
  @vite('resources/css/app.css')  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

@include('layouts.component.nav')
@yield('content')
</body>
</html>