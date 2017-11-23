<div class="container">
  <nav class="navbar navbar-inverse navtop">
    <div class="navbar-header">
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{route('home')}}"> <strong>Gym</strong> </a>
    </div>
    
    <div class="collapse navbar-collapse js-navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="dropdown mega-dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tutorial </a>              
            </li>
            
            <li><a href="#">Store locator</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">My account <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Myprofile</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.nav-collapse -->
  </nav>
</div>