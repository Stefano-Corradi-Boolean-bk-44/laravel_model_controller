<header class="container my-5">
    <ul class="nav nav-pills">
        <li class="nav-item">
          <a class="nav-link {{ (Route::currentRouteName() === 'home' ) ? 'active' : '' }} " aria-current="page" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ (Route::currentRouteName() === 'about' ) ? 'active' : '' }}" href="{{ route('about') }}">Chi siamo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ (Route::currentRouteName() === 'contacts' ) ? 'active' : '' }}" href="{{ route('contacts') }}">Contatti</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ (Route::currentRouteName() === 'students' ) ? 'active' : '' }}" href="{{ route('students') }}">Lista studenti</a>
        </li>

      </ul>

</header>
