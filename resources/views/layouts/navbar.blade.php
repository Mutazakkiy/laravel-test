<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/dashboard" class="nav-link">Home</a>
      </li>
    </ul>
     <ul class="navbar-nav ml-auto">
        <li class="mr-2 mt-2 text-primary">
            <h5>Welcome back, {{ auth()->user()->name }}</h5>
        </li>
        <li>
            <form action="/keluar" method="post">
                @csrf
            <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-up"></i>
            Logout</button>
            </form>
        </li>
    </ul>
  </nav>
