<!DOCTYPE html>
<html lang="en">

<head>
    @include('Frontend.layout.head')

</head>

<body>

    <!-- ======= Header ======= -->
    @include('Frontend.layout.header')
    <!-- End Header -->
    @yield('content')
    <!-- ======= Footer ======= -->
    @include('Frontend.layout.footer')
   @include('Frontend.layout.foot')

</body>

</html>
