<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/">Bookarium</a>
        <div class="collapse navbar-collapse" id="navbarsExample05">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
          </ul>
          <div class="form-inline my-2 my-md-0">
                <div class="collapse navbar-collapse" id="navbarsExample05">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i> Koszyk</a>
                            </li>
                            <div class="dropdown show">
                                    <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-users"></i> Użytkownik</a>
                                <div class="dropdown-menu" aria-labelledby="dropdown04">
                                    @if(Auth::check())
                                    <a class="dropdown-item" href="{{route('users.profile')}}">Profil użytkownika</a>
                                    <a class="dropdown-item" href="{{route('users.logout')}}">Wyloguj się</a>
                                    @else
                                    <a class="dropdown-item" href="{{route('users.signup')}}">Zarejestruj się</a>
                                    <a class="dropdown-item" href="{{route('users.signin')}}">Zaloguj się</a>
                                    @endif


                                </div>
                            </div>
                        </ul>
                </div>
            </div>
        </div>
</nav>

