@php
    $username = request()->query('username');
@endphp

<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container">
    <a class="navbar-brand fw-bold" href="{{ route('dashboard', ['username' => $username]) }}">AlatPertanian</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navmenu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a href="{{ route('dashboard', ['username' => $username]) }}" class="nav-link">Dashboard</a>
        </li>
        <li class="nav-item">
          <a href="{{ route('pengelolaan', ['username' => $username]) }}" class="nav-link">Pengelolaan</a>
        </li>
        <li class="nav-item">
          <a href="{{ route('profile', ['username' => $username]) }}" class="nav-link">Profile</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
