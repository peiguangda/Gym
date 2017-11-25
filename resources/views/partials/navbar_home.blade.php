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
        <ul class="nav navbar-nav" style="padding: 10px;">
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Tìm theo tên huấn luận viên">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </ul>

        <ul class="nav navbar-nav">
            <li><a href="{{route('tutorial')}}">Tutorial</a></li>
            <li><a href="{{route('programs')}}">Programs</a></li>

        </ul>

        <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          @if(!\Auth::guest())
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ \Auth::user()->name}} <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Myprofile</a></li>
            <li><a href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                  Logout
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form>
            </li>
          @else
            <li><a href="{{url('/login')}}">Login</a></li>
          @endif
          </ul>
        </li>
      </ul>
    </div><!-- /.nav-collapse -->
  </nav>
</div>