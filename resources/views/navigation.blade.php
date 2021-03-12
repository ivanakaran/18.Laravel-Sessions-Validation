<nav class="navbar navbar-expand-lg">

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link orange" href="{{ route('home')}}">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('login')}}">LOG IN</a>
      </li>
      @if(session()->has('firstName') && session()->has('lastName'))
      <li class="nav-item">
        <a class="nav-link" href="{{ route('logout')}}">LOG OUT</a>
      </li>
      @endif
    </ul>
  </div>
</nav>