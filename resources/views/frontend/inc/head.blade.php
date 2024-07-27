<head>
    @php
        $websettings = App\Models\WebSettings::first();
    @endphp
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset($webSettings->fav_icon) }}" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>{{ $webSettings->title }}</title>
    <!-- google fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i|Ubuntu:300,300i,400,400i,500,500i,700,700i"
        rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap.min.css">
    <!-- Scrollbar css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/jquery.mCustomScrollbar.css" />
    <!-- Owl Carousel css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/owl-carousel/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/owl-carousel/owl.theme.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/owl-carousel/owl.transitions.css" />
    <!-- youtube css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/RYPP.css" />
    <!-- jquery-ui css -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/jquery-ui.css">
    <!-- animate -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/animate.min.css">
    <!-- fonts css -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/Pe-icon-7-stroke.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/flaticon.css" />

    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/style.css">
    <style>
        .container-fluid {
            width: 90% !important;
        }
    </style>
</head>
