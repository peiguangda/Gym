<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <title>Giảm cân hiệu quả</title>
  <!-- Latest compiled and minified CSS & JS -->
  <link rel="stylesheet" href="http://localhost:8000/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://localhost:8000/css/home.css">
  <link href="/maxcdn.bootstrapcdn.com/font-awesome/4.1.0/http://localhost:8000/css/font-awesome.min.css" rel="stylesheet">
  <script src="/code.jquery.com/jquery.js"></script>
  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
  <link rel="shortcut icon" href="favicon.ico">

  <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700,900' rel='stylesheet' type='text/css'>
  
  <!-- Animate.css -->
  <link rel="stylesheet" href="http://localhost:8000/css/animate.css">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="http://localhost:8000/css/icomoon.css">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="http://localhost:8000/css/bootstrap.css">
  <!-- Superfish -->
  <link rel="stylesheet" href="http://localhost:8000/css/superfish.css">

  <link rel="stylesheet" href="http://localhost:8000/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Modernizr JS -->
  <script src="http://localhost:8000/js/modernizr-2.6.2.min.js"></script>
  <!-- FOR IE9 below -->
  <!--[if lt IE 9]>
  <script src="http://localhost:8000/http://localhost:8000/js/respond.min.js"></script>
  <![endif]-->
</head>
<body>
<!--- - - - - - - -navbar - - - - - - -->
    @include('partials.navbar_home')
<!--- - - - - - - -navbar - - - - - - -->

    @yield('content')

<!-- - - - - - - - - footer - - - - - - -  -->
    @include('partials.footer')
<!-- - - - - - - - - footer - - - - - - -  -->




  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="http://localhost:8000/js/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="http://localhost:8000/js/bootstrap.min.js"></script>
  <script src="http://localhost:8000/js/home.js"></script>
  <script src="http://localhost:8000/js/jquery.min.js"></script>
  <!-- jQuery Easing -->
  <script src="http://localhost:8000/js/jquery.easing.1.3.js"></script>
  <!-- Bootstrap -->
  <script src="http://localhost:8000/js/bootstrap.min.js"></script>
  <!-- Waypoints -->
  <script src="http://localhost:8000/js/jquery.waypoints.min.js"></script>
  <!-- Stellar -->
  <script src="http://localhost:8000/js/jquery.stellar.min.js"></script>
  <!-- Superfish -->
  <script src="http://localhost:8000/js/hoverIntent.js"></script>
  <script src="http://localhost:8000/js/superfish.js"></script>

  <!-- Main JS (Do not remove) -->
  <script src="http://localhost:8000/js/main.js"></script>
  @yield('script')
</body>

<script>
  $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });

  $("button#add_action").on('click',function(){
    var actionId = $(this).attr('action_id');
    var userId = $(this).attr('user_id');
    var URL = "http://localhost:8000/add/" + userId + "/" + actionId;

    $.ajax({
      type : 'GET',
      url : URL,
      cache : false,
      error: function(data){
        console.log("data");
        alert('Dang ki that bai!')
      },

      success : function(msg){
        console.log(msg);
        if (msg.status == "success") {
          alert('Dang ki thanh cong!');
        } else{
          alert('Ban da dang ki khoa hoc nay roi!');
        }
      }

    })
  });

  $("a#btn-remove").on('click',function(){
    var actionId = $(this).attr('action_id');
    var userId = $(this).attr('user_id');
    var URL = "http://localhost:8000/destroy/" + userId + "/" + actionId;

    $.ajax({
      type : 'GET',
      url : URL,
      cache : false,
      error: function(data){
        console.log("data");
        alert('Xoa that bai!')
      },

      success : function(msg){
        console.log(msg);
        if (msg.status == "success") {
          $('.'+actionId).fadeOut("slow");
        } else{
          $('.'+actionId).fadeOut("slow");
        }
      }

    })
  });
</script>

</html>

