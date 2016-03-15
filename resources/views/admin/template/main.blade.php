<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title','Default')| Panel Admin</title>
    <link rel="stylesheet" href="{!! asset('assets/css/bootstrap.min.css') !!}">
</head>
<body>
    @include('admin.template.partials.nav')
    <section>
        @yield('content')
    </section>
    <script src="{!! asset('assets/js/jquery.min.js') !!}"></script>
    <script src="{!! asset('assets/js/bootstrap.min.js') !!}"></script>
</body>
</html>