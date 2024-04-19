<!-- This is the nav bar structure -->

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    @auth
    <a class="navbar-brand" href="#">App</a>
    @endauth
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">

       
      <!-- Auth: visualize only if the user is logged in -->
        @auth 

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('logout')}}">Logout</a>
        </li>

        @else

        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}">Login</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('registration')}}">Register</a>
        </li>

        
        @endauth
      </ul>
    </div>
  </div>
</nav>