<div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto w-100 justify-content-end">
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome, {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="/dashboard"><i class="far fa-list-alt"></i> Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</button>
                </form>
            </li>
          </ul>
        </li>
        @else
        <li class="nav-item">
            <a class="nav-link page-scroll" href="/login">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link page-scroll" href="/register">Sign Up</a>
        </li>  
        @endauth     
    </ul>              
</div>