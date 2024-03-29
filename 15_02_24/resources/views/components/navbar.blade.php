<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Blog</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      @guest
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('login')}}">Login</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('register')}}">Register</a>
      </li>
      @endguest
      @auth
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('category.index')}}">Categorie</a>
      </li>
      <form action="{{ route('logout')}}" method="POST">
        @csrf
        <button type="submit">Logout</button>
      </form>
      @endauth
    </ul>
  </div>
</nav>