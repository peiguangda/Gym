<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <title>Home</title>
  <!-- Latest compiled and minified CSS & JS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/home.css">
  <link href="/maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="/code.jquery.com/jquery.js"></script>
  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
  <link rel="shortcut icon" href="favicon.ico">

  <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700,900' rel='stylesheet' type='text/css'>
  
  <!-- Animate.css -->
  <link rel="stylesheet" href="css/animate.css">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="css/icomoon.css">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <!-- Superfish -->
  <link rel="stylesheet" href="css/superfish.css">

  <link rel="stylesheet" href="css/style.css">


  <!-- Modernizr JS -->
  <script src="js/modernizr-2.6.2.min.js"></script>
  <!-- FOR IE9 below -->
  <!--[if lt IE 9]>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>
<body>
<!--- - - - - - - -navbar - - - - - - -->
    @include('partials.navbar_home')
<!--- - - - - - - -navbar - - - - - - -->


<!-- - - - - - - -  carousel- - - - - - - - - -->
    @include('partials.carousel')
<!-- - - - - - - - - carousel - - - - - - -  -->


<!-- - - - - - - - - show - - - - - - -  -->
    @include('partials.list_programs_home')
<!-- - - - - - - - - show - - - - - - -  -->



<!-- - - - - - - - - footer - - - - - - -  -->
    @include('partials.footer')
<!-- - - - - - - - - footer - - - - - - -  -->




  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/home.js"></script>
  <script src="js/jquery.min.js"></script>
  <!-- jQuery Easing -->
  <script src="js/jquery.easing.1.3.js"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Waypoints -->
  <script src="js/jquery.waypoints.min.js"></script>
  <!-- Stellar -->
  <script src="js/jquery.stellar.min.js"></script>
  <!-- Superfish -->
  <script src="js/hoverIntent.js"></script>
  <script src="js/superfish.js"></script>

  <!-- Main JS (Do not remove) -->
  <script src="js/main.js"></script>
</body>

</html>


