<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <title>Home</title>
  <!-- Latest compiled and minified CSS & JS -->
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/home.css">
  <link href="/maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="/code.jquery.com/jquery.js"></script>
</head>
<body>
<!--- - - - - - - -navbar - - - - - - -->
    @include('partials.navbar_home')
<!--- - - - - - - -navbar - - - - - - -->

<!-- peiquangdai la thang occho -->

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
  <script src="/js/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/home.js"></script>
</body>

</html>


