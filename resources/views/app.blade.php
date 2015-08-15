<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Kreps can learn Laravel</title>
    <link rel="stylesheet" href="/css/all.css">
</head>
<body>
<!-- Docs master nav -->
@include('partials.nav')


<div class="container">
    {{--@include('partials.flash')--}}
    @include('flash::message')
    @yield('content')
</div>

<script src="/js/all.js"></script>
<script>
    $('div.alert').not('.alert-important').delay(3000).slideUp(300);
</script>
@yield('footer')
</body>
</html>
