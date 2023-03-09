<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{!!url('assets/bootstrap/css/bootstrap.min.css')!!}">
    <link rel="stylesheet" href="{!!url('assets/css/app.css')!!}">
    <title>LV Authentication</title>
</head>
<body class="text-center">
    @include('layouts.partials.nav')
    <main class="form-signin">
        @yield('content')
    </main>
</body>
</html>