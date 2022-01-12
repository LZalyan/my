<!DOCTYPE html>
<html lang="en">
<head>
@include('site.layouts.head')
</head>

<body>


@yield('content')
@yield('about')

<footer>

@include('site.layouts.footer')

</footer>
@include('site.layouts.scripts')
</body>
</html>
