
<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>HK Farm</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('/website/css/bootstrap.min.css')}}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{url('/website/css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{url('/website/css/responsive.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{url('/website/css/custom.css')}}">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>


<!--header-->
    
@include('website.fixed.header')



<!--body part-->

@yield('content')


<!--footer-->
   
@include('website.fixed.footer')


   

  
    <!-- ALL PLUGINS -->
    <script src="{{url('/website/js/jquery.superslides.min.js')}}"></script>
    <script src="{{url('/website/js/bootstrap-select.js')}}"></script>
    <script src="{{url('/website/js/inewsticker.js')}}"></script>
    <script src="{{url('/website/js/bootsnav.js.')}}"></script>
    <script src="{{url('/website/js/images-loded.min.js')}}"></script>
    <script src="{{url('/website/js/isotope.min.js')}}"></script>
    <script src="{{url('/website/js/owl.carousel.min.js')}}"></script>
    <script src="{{url('/website/js/baguetteBox.min.js')}}"></script>
    <script src="{{url('/website/js/form-validator.min.js')}}"></script>
    <script src="{{url('/website/js/contact-form-script.js')}}"></script>
    <script src="{{url('/website/js/custom.js')}}"></script>
</body>

</html>