<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Grocery Website Design Tutorial</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- custom css nav  -->
    <link rel="stylesheet" href="{{ asset('client/css/nav/nav.css') }}">
    <!-- custom css carousel  -->
    <link rel="stylesheet" href="{{ asset('client/css/carousel/carousel.css') }}">
    <!-- custom css footer  -->
    <link rel="stylesheet" href="{{ asset('client/css/footer/footer.css') }}">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{ asset('client/css/home/home.css') }}">

</head>
<body>
    
    @include('client.layouts.nav')

    @include('client.layouts.carousel')

    @yield('content')

    @include('client.layouts.footer')

</body>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

<!-- custom js file link  -->
<script src="{{ asset('client/js/nav/nav.js') }}"></script>
<!-- custom js file link  -->
<script src="{{ asset('client/js/home/home.js') }}"></script>
</html>