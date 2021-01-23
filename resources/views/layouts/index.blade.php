<!DOCTYPE html>
<html lang="utf-8">

<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">

    <!-- Site Metas -->
    <title>Nhà Hàng Sushi World | Home</title>

    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="icon" href="images/icon_site.png" type="imgages/icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Sweetalert CSS-->
    <link rel="stylesheet" href="css/sweetalert2.min.css">
    <!-- color -->
    <link id="changeable-colors" rel="stylesheet" href="css/colors/red.css" />

    <!-- Modernizer -->
    <script src="js/modernizer.js"></script>
    <!-- From -->
    <script src="js/from.js"></script>
    
</head>

<body>
    @include('layouts.loader')
    @include('layouts.header')
    
    @yield('content')

    @include('layouts.footer')
    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    <!-- Jquery JS-->
    <script src="js/jquery-3.5.1.min.js"></script>
    <!-- Sweetalert JS-->
    <script src="js/sweetalert2.all.min.js"></script>
</body>

</html>