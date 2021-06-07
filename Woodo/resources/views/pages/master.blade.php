<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Woods</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="{{asset('/assets/images/fevicon.png')}}" type="image/gif"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
          media="screen">

    @foreach(config('assets.master.css') as $item)
        <link rel="stylesheet" href="{{asset("/assets/{$item}")}}">
    @endforeach

    @stack('css')

</head>
<body>
<!--header section start -->
@include('pages.layouts.header')
<!-- banner section end -->
<!-- about section start -->
    @yield('content')

<!-- contact section end -->
<!-- footer section start -->
@include('pages.layouts.footer')
<!-- copyright section end -->

<!-- Javascript files-->

@foreach(config('assets.master.js') as $item)
    <script src="{{asset("assets/{$item}")}}"></script>
@endforeach

@stack('js')

<script>
    $(document).ready(function () {
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });
</script>

</body>
</html>
