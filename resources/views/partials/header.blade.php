<header class="container mt-3">
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link {{(Route::currentRouteName() === 'home') ? 'active' : '' }} " aria-current="page" href="{{route('home')}}">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ (Route::currentRouteName() === 'pastas.index') ? 'active' : ''}}" href="{{route('pastas.index')}}">La nostra pasta</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
  </ul>
</header>