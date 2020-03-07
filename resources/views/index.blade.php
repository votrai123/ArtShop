<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>ArtShop - Mỹ Phẩm Hàn Quốc Chính Hãng</title>
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <!-- <link rel="stylesheet" href="Hover-master/Hover-master/css/hover-min.css"> -->
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link href="{{asset('https://fonts.googleapis.com/css?family=Poppins:400,500,700')}}" rel="stylesheet">
    <link href="{{asset('https://fonts.googleapis.com/css?family=Roboto:400,500,700')}}" rel="stylesheet">
</head>

<body>
    
    @include('partials.header')

    @yield('content')
    
    @include('partials.footer')
<a href="#" class="zoa-btn scroll_top"><i class="ion-ios-arrow-up"></i></a>
<script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js')}}"></script>
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/slick.min.js')}}"></script>
<script src="{{asset('js/countdown.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script>
    $(document).ready(function() {
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            autoplay: false,
            autoplayTimeout: 3000,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1
                },
                1014: {
                    items: 1
                },
                1200: {
                    items: 1
                },
                1600: {
                    items: 1
                }
            }
        });

    });
</script>
<script> 
    $(document).ready(function(){
      $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });
  });
</script>
</body>

</html>